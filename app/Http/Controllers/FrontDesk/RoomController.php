<?php

namespace App\Http\Controllers\FrontDesk;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Facility;
use App\Models\Type;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(10);

        return view('front-desk.rooms.index', compact('rooms'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {

        try {
            $room->load('facilities', 'type');

            $images = $room->getMedia('rooms');

            return view('front-desk.rooms.show', compact('room', 'images'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function search(Request $request)
    {
        $search = $request->get('room-search');
        $rooms = Room::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('priority', 'like', '%' . $search . '%')
            ->latest()->paginate(10);

        return view('front-desk.rooms.index', ['rooms' => $rooms]);
    }


    public function filter(Request $request)
    {
        $query = Room::query();

        $rooms = Room::with('type', 'facilities');

        if ($request->has('room-type')) {
            $query->whereHas('type', function ($query) use ($request) {
                $query->where('type', $request->get('room-type'));
            });
        }

        if ($request->has('capacity')) {
            $query->where('capacity', $request->get('capacity'));
        }

        if ($request->has('room-status') && $request->get('room-status') != 'any Status') {
            $query->where('statut', $request->get('room-status'));
        }

        if ($request->has('room-priority')) {
            $query->where('priority', $request->get('room-priority'));
        }

        $rooms = $query->latest()->paginate(10);

        return view('front-desk.rooms.index', compact('rooms'));
    }
}
