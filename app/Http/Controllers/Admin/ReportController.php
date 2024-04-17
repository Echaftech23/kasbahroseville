<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $from = Carbon::now()->subDays(30);
        $to = Carbon::now();

        $rooms = Room::with(['reservations' => function ($query) use ($from, $to) {
            $query->whereBetween('created_at', [$from, $to]);
        }, 'reservations.payment'])->paginate(10);

        return view('admin.reports.index', compact('rooms', 'from', 'to'));
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
        $from = Carbon::now()->subDays($request->input('from'));
        $to = Carbon::now();

        $rooms = Room::with(['reservations' => function ($query) use ($from, $to) {
            $query->whereBetween('created_at', [$from, $to]);
        }, 'reservations.payment'])->paginate(10);

        return view('admin.reports.index', compact('rooms', 'from', 'to'));
    }
}
