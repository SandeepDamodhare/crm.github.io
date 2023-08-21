<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('control-panel.dashboard.index', [
            'statistics' => [
                'Leads' => User::count(),
                'Customers' => Client::count(),
                'Quotations' => Task ::count(),
            ],
        ]);
    }
}
