<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $totalOrders = Order::count();

        $totalCustomers = User::where('role', 'customer')->count();

        $totalReviews = Review::count();

        $pendingReviews = Review::where('is_approved', false)->count();

        $totalRevenue = Order::whereIn('status', [
            'pending',
            'processing',
            'shipped',
            'delivered',
        ])->sum('total');

        $recentOrders = Order::latest()
            ->take(5)
            ->get();

        $lowStockProducts = Product::where('stock', '<=', 5)
            ->where('is_active', true)
            ->orderBy('stock')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalOrders',
            'totalCustomers',
            'totalReviews',
            'pendingReviews',
            'totalRevenue',
            'recentOrders',
            'lowStockProducts'
        ));
    }

    public function reports()
    {
        $totalRevenue = Order::whereIn('status', [
            'pending',
            'processing',
            'shipped',
            'delivered',
        ])->sum('total');

        $totalOrders = Order::count();

        $deliveredOrders = Order::where('status', 'delivered')->count();

        $pendingOrders = Order::whereIn('status', [
            'pending',
            'processing',
            'shipped',
        ])->count();

        $cancelledOrders = Order::where('status', 'cancelled')->count();

        $averageOrderValue = $totalOrders > 0
            ? ((float) $totalRevenue / $totalOrders)
            : 0;

        return view('admin.reports', compact(
            'totalRevenue',
            'totalOrders',
            'deliveredOrders',
            'pendingOrders',
            'cancelledOrders',
            'averageOrderValue'
        ));
    }
}
