<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Facility;
use App\Models\Type;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('type', 'facilities')->latest()->get();

        return response()->json([
            'data' => $rooms,
        ], 200);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facilities = Facility::all();
        $types = Type::all();

        return response()->json([
            'facilities' => $facilities,
            'types' => $types,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        try {
            $room = Room::create($request->validated());

            if ($request->has('facility_id')) {
                $room->facilities()->sync($request->input('facility_id', []));
            }

            return response()->json([
                'message' => 'Room created successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        try {
            abort_if(!$room, 404, 'Room not found.');
            $room->load('facilities');

            return response()->json([
                'data' => $room,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        try {
            abort_if(!$room, 404, 'Room not found.');

            $facilities = Facility::all();
            $types = Type::all();

            return response()->json([
                'data' => $room,
                'facilities' => $facilities,
                'types' => $types,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        try {
            abort_if(!$room, 404, 'Room not found.');

            $room->update($request->validated());
            $room->facilities()->sync($request->input('facility_id', []));

            return response()->json([
                'message' => 'Room updated successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong!',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        try {
            abort_if(!$room, 404, 'Room not found.');

            $room->delete();

            return response()->json([
                'message' => 'Room deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something went wrong! Please try again.',
            ], 500);
        }
    }
}
