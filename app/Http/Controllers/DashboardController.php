<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tracker;

class DashboardController extends Controller
{
    public function index() {
        $totalPengunjung = Tracker::count();
        $totalPengunjungNow = Tracker::where('date', date('Y-m-d'))->count();

        $records = DB::select("SELECT DISTINCT(date) FROM trackers ORDER BY date DESC LIMIT 7");
        $visitorCount = DB::table('trackers')->count();
        $vTodayCount = DB::table('trackers')->where('date', date('Y-m-d'))->count();
        $data = [];
        foreach ($records as $record) {
            $total = DB::table('trackers')->where("date", $record->date)->count();
            $data[] = [
                "year" => $record->date,
                "value" => $total,
            ];
            $not[] = $record->date;
        }

        return view('dashboard.index', compact('totalPengunjung', 'totalPengunjungNow', 'data'));
    }
}
