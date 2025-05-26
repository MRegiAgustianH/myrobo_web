<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Sekolah;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $activities = ActivityLog::with('user')
                    ->latest()
                    ->paginate(10);
                    
        $totalSekolah = Sekolah::count();
        $todayActivities = ActivityLog::whereDate('created_at', today())->count();
        $totalAdmin = User::count();
        
        return view('dashboard', compact('activities', 'totalSekolah', 'todayActivities', 'totalAdmin'));
    }
}