<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.index', compact('rooms'));
    }

    public function about(Request $request)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.about', compact('rooms'));
    }

    public function blog(Request $request)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.blog', compact('rooms'));
    }


    public function search(Request $request)
    {
        $search = $request->get('room-search');

        $rooms = Room::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhereHas('type', function ($query) use ($search) {
                $query->where('type', 'like', '%' . $search . '%');
            })->latest()->paginate(6);

        $roomData = $rooms->map(function ($room) {
            return [
                'detailsUrl' => route('home.rooms.show', $room->id),
                'imageUrl' => $room->getFirstMediaUrl('rooms'),
                'name' => $room->name,
                'description' => $room->description,
            ];
        });

        return response()->json(['rooms' => $roomData]);
    }
}
