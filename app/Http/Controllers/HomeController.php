<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
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

    public function singleBlog(Request $request, int $blogId)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.single-blog', compact('rooms'));
    }

    public function contact(Request $request)
    {
        $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

        if ($request->ajax()) {
            return view('data', compact('rooms'));
        }

        return view('home.contact', compact('rooms'));
    }

    public function profile(Request $request, User $guest)
    {
        try {
            $reservations = $guest->reservations()->latest()->paginate(6);
            $rooms = Room::with('type', 'facilities')->latest()->paginate(6);

            if ($request->ajax()) {
                return view('data', compact('rooms'));
            }

            return view('guest.profile', compact('guest', 'reservations', 'rooms'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function updateProfile(Request $request, User $profile)
    {
        try {

            if ($request->hasFile('user-image')) {
                $profile->clearMediaCollection('profile');
                $profile->addMediaFromRequest('user-image')->toMediaCollection('profile');
            }

            $profile->update($request->all());
            return redirect()->back()->with('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
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
