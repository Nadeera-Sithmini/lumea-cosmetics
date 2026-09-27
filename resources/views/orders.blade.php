<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Orders | Luméa Cosmetics</title>

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
            gap: 20px;
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

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-right a {
            font-size: 13px;
            color: var(--muted);
        }

        .nav-right a:hover {
            color: var(--rose);
        }

        /* HEADER */

        .page-header {
            padding: 60px 0 35px;
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
            margin-top: 9px;
        }

        /* ORDERS */

        .orders-section {
            padding-bottom: 90px;
        }

        .orders-list {
            display: grid;
            gap: 18px;
        }

        .order-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 24px;
            transition: .25s;
        }

        .order-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(48, 40, 38, .06);
        }

        .order-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding-bottom: 18px;
            border-bottom: 1px solid #f0e7e3;
        }

        .order-number {
            font-family: "Playfair Display", serif;
            font-size: 22px;
        }

        .order-date {
            color: var(--muted);
            font-size: 12px;
            margin-top: 4px;
        }

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 32px;
            padding: 0 13px;
            border-radius: 30px;
            background: var(--soft-pink);
            color: var(--rose);
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .order-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding-top: 18px;
        }

        .order-summary {
            display: flex;
            gap: 35px;
        }

        .summary-item small {
            display: block;
            color: var(--muted);
            font-size: 11px;
            margin-bottom: 3px;
        }

        .summary-item strong {
            font-size: 14px;
        }

        .view-order {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 18px;
            border: 1px solid #d9ccc7;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            transition: .2s;
        }

        .view-order:hover {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
        }

        /* EMPTY */

        .empty-orders {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            text-align: center;
            padding: 80px 20px;
        }

        .empty-icon {
            font-size: 50px;
            margin-bottom: 18px;
        }

        .empty-orders h2 {
            font-family: "Playfair Display", serif;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .empty-orders p {
            color: var(--muted);
            margin-bottom: 24px;
            font-size: 14px;
        }

        .shop-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 24px;
            border-radius: 11px;
            background: var(--dark);
            color: white;
            font-size: 13px;
            font-weight: 700;
        }

        .shop-btn:hover {
            background: var(--rose);
        }

        /* FOOTER */

        footer {
            background: #241c1a;
            color: white;
            padding: 40px 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-text {
            color: #b8aaa5;
            font-size: 12px;
        }

        @media (max-width: 650px) {

            .order-top,
            .order-bottom,
            .footer-inner {
                align-items: flex-start;
                flex-direction: column;
            }

            .order-summary {
                flex-direction: column;
                gap: 12px;
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

        <a
            href="{{ route('home') }}"
            class="logo"
        >
            LUMÉ<span>A</span>
        </a>

        <div class="nav-right">

            <a href="{{ route('shop.index') }}">
                Shop
            </a>

            <a href="{{ route('cart.index') }}">
                Cart
            </a>

            <a href="{{ route('home') }}">
                Home
            </a>

        </div>

    </div>
</nav>


<section class="page-header">

    <div class="container">

        <div class="eyebrow">
            Your Luméa Account
        </div>

        <h1>
            My Orders
        </h1>

        <p>
            View your recent orders and order details.
        </p>

    </div>

</section>


<section class="orders-section">

    <div class="container">

        @if($orders->count() > 0)

            <div class="orders-list">

                @foreach($orders as $order)

                    <article class="order-card">

                        <div class="order-top">

                            <div>

                                <div class="order-number">
                                    #LUM-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}
                                </div>

                                <div class="order-date">
                                    {{ $order->created_at->format('d M Y, h:i A') }}
                                </div>

                            </div>


                            <div class="status">
                                {{ $order->status }}
                            </div>

                        </div>


                        <div class="order-bottom">

                            <div class="order-summary">

                                <div class="summary-item">

                                    <small>
                                        Items
                                    </small>

                                    <strong>
                                        {{ $order->items->sum('quantity') }}
                                    </strong>

                                </div>


                                <div class="summary-item">

                                    <small>
                                        Total
                                    </small>

                                    <strong>
                                        LKR {{ number_format($order->total, 2) }}
                                    </strong>

                                </div>


                                <div class="summary-item">

                                    <small>
                                        Payment
                                    </small>

                                    <strong>
                                        Cash on Delivery
                                    </strong>

                                </div>

                            </div>


                            <a
                                href="{{ route('orders.show', $order->id) }}"
                                class="view-order"
                            >
                                View Order →
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="empty-orders">

                <div class="empty-icon">
                    📦
                </div>

                <h2>
                    No orders yet
                </h2>

                <p>
                    Your completed orders will appear here.
                </p>

                <a
                    href="{{ route('shop.index') }}"
                    class="shop-btn"
                >
                    Start Shopping
                </a>

            </div>

        @endif

    </div>

</section>


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