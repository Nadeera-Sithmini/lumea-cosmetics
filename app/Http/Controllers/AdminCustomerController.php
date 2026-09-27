<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'customer')
            ->withCount('orders')
            ->latest()
            ->paginate(15);

        return view('admin.customers.index', compact('customers'));
    }

    public function show(User $customer)
    {
        abort_unless($customer->role === 'customer', 404);

        $customer->load([
            'orders' => function ($query) {
                $query->latest();
            },
        ]);

        return view('admin.customers.show', compact('customer'));
    }
}