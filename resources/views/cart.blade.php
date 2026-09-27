<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shopping Cart — Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fffaf8;
            color: #2d2424;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font-family: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }


        /* ================================
           NAVBAR
        ================================= */

        nav {
            background: #ffffff;
            border-bottom: 1px solid #f0e4e1;
        }

        .nav-inner {
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 700;
            color: #6c3948;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            font-size: 14px;
            color: #5f5353;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #a85f73;
        }

        .cart-link {
            position: relative;
            padding-right: 10px;
        }

        .cart-count {
            position: absolute;
            top: -10px;
            right: -12px;
            background: #a85f73;
            color: white;
            width: 21px;
            height: 21px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
        }


        /* ================================
           PAGE HEADER
        ================================= */

        .page-header {
            padding: 60px 0 35px;
            text-align: center;
        }

        .eyebrow {
            color: #a85f73;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(38px, 5vw, 56px);
            line-height: 1.1;
            color: #2d2424;
            margin-bottom: 12px;
        }

        .page-header p {
            color: #756969;
            font-size: 15px;
        }


        /* ================================
           ALERTS
        ================================= */

        .message {
            margin: 0 auto 24px;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 14px;
        }

        .success {
            background: #edf8ef;
            color: #29633a;
            border: 1px solid #d4ecd8;
        }

        .error {
            background: #fff0f0;
            color: #9b3838;
            border: 1px solid #f2d1d1;
        }


        /* ================================
           CART
        ================================= */

        .cart-layout {
            display: grid;
            grid-template-columns: 1.6fr 0.9fr;
            gap: 30px;
            padding-bottom: 80px;
        }

        .cart-box,
        .summary-box {
            background: white;
            border: 1px solid #eee2df;
            border-radius: 20px;
            overflow: hidden;
        }

        .cart-box {
            padding: 24px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 95px 1fr auto;
            gap: 20px;
            align-items: center;
            padding: 18px 0;
            border-bottom: 1px solid #f1e8e5;
        }

        .cart-item:first-child {
            padding-top: 0;
        }

        .cart-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .product-image {
            width: 95px;
            height: 110px;
            object-fit: cover;
            border-radius: 14px;
            background: #f9efec;
        }

        .product-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            margin-bottom: 7px;
        }

        .category {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            color: #a85f73;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .price {
            font-size: 14px;
            color: #6d6262;
            margin-bottom: 13px;
        }


        /* ================================
           QUANTITY
        ================================= */

        .quantity-form {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quantity-form input {
            width: 60px;
            height: 40px;
            border: 1px solid #dfd0cc;
            border-radius: 9px;
            text-align: center;
            font-size: 14px;
            outline: none;
        }

        .quantity-form input:focus {
            border-color: #a85f73;
        }

        .update-btn {
            height: 40px;
            padding: 0 14px;
            border: 0;
            border-radius: 9px;
            background: #6c3948;
            color: white;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        .update-btn:hover {
            background: #562d3a;
        }


        /* ================================
           ITEM RIGHT
        ================================= */

        .item-right {
            text-align: right;
            min-width: 120px;
        }

        .item-total {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .remove-form button {
            background: none;
            border: none;
            color: #a85f73;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        .remove-form button:hover {
            text-decoration: underline;
        }


        /* ================================
           SUMMARY
        ================================= */

        .summary-box {
            padding: 26px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .summary-box h2 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            margin-bottom: 22px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 13px 0;
            color: #625757;
            font-size: 14px;
        }

        .summary-total {
            border-top: 1px solid #eee2df;
            margin-top: 8px;
            padding-top: 18px;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
        }


        /* ================================
           CHECKOUT BUTTON
        ================================= */

        .checkout-btn {
            width: 100%;
            min-height: 52px;
            margin-top: 22px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: none;
            border-radius: 12px;

            background: #a85f73;
            color: white;

            font-size: 15px;
            font-weight: 700;

            cursor: pointer;

            transition: .25s;
        }

        .checkout-btn:hover {
            background: #8f4f61;
            transform: translateY(-1px);
        }


        /* ================================
           CONTINUE SHOPPING
        ================================= */

        .continue-btn {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 100%;
            min-height: 50px;

            margin-top: 14px;

            border: 1px solid #d9c7c2;
            border-radius: 12px;

            color: #5f4e4e;

            font-weight: 600;
            font-size: 14px;

            transition: .2s;
        }

        .continue-btn:hover {
            background: #fff8f5;
        }


        /* ================================
           EMPTY CART
        ================================= */

        .empty-cart {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border: 1px solid #eee2df;
            border-radius: 20px;
            margin-bottom: 80px;
        }

        .empty-icon {
            font-size: 55px;
            margin-bottom: 18px;
        }

        .empty-cart h2 {
            font-family: 'Playfair Display', serif;
            font-size: 34px;
            margin-bottom: 10px;
        }

        .empty-cart p {
            color: #756969;
            margin-bottom: 25px;
        }

        .shop-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            height: 48px;
            padding: 0 26px;

            border-radius: 12px;

            background: #6c3948;
            color: white;

            font-weight: 600;
        }

        .shop-btn:hover {
            background: #562d3a;
        }


        /* ================================
           FOOTER
        ================================= */

        footer {
            background: #2e2527;
            color: #eee4e5;
            padding: 45px 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
        }

        .footer-text {
            font-size: 13px;
            color: #c7bbbd;
        }


        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 900px) {

            .cart-layout {
                grid-template-columns: 1fr;
            }

            .summary-box {
                position: static;
            }

        }


        @media (max-width: 650px) {

            .nav-links {
                gap: 14px;
            }

            .nav-links a:not(.cart-link) {
                display: none;
            }

            .cart-item {
                grid-template-columns: 75px 1fr;
            }

            .product-image {
                width: 75px;
                height: 90px;
            }

            .item-right {
                grid-column: 2;
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


<!-- ================================
     NAVBAR
================================= -->

<nav>

    <div class="container nav-inner">

        <a
            href="{{ route('home') }}"
            class="logo"
        >
            Luméa
        </a>


        <div class="nav-links">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('shop.index') }}">
                Shop
            </a>


            <a
                href="{{ route('cart.index') }}"
                class="cart-link"
            >

                Cart


                @php

                    $cartCount = collect(
                        session('cart', [])
                    )->sum('quantity');

                @endphp


                @if($cartCount > 0)

                    <span class="cart-count">
                        {{ $cartCount }}
                    </span>

                @endif

            </a>

        </div>

    </div>

</nav>


<!-- ================================
     PAGE HEADER
================================= -->

<section class="page-header">

    <div class="container">

        <div class="eyebrow">
            Your Beauty Bag
        </div>

        <h1>
            Shopping Cart
        </h1>

        <p>
            Review your favorite Luméa products before checkout.
        </p>

    </div>

</section>


<div class="container">


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <div class="message success">
            {{ session('success') }}
        </div>

    @endif


    <!-- ERROR MESSAGE -->

    @if(session('error'))

        <div class="message error">
            {{ session('error') }}
        </div>

    @endif


    <!-- ================================
         EMPTY CART
    ================================= -->

    @if(empty($cart))


        <div class="empty-cart">

            <div class="empty-icon">
                🛍️
            </div>


            <h2>
                Your cart is empty
            </h2>


            <p>
                Looks like you haven't added anything to your beauty bag yet.
            </p>


            <a
                href="{{ route('shop.index') }}"
                class="shop-btn"
            >
                Continue Shopping
            </a>

        </div>


    @else


        <!-- ================================
             CART CONTENT
        ================================= -->

        <div class="cart-layout">


            <!-- CART PRODUCTS -->

            <div class="cart-box">


                @foreach($cart as $item)


                    <div class="cart-item">


                        <!-- IMAGE -->

                        @if(!empty($item['image']))

                            <img
                                src="{{ $item['image'] }}"
                                alt="{{ $item['name'] }}"
                                class="product-image"
                            >

                        @else

                            <div class="product-image"></div>

                        @endif


                        <!-- PRODUCT INFO -->

                        <div class="product-info">


                            <div class="category">
                                {{ $item['category'] ?? 'Beauty' }}
                            </div>


                            <h3>
                                {{ $item['name'] }}
                            </h3>


                            <div class="price">
                                LKR {{ number_format($item['price'], 2) }}
                            </div>


                            <!-- UPDATE QUANTITY -->

                            <form
                                action="{{ route('cart.update', $item['id']) }}"
                                method="POST"
                                class="quantity-form"
                            >

                                @csrf

                                @method('PATCH')


                                <input
                                    type="number"
                                    name="quantity"
                                    value="{{ $item['quantity'] }}"
                                    min="1"
                                >


                                <button
                                    type="submit"
                                    class="update-btn"
                                >
                                    Update
                                </button>

                            </form>


                        </div>


                        <!-- TOTAL + REMOVE -->

                        <div class="item-right">


                            <div class="item-total">

                                LKR
                                {{ number_format(
                                    $item['price'] * $item['quantity'],
                                    2
                                ) }}

                            </div>


                            <form
                                action="{{ route('cart.remove', $item['id']) }}"
                                method="POST"
                                class="remove-form"
                            >

                                @csrf

                                @method('DELETE')


                                <button type="submit">
                                    Remove
                                </button>

                            </form>


                        </div>


                    </div>


                @endforeach


            </div>


            <!-- ================================
                 SUMMARY
            ================================= -->

            <aside class="summary-box">


                <h2>
                    Order Summary
                </h2>


                <!-- SUBTOTAL -->

                <div class="summary-row">

                    <span>
                        Subtotal
                    </span>

                    <span>
                        LKR {{ number_format($subtotal, 2) }}
                    </span>

                </div>


                <!-- SHIPPING -->

                @php

                    $shipping = $subtotal >= 10000
                        ? 0
                        : 450;

                    $grandTotal = $subtotal + $shipping;

                @endphp


                <div class="summary-row">

                    <span>
                        Shipping
                    </span>


                    <span>

                        @if($shipping == 0)

                            <strong style="color:#5d8a65;">
                                FREE
                            </strong>

                        @else

                            LKR {{ number_format($shipping, 2) }}

                        @endif

                    </span>

                </div>


                <!-- TOTAL -->

                <div class="summary-total">

                    <span>
                        Total
                    </span>

                    <span>
                        LKR {{ number_format($grandTotal, 2) }}
                    </span>

                </div>


                <!-- CHECKOUT -->

                <a
                    href="{{ route('checkout.index') }}"
                    class="checkout-btn"
                >
                    Proceed to Checkout
                </a>


                <!-- CONTINUE -->

                <a
                    href="{{ route('shop.index') }}"
                    class="continue-btn"
                >
                    Continue Shopping
                </a>


            </aside>


        </div>


    @endif


</div>


<!-- ================================
     FOOTER
================================= -->

<footer>

    <div class="container footer-inner">


        <div class="footer-logo">
            Luméa Cosmetics
        </div>


        <div class="footer-text">

            © {{ date('Y') }} Luméa Cosmetics.
            Beauty that feels like you.

        </div>


    </div>

</footer>


</body>

</html>