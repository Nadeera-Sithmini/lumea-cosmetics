<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Order #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }} | Luméa Cosmetics</title>

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
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1100px, 92%);
            margin: auto;
        }

        /* NAVBAR */

        nav {
            background: rgba(251, 247, 243, .97);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            letter-spacing: 3px;
            font-weight: 600;
        }

        .logo span {
            color: var(--rose);
        }

        .nav-links {
            display: flex;
            gap: 22px;
        }

        .nav-links a {
            font-size: 13px;
            color: var(--muted);
        }

        .nav-links a:hover {
            color: var(--rose);
        }

        /* HEADER */

        .page-header {
            padding: 55px 0 30px;
        }

        .back-link {
            display: inline-block;
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 25px;
        }

        .back-link:hover {
            color: var(--rose);
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page-header h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(40px, 5vw, 58px);
            line-height: 1.1;
            font-weight: 500;
        }

        .page-header p {
            color: var(--muted);
            font-size: 14px;
            margin-top: 8px;
        }

        /* GRID */

        .details-grid {
            display: grid;
            grid-template-columns: 1.4fr .9fr;
            gap: 25px;
            padding-bottom: 90px;
        }

        .box {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
        }

        .box-title {
            padding: 20px 24px;
            background: #fcf8f5;
            border-bottom: 1px solid var(--border);
            font-family: "Playfair Display", serif;
            font-size: 24px;
        }

        /* ITEMS */

        .items {
            padding: 8px 24px;
        }

        .item {
            display: grid;
            grid-template-columns: 75px 1fr auto;
            gap: 16px;
            align-items: center;
            padding: 18px 0;
            border-bottom: 1px solid #f0e7e3;
        }

        .item:last-child {
            border-bottom: none;
        }

        .item-image {
            width: 75px;
            height: 85px;
            border-radius: 10px;
            object-fit: cover;
            background: #f4ece8;
        }

        .item-name {
            font-family: "Playfair Display", serif;
            font-size: 18px;
        }

        .item-meta {
            color: var(--muted);
            font-size: 12px;
            margin-top: 4px;
        }

        .item-price {
            text-align: right;
            font-size: 14px;
            font-weight: 700;
        }

        /* SUMMARY */

        .summary {
            padding: 24px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 11px 0;
            color: var(--muted);
            font-size: 14px;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            border-top: 1px solid var(--border);
            padding-top: 18px;
            margin-top: 8px;
            font-size: 20px;
            font-weight: 700;
        }

        /* INFO */

        .info {
            padding: 24px;
        }

        .info-row {
            padding: 13px 0;
            border-bottom: 1px solid #f0e7e3;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            font-size: 13px;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row span:first-child {
            color: var(--muted);
        }

        .info-row span:last-child {
            font-weight: 600;
            text-align: right;
        }

        .status {
            color: var(--rose) !important;
            text-transform: capitalize;
        }

        .payment {
            text-transform: capitalize;
        }

        /* ADDRESS */

        .address-box {
            margin-top: 25px;
            padding: 20px;
            background: var(--soft-pink);
            border-radius: 13px;
        }

        .address-box h3 {
            font-family: "Playfair Display", serif;
            font-size: 20px;
            margin-bottom: 8px;
        }

        .address-box p {
            color: #6e5e58;
            font-size: 13px;
        }

        /* ACTIONS */

        .actions {
            padding: 0 24px 24px;
            display: grid;
            gap: 10px;
        }

        .btn {
            min-height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-primary {
            background: var(--dark);
            color: white;
        }

        .btn-primary:hover {
            background: var(--rose);
        }

        .btn-secondary {
            border: 1px solid #d9ccc7;
            background: white;
            color: #5f5350;
        }

        .btn-secondary:hover {
            background: #fbf7f3;
        }

        /* FOOTER */

        footer {
            background: #241c1a;
            color: white;
            padding: 40px 0;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-text {
            color: #b8aaa5;
            font-size: 12px;
        }

        /* RESPONSIVE */

        @media (max-width: 850px) {

            .details-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 600px) {

            .nav-links {
                gap: 12px;
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

            .info-row {
                display: block;
            }

            .info-row span:last-child {
                display: block;
                margin-top: 4px;
                text-align: left;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }

        }

    </style>

</head>

<body>


<!-- NAVBAR -->

<nav>

    <div class="container nav-inner">

        <a
            href="{{ route('home') }}"
            class="logo"
        >
            LUMÉ<span>A</span>
        </a>


        <div class="nav-links">

            <a href="{{ route('orders.index') }}">
                My Orders
            </a>

            <a href="{{ route('shop.index') }}">
                Shop
            </a>

            <a href="{{ route('home') }}">
                Home
            </a>

        </div>

    </div>

</nav>


<!-- HEADER -->

<section class="page-header">

    <div class="container">

        <a
            href="{{ route('orders.index') }}"
            class="back-link"
        >
            ← Back to My Orders
        </a>


        <div class="eyebrow">
            Order Details
        </div>


        <h1>
            #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
        </h1>


        <p>
            Placed on {{ $order->created_at->format('d M Y, h:i A') }}
        </p>

    </div>

</section>


<!-- CONTENT -->

<div class="container">

    <div class="details-grid">


        <!-- LEFT -->

        <div>


            <!-- ORDER ITEMS -->

            <div class="box">

                <div class="box-title">
                    Order Items
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

                                    LKR {{ number_format($item->price, 2) }}
                                    × {{ $item->quantity }}

                                </div>

                            </div>


                            <div class="item-price">

                                LKR {{ number_format($item->total, 2) }}

                            </div>


                        </div>

                    @endforeach

                </div>

            </div>


            <!-- DELIVERY -->

            <div class="box address-box">

                <h3>
                    Delivery Address
                </h3>

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


        </div>


        <!-- RIGHT -->

        <div>


            <!-- STATUS / ORDER INFO -->

            <div class="box">

                <div class="box-title">
                    Order Information
                </div>


                <div class="info">


                    <div class="info-row">

                        <span>
                            Status
                        </span>

                        <span class="status">
                            {{ $order->status }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span>
                            Customer
                        </span>

                        <span>
                            {{ $order->customer_name }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span>
                            Email
                        </span>

                        <span>
                            {{ $order->email }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span>
                            Payment
                        </span>

                        <span class="payment">

                            {{ str_replace('_', ' ', $order->payment_method) }}

                        </span>

                    </div>


                </div>

            </div>


            <!-- SUMMARY -->

            <div class="box" style="margin-top:25px;">

                <div class="box-title">
                    Payment Summary
                </div>


                <div class="summary">


                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <span>
                            LKR {{ number_format($order->subtotal, 2) }}
                        </span>

                    </div>


                    <div class="summary-row">

                        <span>
                            Shipping
                        </span>

                        <span>

                            @if((float) $order->shipping == 0)

                                <span style="color:var(--success);font-weight:700;">
                                    FREE
                                </span>

                            @else

                                LKR {{ number_format($order->shipping, 2) }}

                            @endif

                        </span>

                    </div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <span>
                            LKR {{ number_format($order->total, 2) }}
                        </span>

                    </div>

                </div>


                <div class="actions">

                    <a
                        href="{{ route('orders.index') }}"
                        class="btn btn-primary"
                    >
                        ← My Orders
                    </a>

                    <a
                        href="{{ route('shop.index') }}"
                        class="btn btn-secondary"
                    >
                        Continue Shopping
                    </a>

                </div>

            </div>


        </div>


    </div>

</div>


<!-- FOOTER -->

<footer>

    <div class="container footer-inner">

        <div class="logo">
            LUMÉ<span>A</span>
        </div>

        <div class="footer-text">
            © {{ date('Y') }} Luméa Cosmetics.
            Beauty that feels like you.
        </div>

    </div>

</footer>

</body>
</html>