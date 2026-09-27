<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Orders | Luméa Admin</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

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
            --blue: #5a59a3;
            --teal: #467884;
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

        button,
        select {
            font-family: inherit;
        }

        .container {
            width: min(1200px, 92%);
            margin: auto;
        }

        /* NAV */

        nav {
            background: var(--dark);
            color: white;
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
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

        .nav-links a:hover,
        .nav-links a.active {
            color: white;
        }

        .logout-btn {
            border: 1px solid rgba(255,255,255,.16);
            background: transparent;
            color: #d8ceca;
            border-radius: 8px;
            padding: 9px 13px;
            cursor: pointer;
            font-size: 12px;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,.08);
            color: white;
        }

        /* HEADER */

        .page-header {
            padding: 45px 0 28px;
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
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

        .order-count {
            background: var(--soft-pink);
            color: var(--rose);
            border-radius: 30px;
            padding: 8px 12px;
            font-size: 10px;
            font-weight: 700;
        }

        /* ALERT */

        .alert {
            margin-bottom: 22px;
            padding: 14px 17px;
            border-radius: 10px;
            font-size: 13px;
        }

        .alert-success {
            background: #edf7ef;
            border: 1px solid #d4ecd8;
            color: #2d6639;
        }

        /* TABLE */

        .orders-box {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 70px;
        }

        .table-scroll {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 980px;
            border-collapse: collapse;
        }

        thead {
            background: #fcf8f5;
        }

        th {
            text-align: left;
            padding: 15px 18px;
            color: var(--muted);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        td {
            padding: 17px 18px;
            border-top: 1px solid #f1e9e6;
            font-size: 12px;
            vertical-align: middle;
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

        .customer-name {
            font-weight: 700;
        }

        .customer-email,
        .customer-phone {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        .item-count {
            color: var(--muted);
            font-size: 11px;
        }

        .order-total {
            font-weight: 700;
        }

        /* STATUS */

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

        .status-pending {
            background: #f8eee1;
            color: var(--warning);
        }

        .status-processing {
            background: #ececf8;
            color: var(--blue);
        }

        .status-shipped {
            background: #eaf4f7;
            color: var(--teal);
        }

        .status-delivered {
            background: #edf7ef;
            color: var(--success);
        }

        .status-cancelled {
            background: #fff0f0;
            color: var(--danger);
        }

        /* ACTION */

        .view-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 11px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: white;
            color: #5f5350;
            font-size: 10px;
            font-weight: 700;
        }

        .view-btn:hover {
            background: var(--dark);
            border-color: var(--dark);
            color: white;
        }

        /* PAGINATION */

        .pagination-wrap {
            padding: 20px;
            border-top: 1px solid #f1e9e6;
        }

        /* EMPTY */

        .empty {
            text-align: center;
            padding: 75px 20px;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty h2 {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            margin-bottom: 7px;
        }

        .empty p {
            color: var(--muted);
            font-size: 13px;
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .header-row {
                flex-direction: column;
                align-items: flex-start;
            }

            h1 {
                font-size: 38px;
            }

            .nav-links a:not(.active) {
                display: none;
            }

        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav>

    <div class="container nav-inner">


        <a
            href="{{ route('admin.dashboard') }}"
            class="logo"
        >
            LUMÉ<span>A</span>
        </a>


        <div class="nav-links">

            <a href="{{ route('admin.dashboard') }}">
                Dashboard
            </a>


            <a href="{{ route('admin.products.index') }}">
                Products
            </a>


            <a
                href="{{ route('admin.orders.index') }}"
                class="active"
            >
                Orders
            </a>


            <a href="{{ route('home') }}">
                Store
            </a>


            <form
                action="{{ route('logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-btn"
                >
                    Logout
                </button>

            </form>

        </div>


    </div>

</nav>


<!-- HEADER -->

<section class="page-header">

    <div class="container">


        <div class="header-row">


            <div>

                <div class="eyebrow">
                    Store Management
                </div>

                <h1>
                    Orders
                </h1>

                <p class="page-description">
                    View and manage customer orders.
                </p>

            </div>


            <div class="order-count">

                {{ $orders->total() }} TOTAL ORDERS

            </div>


        </div>

    </div>

</section>


<div class="container">


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="orders-box">


        @if($orders->count() > 0)


            <div class="table-scroll">

                <table>


                    <thead>

                        <tr>

                            <th>
                                Order
                            </th>

                            <th>
                                Customer
                            </th>

                            <th>
                                Items
                            </th>

                            <th>
                                Total
                            </th>

                            <th>
                                Payment
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @foreach($orders as $order)


                            @php

                                $statusClass = match ($order->status) {

                                    'processing' =>
                                        'status-processing',

                                    'shipped' =>
                                        'status-shipped',

                                    'delivered' =>
                                        'status-delivered',

                                    'cancelled' =>
                                        'status-cancelled',

                                    default =>
                                        'status-pending',

                                };

                            @endphp


                            <tr>


                                <!-- ORDER -->

                                <td>

                                    <div class="order-id">

                                        #LUM-
                                        {{ str_pad(
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

                                </td>


                                <!-- CUSTOMER -->

                                <td>

                                    <div class="customer-name">

                                        {{ $order->customer_name }}

                                    </div>


                                    <div class="customer-email">

                                        {{ $order->email }}

                                    </div>


                                    <div class="customer-phone">

                                        {{ $order->phone }}

                                    </div>

                                </td>


                                <!-- ITEMS -->

                                <td>

                                    <span class="item-count">

                                        {{ $order->items->sum('quantity') }}
                                        item(s)

                                    </span>

                                </td>


                                <!-- TOTAL -->

                                <td>

                                    <span class="order-total">

                                        LKR
                                        {{ number_format(
                                            (float) $order->total,
                                            2
                                        ) }}

                                    </span>

                                </td>


                                <!-- PAYMENT -->

                                <td>

                                    <span class="item-count">

                                        {{ ucwords(
                                            str_replace(
                                                '_',
                                                ' ',
                                                $order->payment_method
                                            )
                                        ) }}

                                    </span>

                                </td>


                                <!-- STATUS -->

                                <td>

                                    <span class="status {{ $statusClass }}">

                                        {{ $order->status }}

                                    </span>

                                </td>


                                <!-- ACTION -->

                                <td>

                                    <a
                                        href="{{ route(
                                            'admin.orders.show',
                                            $order
                                        ) }}"
                                        class="view-btn"
                                    >
                                        View Order →
                                    </a>

                                </td>


                            </tr>


                        @endforeach


                    </tbody>


                </table>

            </div>


            <div class="pagination-wrap">

                {{ $orders->links() }}

            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    📦
                </div>

                <h2>
                    No Orders Yet
                </h2>

                <p>
                    Customer orders will appear here once they are placed.
                </p>

            </div>


        @endif


    </div>


</div>


</body>
</html>