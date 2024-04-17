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

        $rooms = Room::with(['reservations.payment' => function ($query) use ($from, $to) {
            $query->whereBetween('created_at', [$from, $to]);
        }])->paginate(10);

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
