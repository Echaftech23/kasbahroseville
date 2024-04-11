<?php

namespace App\Http\Controllers\Guest;

use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(3);

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

        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        $room->load('facilities', 'type');
        $images = $room->getMedia('rooms');

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.single-room', compact('rooms', 'room', 'images'));
    }
}
