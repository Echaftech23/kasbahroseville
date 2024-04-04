<?php

namespace App\Http\Controllers\Guest;

use App\Models\Room;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(10);

        return view('guest.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Room $room)
    // {

    //     if (!$room) {
    //         return abort(404, 'Room not found.');
    //     }

    //     try {
    //         $room->load('facilities', 'type');

    //         $images = $room->getMedia('rooms');

    //         return view('guest.show', compact('room', 'images'));
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Something went wrong!');
    //     }
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
