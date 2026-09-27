<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Order #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
        | Luméa Admin
    </title>

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
            width: min(1100px, 92%);
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

        .nav-links a:hover {
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

        .back-link {
            display: inline-block;
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 20px;
        }

        .back-link:hover {
            color: var(--rose);
        }

        .header-row {
            display: flex;
            align-items: end;
            justify-content: space-between;
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
            font-size: 44px;
            font-weight: 500;
            line-height: 1.1;
        }

        .order-date {
            color: var(--muted);
            font-size: 12px;
            margin-top: 7px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 31px;
            padding: 0 13px;
            border-radius: 20px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            background: var(--soft-pink);
            color: var(--rose);
        }

        /* ALERT */

        .alert {
            padding: 14px 17px;
            border-radius: 10px;
            margin-bottom: 22px;
            font-size: 13px;
        }

        .alert-success {
            background: #edf7ef;
            color: #2d6639;
            border: 1px solid #d4ecd8;
        }

        .alert-error {
            background: #fff0f0;
            color: var(--danger);
            border: 1px solid #f0d0d0;
        }

        /* LAYOUT */

        .details-grid {
            display: grid;
            grid-template-columns: 1.4fr .9fr;
            gap: 22px;
            padding-bottom: 80px;
        }

        .box {
            background: white;
            border: 1px solid var(--border);
            border-radius: 17px;
            overflow: hidden;
        }

        .box + .box {
            margin-top: 22px;
        }

        .box-header {
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 0 22px;
            border-bottom: 1px solid #f0e7e3;
            background: #fcf8f5;
        }

        .box-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 22px;
            font-weight: 500;
        }

        /* ITEMS */

        .items {
            padding: 8px 22px;
        }

        .item {
            display: grid;
            grid-template-columns: 70px 1fr auto;
            gap: 15px;
            align-items: center;
            padding: 17px 0;
            border-bottom: 1px solid #f1e9e6;
        }

        .item:last-child {
            border-bottom: none;
        }

        .item-image {
            width: 70px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            background: #f4ece8;
        }

        .item-name {
            font-family: "Playfair Display", serif;
            font-size: 18px;
            margin-bottom: 4px;
        }

        .item-meta {
            color: var(--muted);
            font-size: 11px;
        }

        .item-price {
            font-size: 13px;
            font-weight: 700;
            text-align: right;
        }

        /* SUMMARY */

        .summary {
            padding: 21px 22px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 10px 0;
            color: var(--muted);
            font-size: 13px;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            border-top: 1px solid var(--border);
            padding-top: 17px;
            margin-top: 7px;
            font-size: 19px;
            font-weight: 700;
        }

        /* INFO */

        .info {
            padding: 20px 22px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 0;
            border-bottom: 1px solid #f1e9e6;
            font-size: 12px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--muted);
        }

        .info-value {
            font-weight: 700;
            text-align: right;
        }

        /* CUSTOMER */

        .customer-box {
            padding: 20px 22px;
        }

        .customer-name {
            font-family: "Playfair Display", serif;
            font-size: 22px;
            margin-bottom: 7px;
        }

        .customer-line {
            color: var(--muted);
            font-size: 12px;
            margin-top: 5px;
        }

        /* ADDRESS */

        .address {
            padding: 20px 22px;
        }

        .address p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
        }

        /* STATUS UPDATE */

        .status-form {
            padding: 20px 22px;
        }

        .status-form label {
            display: block;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-form-row {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 10px;
        }

        .status-form select {
            width: 100%;
            height: 45px;
            border: 1px solid var(--border);
            border-radius: 9px;
            padding: 0 12px;
            background: white;
            color: var(--dark);
            outline: none;
            cursor: pointer;
        }

        .status-form select:focus {
            border-color: var(--rose);
        }

        .update-btn {
            height: 45px;
            padding: 0 17px;
            border: none;
            border-radius: 9px;
            background: var(--dark);
            color: white;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
        }

        .update-btn:hover {
            background: var(--rose);
        }

        /* ACTION */

        .actions {
            display: grid;
            gap: 10px;
            padding: 0 22px 22px;
        }

        .action-btn {
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            border: 1px solid var(--border);
            font-size: 12px;
            font-weight: 700;
        }

        .action-primary {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
        }

        .action-primary:hover {
            background: var(--rose);
            border-color: var(--rose);
        }

        .action-secondary {
            background: white;
            color: var(--muted);
        }

        .action-secondary:hover {
            background: #fcf8f5;
        }

        /* RESPONSIVE */

        @media (max-width: 850px) {

            .details-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 650px) {

            .header-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links a:not(:first-child) {
                display: none;
            }

            .item {
                grid-template-columns: 60px 1fr;
            }

            .item-image {
                width: 60px;
                height: 70px;
            }

            .item-price {
                grid-column: 2;
                text-align: left;
            }

            .status-form-row {
                grid-template-columns: 1fr;
            }

            .update-btn {
                width: 100%;
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

            <a href="{{ route('admin.orders.index') }}">
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


        <a
            href="{{ route('admin.orders.index') }}"
            class="back-link"
        >
            ← Back to Orders
        </a>


        <div class="header-row">


            <div>

                <div class="eyebrow">
                    Order Details
                </div>

                <h1>
                    #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
                </h1>

                <div class="order-date">

                    Placed on
                    {{ $order->created_at->format('d M Y, h:i A') }}

                </div>

            </div>


            <div class="status-badge">
                {{ $order->status }}
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


    @if($errors->any())

        <div class="alert alert-error">

            @foreach($errors->all() as $error)

                <div>
                    {{ $error }}
                </div>

            @endforeach

        </div>

    @endif


    <div class="details-grid">


        <!-- LEFT -->

        <div>


            <!-- ORDER ITEMS -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Order Items
                    </h2>

                    <span style="font-size:11px;color:var(--muted);">

                        {{ $order->items->sum('quantity') }}
                        item(s)

                    </span>

                </div>


                <div class="items">


                    @foreach($order->items as $item)


                        <div class="item">


                            @if($item->product && $item->product->image)

                                <img
                                    src="{{ $item->product->image }}"
                                    alt="{{ $item->product_name }}"
                                    class="item-image"
                                >

                            @else

                                <div class="item-image"></div>

                            @endif


                            <div>


                                <div class="item-name">
                                    {{ $item->product_name }}
                                </div>


                                <div class="item-meta">

                                    LKR
                                    {{ number_format(
                                        (float) $item->price,
                                        2
                                    ) }}

                                    ×

                                    {{ $item->quantity }}

                                </div>


                            </div>


                            <div class="item-price">

                                LKR
                                {{ number_format(
                                    (float) $item->total,
                                    2
                                ) }}

                            </div>


                        </div>


                    @endforeach


                </div>


            </section>


            <!-- CUSTOMER -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Customer
                    </h2>

                </div>


                <div class="customer-box">


                    <div class="customer-name">
                        {{ $order->customer_name }}
                    </div>


                    <div class="customer-line">
                        ✉ {{ $order->email }}
                    </div>


                    <div class="customer-line">
                        ☎ {{ $order->phone }}
                    </div>


                </div>


            </section>


            <!-- DELIVERY -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Delivery Address
                    </h2>

                </div>


                <div class="address">

                    <p>
                        {{ $order->customer_name }}
                    </p>

                    <p>
                        {{ $order->address }}
                    </p>

                    <p>
                        {{ $order->city }}
                    </p>

                    <p>
                        {{ $order->phone }}
                    </p>

                </div>


            </section>


        </div>


        <!-- RIGHT -->

        <div>


            <!-- STATUS -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Update Status
                    </h2>

                </div>


                <form
                    action="{{ route(
                        'admin.orders.updateStatus',
                        $order
                    ) }}"
                    method="POST"
                    class="status-form"
                >

                    @csrf
                    @method('PATCH')


                    <label for="status">
                        Order Status
                    </label>


                    <div class="status-form-row">


                        <select
                            name="status"
                            id="status"
                        >

                            <option
                                value="pending"
                                @selected($order->status === 'pending')
                            >
                                Pending
                            </option>

                            <option
                                value="processing"
                                @selected($order->status === 'processing')
                            >
                                Processing
                            </option>

                            <option
                                value="shipped"
                                @selected($order->status === 'shipped')
                            >
                                Shipped
                            </option>

                            <option
                                value="delivered"
                                @selected($order->status === 'delivered')
                            >
                                Delivered
                            </option>

                            <option
                                value="cancelled"
                                @selected($order->status === 'cancelled')
                            >
                                Cancelled
                            </option>

                        </select>


                        <button
                            type="submit"
                            class="update-btn"
                        >
                            Update
                        </button>


                    </div>


                </form>


            </section>


            <!-- ORDER INFO -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Order Information
                    </h2>

                </div>


                <div class="info">


                    <div class="info-row">

                        <span class="info-label">
                            Order Number
                        </span>

                        <span class="info-value">
                            #LUM-{{ str_pad(
                                $order->id,
                                5,
                                '0',
                                STR_PAD_LEFT
                            ) }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Date
                        </span>

                        <span class="info-value">
                            {{ $order->created_at->format('d M Y') }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Payment
                        </span>

                        <span class="info-value">

                            {{ ucwords(
                                str_replace(
                                    '_',
                                    ' ',
                                    $order->payment_method
                                )
                            ) }}

                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            City
                        </span>

                        <span class="info-value">
                            {{ $order->city }}
                        </span>

                    </div>


                </div>


            </section>


            <!-- SUMMARY -->

            <section class="box">


                <div class="box-header">

                    <h2>
                        Payment Summary
                    </h2>

                </div>


                <div class="summary">


                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <span>
                            LKR
                            {{ number_format(
                                (float) $order->subtotal,
                                2
                            ) }}
                        </span>

                    </div>


                    <div class="summary-row">

                        <span>
                            Shipping
                        </span>

                        <span>

                            @if((float) $order->shipping === 0.0)

                                <strong style="color:var(--success);">
                                    FREE
                                </strong>

                            @else

                                LKR
                                {{ number_format(
                                    (float) $order->shipping,
                                    2
                                ) }}

                            @endif

                        </span>

                    </div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <span>
                            LKR
                            {{ number_format(
                                (float) $order->total,
                                2
                            ) }}
                        </span>

                    </div>


                </div>


            </section>


            <!-- ACTIONS -->

            <div class="actions">

                <a
                    href="{{ route('admin.orders.index') }}"
                    class="action-btn action-primary"
                >
                    ← Back to All Orders
                </a>


                <a
                    href="{{ route('home') }}"
                    class="action-btn action-secondary"
                >
                    View Store
                </a>

            </div>


        </div>


    </div>


</div>


</body>
</html>