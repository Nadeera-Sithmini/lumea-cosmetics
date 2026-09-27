<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()
            ->orders()
            ->with('items')
            ->latest()
            ->get();

        return view('orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Auth::user()
            ->orders()
            ->with('items')
            ->findOrFail($id);

        return view('order-details', compact('order'));
    }
}