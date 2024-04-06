<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private function getRooms($perPage = 6, $pageName = null)
    {
        return Room::with('type', 'facilities')->latest()->paginate($perPage, ['*'], $pageName);
    }
    
    public function index(Request $request)
    {
        $rooms = $this->getRooms();

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.index', compact('rooms'));
    }

    public function rooms(Request $request)
    {
        $rooms = $this->getRooms(3, 'rooms_page');

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.rooms', compact('rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Room $room)
    {
        if (!$room) {
            abort(404, 'Room not found.');
        }

        $rooms = $this->getRooms();

        $room->load('facilities', 'type');
        $images = $room->getMedia('rooms');

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.single-room', compact('rooms', 'room', 'images'));
    }

    public function search(Request $request)
    {
        $search = $request->get('room-search');
        $rooms = Room::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhereHas('type', function ($query) use ($search) {
                $query->where('type', 'like', '%' . $search . '%');
            })
            ->latest()->paginate(6, ['*'], 'rooms_page');

        $roomData = $rooms->map(function ($room) {
            return [
                'detailsUrl' => route('roomDetails', $room->id),
                'imageUrl' => $room->getFirstMediaUrl('rooms'),
                'name' => $room->name,
                'description' => $room->description,
            ];
        });

        return response()->json(['rooms' => $roomData]);
    }
}
