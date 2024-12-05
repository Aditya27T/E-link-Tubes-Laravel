<?php
namespace App\Http\Controllers;

use App\Services\DashboardService;
use App\Http\Resources\DashboardResource;

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->middleware('auth');
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        $stats = $this->dashboardService->getUserStats(auth()->id());
        return view('dashboard', $stats);
    }
}