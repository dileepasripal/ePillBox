<?php
// app/Http/Controllers/AdminDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Or any other relevant models


class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->hasPermission('users-create')){
            // 1. Fetch Key Statistics:
            $totalUsers = User::count();
            $newUsersThisWeek = User::where('created_at', '>=', now()->subWeek())->count();
            
            // 2. Prepare Data for Charts (Optional):
            //$salesData = User::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
            //    ->groupBy('date')
            //    ->get();

            // 3. Return View with Data:
            return view('admindashboard', [
                'totalUsers' => $totalUsers,
                'newUsersThisWeek' => $newUsersThisWeek,
                //'totalOrders' => $totalOrders,
                //'pendingOrders' => $pendingOrders,
                //'lowStockProducts' => $lowStockProducts,
                //'salesData' => $salesData,
                // Add any other data you want to pass to the view
            ]);
        }
        abort(404);
    }

    // Other methods for specific admin actions (e.g., managing users, products, etc.)
}
