<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $customer->name }} | Luméa Admin</title>

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

        .container {
            width: min(1100px, 92%);
            margin: auto;
        }

        nav {
            background: var(--dark);
            color: white;
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 29px;
            letter-spacing: 3px;
        }

        .logo span {
            color: var(--rose);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .nav-links a {
            color: #d8ceca;
            font-size: 13px;
        }

        .nav-links a:hover {
            color: white;
        }

        .page-header {
            padding: 45px 0 28px;
        }

        .back-link {
            display: inline-block;
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 20px;
        }

        .back-link:hover {
            color: var(--rose);
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        h1 {
            font-family: "Playfair Display", serif;
            font-size: 45px;
            font-weight: 500;
        }

        .page-description {
            color: var(--muted);
            font-size: 13px;
            margin-top: 6px;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 22px;
            padding-bottom: 80px;
        }

        .box {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 17px;
            overflow: hidden;
        }

        .box-header {
            padding: 18px 22px;
            border-bottom: 1px solid #f0e7e3;
            background: #fcf8f5;
        }

        .box-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 23px;
            font-weight: 500;
        }

        .customer-profile {
            padding: 25px 22px;
        }

        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: var(--soft-pink);
            color: var(--rose);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .customer-name {
            font-family: "Playfair Display", serif;
            font-size: 29px;
            margin-bottom: 8px;
        }

        .customer-email {
            color: var(--muted);
            font-size: 13px;
            word-break: break-word;
        }

        .meta-list {
            margin-top: 22px;
        }

        .meta-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid #f1e9e6;
            font-size: 12px;
        }

        .meta-row:last-child {
            border-bottom: none;
        }

        .meta-row span:first-child {
            color: var(--muted);
        }

        .meta-row span:last-child {
            font-weight: 700;
            text-align: right;
        }

        .orders-list {
            padding: 8px 22px 20px;
        }

        .order-card {
            padding: 17px 0;
            border-bottom: 1px solid #f1e9e6;
        }

        .order-card:last-child {
            border-bottom: none;
        }

        .order-top {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            align-items: center;
        }

        .order-id {
            font-weight: 700;
            font-size: 13px;
        }

        .order-date {
            color: var(--muted);
            font-size: 10px;
            margin-top: 4px;
        }

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 27px;
            padding: 0 9px;
            border-radius: 20px;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: .8px;
            font-weight: 700;
        }

        .pending {
            background: #f8eee1;
            color: #9a6a27;
        }

        .processing {
            background: #ececf8;
            color: #5a59a3;
        }

        .shipped {
            background: #eaf4f7;
            color: #467884;
        }

        .delivered {
            background: #edf7ef;
            color: var(--success);
        }

        .cancelled {
            background: #fff0f0;
            color: var(--danger);
        }

        .order-bottom {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            align-items: center;
            margin-top: 13px;
        }

        .order-total {
            font-weight: 700;
            font-size: 13px;
        }

        .order-items {
            color: var(--muted);
            font-size: 11px;
        }

        .view-order {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 35px;
            padding: 0 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 10px;
            font-weight: 700;
        }

        .view-order:hover {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
        }

        .empty {
            padding: 60px 20px;
            text-align: center;
            color: var(--muted);
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .nav-links a:not(:last-child) {
                display: none;
            }

            .order-top,
            .order-bottom {
                align-items: flex-start;
                flex-direction: column;
            }

            .view-order {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="container nav-inner">

        <a href="{{ route('admin.dashboard') }}" class="logo">
            LUMÉ<span>A</span>
        </a>

        <div class="nav-links">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.customers.index') }}">Customers</a>
            <a href="{{ route('admin.orders.index') }}">Orders</a>
            <a href="{{ route('home') }}">Store</a>
        </div>

    </div>
</nav>


<section class="page-header">

    <div class="container">

        <a
            href="{{ route('admin.customers.index') }}"
            class="back-link"
        >
            ← Back to Customers
        </a>

        <div class="eyebrow">
            Customer Profile
        </div>

        <h1>
            {{ $customer->name }}
        </h1>

        <p class="page-description">
            Customer account and order history.
        </p>

    </div>

</section>


<div class="container">

    <div class="profile-grid">

        <!-- PROFILE -->

        <section class="box">

            <div class="box-header">
                <h2>Customer Details</h2>
            </div>

            <div class="customer-profile">

                <div class="avatar">
                    {{ strtoupper(substr($customer->name, 0, 1)) }}
                </div>

                <div class="customer-name">
                    {{ $customer->name }}
                </div>

                <div class="customer-email">
                    {{ $customer->email }}
                </div>

                <div class="meta-list">

                    <div class="meta-row">
                        <span>Customer ID</span>
                        <span>#USER-{{ $customer->id }}</span>
                    </div>

                    <div class="meta-row">
                        <span>Orders</span>
                        <span>{{ $customer->orders->count() }}</span>
                    </div>

                    <div class="meta-row">
                        <span>Joined</span>
                        <span>
                            {{ $customer->created_at->format('d M Y') }}
                        </span>
                    </div>

                    <div class="meta-row">
                        <span>Account Type</span>
                        <span>Customer</span>
                    </div>

                </div>

            </div>

        </section>


        <!-- ORDERS -->

        <section class="box">

            <div class="box-header">
                <h2>Order History</h2>
            </div>

            <div class="orders-list">

                @if($customer->orders->count())

                    @foreach($customer->orders as $order)

                        @php
                            $statusClass = match ($order->status) {
                                'processing' => 'processing',
                                'shipped' => 'shipped',
                                'delivered' => 'delivered',
                                'cancelled' => 'cancelled',
                                default => 'pending',
                            };
                        @endphp

                        <article class="order-card">

                            <div class="order-top">

                                <div>

                                    <div class="order-id">
                                        #LUM-{{ str_pad(
                                            $order->id,
                                            5,
                                            '0',
                                            STR_PAD_LEFT
                                        ) }}
                                    </div>

                                    <div class="order-date">
                                        {{ $order->created_at->format(
                                            'd M Y, h:i A'
                                        ) }}
                                    </div>

                                </div>

                                <span class="status {{ $statusClass }}">
                                    {{ $order->status }}
                                </span>

                            </div>

                            <div class="order-bottom">

                                <div>

                                    <div class="order-total">
                                        LKR {{ number_format(
                                            (float) $order->total,
                                            2
                                        ) }}
                                    </div>

                                    <div class="order-items">
                                        {{ $order->items->sum('quantity') }}
                                        item(s)
                                    </div>

                                </div>

                                <a
                                    href="{{ route(
                                        'admin.orders.show',
                                        $order
                                    ) }}"
                                    class="view-order"
                                >
                                    View Order →
                                </a>

                            </div>

                        </article>

                    @endforeach

                @else

                    <div class="empty">
                        This customer has not placed any orders yet.
                    </div>

                @endif

            </div>

        </section>

    </div>

</div>

</body>
</html>