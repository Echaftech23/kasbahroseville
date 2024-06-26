<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = User::latest()->paginate(10);
        $Totalguests = User::count();

        return view('admin.guests.index', compact('guests', 'Totalguests'));
    }


    /**
     * Display the specified resource.
     */
    public function show(User $guest)
    {
        try {
            $reservations = $guest->reservations()->latest()->paginate(10);
            return view('admin.guests.show', compact('guest', 'reservations'));
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $guest)
    {
        try {

            $guest->update(['statut' => $request->input('statut')]);

            return redirect()->back()->with('success', 'Guest updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('warning', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function profile(){
        $profile = auth()->user();
        return view('admin.profile', compact('profile'));
    }

    public function updateProfile(Request $request, User $profile){
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $guest)
    {
        try {

            $guest->delete();

            return redirect()->route('admin.guests.index')->with('success', 'Guest deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }

    public function search(Request $request)
    {
        $search = $request->get('guest-search');
        $Totalguests = User::count();
        $guests = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('statut', 'like', '%' . $search . '%')
            ->latest()->paginate(10);

        return view('admin.guests.index', ['guests' => $guests, 'Totalguests' => $Totalguests]);
    }

}
