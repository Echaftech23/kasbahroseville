<?php

namespace App\Http\Controllers\Admin;

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

        return view('admin.rooms.index', compact('rooms'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facilities = Facility::all();
        $types = Type::all();

        return view('admin.rooms.create', compact(['facilities', 'types']));
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

            if (!$request->hasFile('room-images')) {
                return back()->withErrors(['room-images' => 'Images are required.']);
            }

            foreach ($request->file('room-images') as $image) {
                $room->addMedia($image)->toMediaCollection('rooms');
            }

            return redirect()->route('rooms.index')->with('success', 'Room created successfully');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Something went wrong!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {

        if (!$room) {
            return abort(404, 'Room not found.');
        }

        try {
            $room->load('facilities', 'type');

            $images = $room->getMedia('rooms');

            return view('admin.rooms.show', compact('room', 'images'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
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
            $images = $room->getMedia('rooms');

            return view('admin.rooms.edit', compact('room', 'facilities', 'types', 'images'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        abort_if(!$room, 404, 'Room not found.');

        $room->update($request->validated());

        if ($request->hasFile('room-images')) {
            $existingMediaItems = $room->getMedia('rooms');

            foreach ($request->file('room-images') as $key => $image) {
                // If there is an existing media item at this index, delete it
                if (isset($existingMediaItems[$key])) {
                    $existingMediaItems[$key]->delete();
                }

                // Add the new image
                $room->addMediaFromRequest('room-images.' . $key)->toMediaCollection('rooms');
            }
        }

        $room->facilities()->sync($request->input('facility_id', []));

        return redirect()->route('rooms.index')->with('success', 'Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        try {
            abort_if(!$room, 404, 'Room not found.');

            $room->delete();

            return redirect()->route('rooms.index')->with('success', 'Room deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function search(Request $request)
    {
        $search = $request->get('room-search');
        $rooms = Room::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('priority', 'like', '%' . $search . '%')
            ->latest()->paginate(10);

        return view('admin.rooms.index', ['rooms' => $rooms]);
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

        if ($request->has('room-status') && $request->get('room-status') != 'any Status'){
            $query->where('statut', $request->get('room-status'));
        }

        if ($request->has('room-priority')) {
            $query->where('priority', $request->get('room-priority'));
        }

        $rooms = $query->latest()->paginate(10);

        return view('admin.rooms.index', compact('rooms'));
    }
}
