<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Facility;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = User::latest()->paginate(10);

        return view('admin.guests.index', compact('guests'));
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

    // public function store(StoreGuestRequest $request)
    // {
    //     try {
    //         $room = Room::create($request->validated());

    //         foreach ($request->file('room-images') as $image) {
    //             $room->addMedia($image)->toMediaCollection('rooms');
    //         }

    //         return redirect()->route('rooms.index')->with('success', 'Room created successfully');
    //     } catch (\Exception $e) {
    //         return back()->withInput()->withErrors(['unexpected_error' => 'Something went wrong!']);
    //     }
    // }

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

    //         return view('admin.rooms.show', compact('room', 'images'));
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Something went wrong!');
    //     }
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $guest)
    {
        try {
            $guest->update($request->validated());

            return redirect()->back()->with('success', 'Guest updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $guest)
    {
        try {

            $guest->delete();

            return redirect()->route('guests.index')->with('success', 'Guest deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }

}
