<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        :root {
            --cream: #fbf7f3;
            --white: #ffffff;
            --soft-pink: #f4e5df;
            --rose: #b97d72;
            --dark: #302826;
            --muted: #756b67;
            --border: #eadfd9;
            --success: #5d8a65;
            --warning: #b88942;
            --danger: #b95d5d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--dark);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        .admin-layout {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 245px 1fr;
        }

        .sidebar {
            background: var(--dark);
            color: white;
            min-height: 100vh;
            position: sticky;
            top: 0;
            height: 100vh;
            padding: 28px 18px;
            display: flex;
            flex-direction: column;
        }

        .brand {
            padding: 5px 12px 28px;
            border-bottom: 1px solid rgba(255,255,255,.1);
            margin-bottom: 25px;
        }

        .brand-logo {
            font-family: "Playfair Display", serif;
            font-size: 27px;
            letter-spacing: 3px;
        }

        .brand-logo span {
            color: var(--rose);
        }

        .brand-subtitle {
            color: #b8aaa5;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 6px;
        }

        .menu-label {
            color: #9f918c;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 9px;
            font-weight: 700;
            padding: 0 12px;
            margin-bottom: 10px;
        }

        .sidebar-nav {
            display: grid;
            gap: 5px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            min-height: 44px;
            padding: 0 12px;
            border-radius: 9px;
            color: #d2c7c3;
            font-size: 13px;
            transition: .2s;
        }

        .nav-item-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-item:hover,
        .nav-item.active {
            background: rgba(255,255,255,.09);
            color: white;
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 15px;
        }

        .nav-badge {
            min-width: 20px;
            height: 20px;
            padding: 0 6px;
            border-radius: 20px;
            background: var(--rose);
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: 700;
        }

        .sidebar-bottom {
            margin-top: auto;
            border-top: 1px solid rgba(255,255,255,.1);
            padding-top: 18px;
        }

        .back-store {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #c9bebb;
            font-size: 12px;
            padding: 10px 12px;
        }

        .back-store:hover {
            color: white;
        }

        .logout-form {
            margin-top: 5px;
        }

        .logout-btn {
            width: 100%;
            min-height: 42px;
            border: 1px solid rgba(255,255,255,.12);
            background: transparent;
            color: #d2c7c3;
            border-radius: 9px;
            cursor: pointer;
            font-size: 12px;
            text-align: left;
            padding: 0 12px;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.08);
            color: white;
        }

        .main {
            min-width: 0;
        }

        .topbar {
            height: 78px;
            background: white;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
            gap: 20px;
        }

        .topbar-title {
            font-family: "Playfair Display", serif;
            font-size: 27px;
        }

        .admin-user {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--soft-pink);
            color: var(--rose);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 13px;
        }

        .user-info small {
            display: block;
            color: var(--muted);
            font-size: 10px;
        }

        .user-info strong {
            font-size: 12px;
        }

        .content {
            padding: 35px;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .welcome h1 {
            font-family: "Playfair Display", serif;
            font-weight: 500;
            font-size: 40px;
            line-height: 1.1;
        }

        .welcome p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 20px;
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .stat-title {
            color: var(--muted);
            font-size: 12px;
            font-weight: 500;
        }

        .stat-icon {
            width: 36px;
            height: 36px;
            border-radius: 9px;
            background: var(--soft-pink);
            color: var(--rose);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
        }

        .stat-number {
            font-size: 24px;
            font-weight: 700;
            margin-top: 15px;
            line-height: 1.2;
        }

        .stat-note {
            color: var(--muted);
            font-size: 10px;
            margin-top: 5px;
        }

        .stat-note strong {
            color: var(--danger);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1.55fr .95fr;
            gap: 20px;
        }

        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .panel-header {
            min-height: 62px;
            padding: 0 22px;
            border-bottom: 1px solid #f0e7e3;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .panel-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 22px;
            font-weight: 500;
        }

        .panel-link {
            color: var(--rose);
            font-size: 11px;
            font-weight: 700;
        }

        .panel-link:hover {
            text-decoration: underline;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 13px 20px;
            color: var(--muted);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            background: #fcf9f7;
        }

        td {
            padding: 15px 20px;
            border-top: 1px solid #f3ebe8;
            font-size: 12px;
            white-space: nowrap;
        }

        .order-id {
            font-weight: 700;
        }

        .customer-name {
            font-weight: 600;
        }

        .customer-email {
            color: var(--muted);
            font-size: 10px;
            margin-top: 2px;
        }

        .order-amount {
            font-weight: 700;
        }

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 25px;
            padding: 0 9px;
            border-radius: 20px;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: .8px;
            font-weight: 700;
        }

        .status-pending {
            background: #f8eee1;
            color: #9a6a27;
        }

        .status-processing {
            background: #ececf8;
            color: #5a59a3;
        }

        .status-shipped {
            background: #eaf4f7;
            color: #467884;
        }

        .status-delivered {
            background: #edf7ef;
            color: var(--success);
        }

        .status-cancelled {
            background: #fff0f0;
            color: var(--danger);
        }

        .stock-list {
            padding: 8px 22px 18px;
        }

        .stock-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #f2eae7;
        }

        .stock-item:last-child {
            border-bottom: none;
        }

        .stock-name {
            font-family: "Playfair Display", serif;
            font-size: 16px;
        }

        .stock-category {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        .stock-count {
            min-width: 55px;
            text-align: center;
            padding: 7px 8px;
            border-radius: 8px;
            background: #fff0f0;
            color: var(--danger);
            font-size: 10px;
            font-weight: 700;
        }

        .empty-state {
            padding: 30px 20px;
            text-align: center;
            color: var(--muted);
            font-size: 12px;
        }

        .quick-actions {
            margin-top: 20px;
        }

        .action-grid {
            padding: 20px 22px;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px;
        }

        .action {
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 64px;
            border: 1px solid var(--border);
            border-radius: 11px;
            padding: 0 14px;
            transition: .2s;
        }

        .action:hover {
            background: #fcf7f4;
            border-color: var(--rose);
        }

        .action-icon {
            width: 35px;
            height: 35px;
            border-radius: 9px;
            background: var(--soft-pink);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--rose);
            flex-shrink: 0;
        }

        .action strong {
            display: block;
            font-size: 12px;
        }

        .action span {
            display: block;
            color: var(--muted);
            font-size: 9px;
            margin-top: 2px;
        }

        @media (max-width: 1400px) {
            .stats-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .action-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 1150px) {
            .admin-layout {
                grid-template-columns: 210px 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .action-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 900px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .admin-layout {
                display: block;
            }

            .sidebar {
                position: static;
                height: auto;
                min-height: auto;
                padding: 16px;
            }

            .brand {
                margin-bottom: 15px;
                padding-bottom: 15px;
            }

            .sidebar-nav {
                grid-template-columns: repeat(2, 1fr);
            }

            .menu-label,
            .sidebar-bottom {
                display: none;
            }

            .topbar {
                padding: 0 18px;
            }

            .topbar-title {
                font-size: 23px;
            }

            .content {
                padding: 22px 18px;
            }

            .welcome h1 {
                font-size: 34px;
            }
        }

        @media (max-width: 500px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .action-grid {
                grid-template-columns: 1fr;
            }

            .sidebar-nav {
                grid-template-columns: 1fr 1fr;
            }

            .nav-item {
                font-size: 11px;
            }

            .user-info {
                display: none;
            }
        }
    </style>

</head>

<body>

<div class="admin-layout">

    <aside class="sidebar">

        <div class="brand">
            <div class="brand-logo">
                LUMÉ<span>A</span>
            </div>

            <div class="brand-subtitle">
                Admin Panel
            </div>
        </div>

        <div class="menu-label">
            Management
        </div>

        <nav class="sidebar-nav">

            <a href="{{ route('admin.dashboard') }}" class="nav-item active">
                <span class="nav-item-left">
                    <span class="nav-icon">▦</span>
                    Dashboard
                </span>
            </a>

            <a href="{{ route('admin.products.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">◫</span>
                    Products
                </span>
            </a>

            <a href="{{ route('admin.categories.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">⌑</span>
                    Categories
                </span>
            </a>

            <a href="{{ route('admin.orders.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">🛍</span>
                    Orders
                </span>
            </a>

            <a href="{{ route('admin.customers.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">♙</span>
                    Customers
                </span>
            </a>

            <a href="{{ route('admin.reviews.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">♡</span>
                    Reviews
                </span>

                @if($pendingReviews > 0)
                    <span class="nav-badge">
                        {{ $pendingReviews }}
                    </span>
                @endif
            </a>

            <a href="{{ route('admin.coupons.index') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">%</span>
                    Coupons
                </span>
            </a>

            <a href="{{ route('admin.reports') }}" class="nav-item">
                <span class="nav-item-left">
                    <span class="nav-icon">◔</span>
                    Reports
                </span>
            </a>

        </nav>

        <div class="sidebar-bottom">

            <a href="{{ route('home') }}" class="back-store">
                ← Back to Store
            </a>

            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf

                <button type="submit" class="logout-btn">
                    ↪ &nbsp; Logout
                </button>
            </form>

        </div>

    </aside>

    <main class="main">

        <header class="topbar">

            <div class="topbar-title">
                Dashboard
            </div>

            <div class="admin-user">

                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                <div class="user-info">
                    <small>Administrator</small>

                    <strong>
                        {{ Auth::user()->name }}
                    </strong>
                </div>

            </div>

        </header>

        <div class="content">

            <div class="welcome">

                <div class="eyebrow">
                    Luméa Cosmetics
                </div>

                <h1>
                    Welcome back, {{ Auth::user()->name }}.
                </h1>

                <p>
                    Here's what's happening with your store today.
                </p>

            </div>

            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Products</span>
                        <span class="stat-icon">◫</span>
                    </div>

                    <div class="stat-number">
                        {{ number_format($totalProducts) }}
                    </div>

                    <div class="stat-note">
                        Products in catalog
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Categories</span>
                        <span class="stat-icon">⌑</span>
                    </div>

                    <div class="stat-number">
                        {{ number_format($totalCategories) }}
                    </div>

                    <div class="stat-note">
                        Active store categories
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Orders</span>
                        <span class="stat-icon">🛍</span>
                    </div>

                    <div class="stat-number">
                        {{ number_format($totalOrders) }}
                    </div>

                    <div class="stat-note">
                        All customer orders
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Customers</span>
                        <span class="stat-icon">♙</span>
                    </div>

                    <div class="stat-number">
                        {{ number_format($totalCustomers) }}
                    </div>

                    <div class="stat-note">
                        Registered accounts
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Reviews</span>
                        <span class="stat-icon">★</span>
                    </div>

                    <div class="stat-number">
                        {{ number_format($totalReviews) }}
                    </div>

                    <div class="stat-note">
                        @if($pendingReviews > 0)
                            <strong>{{ $pendingReviews }} pending</strong>
                        @else
                            All reviews are approved
                        @endif
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-top">
                        <span class="stat-title">Revenue</span>
                        <span class="stat-icon">LKR</span>
                    </div>

                    <div class="stat-number">
                        LKR {{ number_format((float) $totalRevenue, 0) }}
                    </div>

                    <div class="stat-note">
                        Current order revenue
                    </div>
                </div>

            </div>

            <div class="dashboard-grid">

                <section class="panel">

                    <div class="panel-header">

                        <h2>
                            Recent Orders
                        </h2>

                        <a
                            href="{{ route('admin.orders.index') }}"
                            class="panel-link"
                        >
                            View all →
                        </a>

                    </div>

                    @if($recentOrders->count())

                        <div class="table-wrapper">

                            <table>

                                <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Customer</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($recentOrders as $order)

                                    @php
                                        $statusClass = match ($order->status) {
                                            'processing' => 'status-processing',
                                            'shipped' => 'status-shipped',
                                            'delivered' => 'status-delivered',
                                            'cancelled' => 'status-cancelled',
                                            default => 'status-pending',
                                        };
                                    @endphp

                                    <tr>

                                        <td>
                                            <div class="order-id">
                                                #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
                                            </div>

                                            <div class="customer-email">
                                                {{ $order->created_at->format('d M Y') }}
                                            </div>
                                        </td>

                                        <td>
                                            <div class="customer-name">
                                                {{ $order->customer_name }}
                                            </div>

                                            <div class="customer-email">
                                                {{ $order->email }}
                                            </div>
                                        </td>

                                        <td>
                                            <span class="order-amount">
                                                LKR {{ number_format((float) $order->total, 2) }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="status {{ $statusClass }}">
                                                {{ $order->status }}
                                            </span>
                                        </td>

                                    </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>

                    @else

                        <div class="empty-state">
                            No orders have been placed yet.
                        </div>

                    @endif

                </section>

                <section class="panel">

                    <div class="panel-header">

                        <h2>
                            Low Stock
                        </h2>

                        <a
                            href="{{ route('admin.products.index') }}"
                            class="panel-link"
                        >
                            Manage →
                        </a>

                    </div>

                    <div class="stock-list">

                        @if($lowStockProducts->count())

                            @foreach($lowStockProducts as $product)

                                <div class="stock-item">

                                    <div>
                                        <div class="stock-name">
                                            {{ $product->name }}
                                        </div>

                                        <div class="stock-category">
                                            {{ $product->category }}
                                        </div>
                                    </div>

                                    <div class="stock-count">
                                        {{ $product->stock }} left
                                    </div>

                                </div>

                            @endforeach

                        @else

                            <div class="empty-state">
                                All products have healthy stock levels.
                            </div>

                        @endif

                    </div>

                </section>

            </div>

            <section class="panel quick-actions">

                <div class="panel-header">

                    <h2>
                        Quick Actions
                    </h2>

                </div>

                <div class="action-grid">

                    <a
                        href="{{ route('admin.products.create') }}"
                        class="action"
                    >
                        <div class="action-icon">+</div>

                        <div>
                            <strong>Add Product</strong>
                            <span>Create a new product</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.categories.create') }}"
                        class="action"
                    >
                        <div class="action-icon">⌑</div>

                        <div>
                            <strong>Add Category</strong>
                            <span>Create a new category</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.orders.index') }}"
                        class="action"
                    >
                        <div class="action-icon">🛍</div>

                        <div>
                            <strong>Manage Orders</strong>
                            <span>View customer orders</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.customers.index') }}"
                        class="action"
                    >
                        <div class="action-icon">♙</div>

                        <div>
                            <strong>Customers</strong>
                            <span>Manage customer accounts</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.reviews.index') }}"
                        class="action"
                    >
                        <div class="action-icon">★</div>

                        <div>
                            <strong>Manage Reviews</strong>
                            <span>Approve or delete reviews</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.coupons.index') }}"
                        class="action"
                    >
                        <div class="action-icon">%</div>

                        <div>
                            <strong>Manage Coupons</strong>
                            <span>Create and edit coupons</span>
                        </div>
                    </a>

                    <a
                        href="{{ route('admin.reports') }}"
                        class="action"
                    >
                        <div class="action-icon">◔</div>

                        <div>
                            <strong>View Reports</strong>
                            <span>Store performance</span>
                        </div>
                    </a>

                </div>

            </section>

        </div>

    </main>

</div>

</body>
</html>
