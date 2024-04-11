<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(StoreRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);

        $user->roles()->attach([2]);
        return redirect()->route('login')->with('success', 'Registered successfully');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginAction(StoreLoginRequest $request)
    {

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        // $userId = Auth::user()->id;

        // Check the user's role and redirect based on the role
        if ($user && $user->hasRole('Admin')) {
            return redirect()->route('dashboard');
        } elseif ($user && $user->hasRole('Front-desk')) {
            return redirect('reservations');
        }
        else {
            return redirect('/home')->with('success', "logged In Successfully");
        }

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    public function profile()
    {
        return view('profile');
    }
}
