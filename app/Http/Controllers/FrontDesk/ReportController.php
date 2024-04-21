<?php

namespace App\Http\Controllers\FrontDesk;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('front-desk.index', compact('rooms', 'from', 'to'));
    }

    public function search(Request $request)
    {
        $search = $request->get('room-search');
        $rooms = Room::where('name', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('priority', 'like', '%' . $search . '%')
            ->latest()->paginate(10);

        return view('front-desk.rooms.index', ['rooms' => $rooms]);
    }


    public function filter(Request $request)
    {
        $from = Carbon::now()->subDays($request->input('from'));
        $to = Carbon::now();

        $rooms = Room::with(['reservations' => function ($query) use ($from, $to) {
            $query->whereBetween('created_at', [$from, $to]);
        }, 'reservations.payment'])->paginate(10);

        return view('front-desk.reports.index', compact('rooms', 'from', 'to'));
    }

    public function getStats()
    {
        $today = Carbon::now();
        $last30Days = Carbon::now()->subDays(30);
        $last7Days = Carbon::now()->subDays(7);

        $totalBooking = Reservation::count();
        $totalCustomer = User::count();

        $totalRevenueLast30Days = Reservation::join('payments', 'reservations.id', '=', 'payments.reservation_id')
            ->whereBetween('reservations.created_at', [now()->subDays(30), now()])
            ->sum('payments.totalAmount');

        $weeklyRevenue = Reservation::join('payments', 'reservations.id', '=', 'payments.reservation_id')
        ->whereBetween('reservations.created_at', [now()->subDays(7), now()])
            ->sum('payments.totalAmount');

        $roomBookings = Reservation::join('rooms', 'reservations.room_id', '=', 'rooms.id')
        ->join('types', 'rooms.type_id', '=', 'types.id')
        ->whereBetween('reservations.created_at', [$last30Days, $today])
            ->select('types.type', DB::raw('count(*) as total'))
            ->groupBy('types.type')
            ->get()
            ->pluck('total', 'type');

        // dd($roomBookings);

        $averageDailyRevenue = $totalRevenueLast30Days / 30;

        return view('front-desk.index', compact('totalRevenueLast30Days',  'weeklyRevenue', 'averageDailyRevenue', 'totalBooking', 'totalCustomer', 'roomBookings'));
    }

    // public function getDoughnutChartData()
    // {
    //     $today = Carbon::now();
    //     $last30Days = Carbon::now()->subDays(30);
    //     $last7Days = Carbon::now()->subDays(7);

    //     $totalRevenueLast30Days = Reservation::whereBetween('created_at', [$last30Days, $today])->sum('totalAmount');
    //     $monthlyRevenue = Reservation::whereMonth('created_at', $today->month)->sum('totalAmount');
    //     $weeklyRevenue = Reservation::whereBetween('created_at', [$last7Days, $today])->sum('totalAmount');
    //     $averageDailyRevenue = $totalRevenueLast30Days / 30;



    //     return response()->json(['data' => $roomBookings]);
    // }
}
