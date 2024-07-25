<?php
// app/Http/Controllers/AdminDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Or any other relevant models
use App\Models\Order;
use App\Models\Product;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        // 1. Fetch Key Statistics:
        $totalUsers = User::count();
        $newUsersThisWeek = User::where('created_at', '>=', now()->subWeek())->count();
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $lowStockProducts = Product::where('stock', '<=', 10)->count();

        // 2. Prepare Data for Charts (Optional):
        $salesData = Order::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
            ->groupBy('date')
            ->get();

        // 3. Return View with Data:
        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'newUsersThisWeek' => $newUsersThisWeek,
            'totalOrders' => $totalOrders,
            'pendingOrders' => $pendingOrders,
            'lowStockProducts' => $lowStockProducts,
            'salesData' => $salesData,
            // Add any other data you want to pass to the view
        ]);
    }

    // Other methods for specific admin actions (e.g., managing users, products, etc.)
}
