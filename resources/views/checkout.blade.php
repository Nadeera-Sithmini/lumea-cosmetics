<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout | Luméa Cosmetics</title>

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
            --danger: #b95d5d;
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

        button,
        input,
        textarea,
        select {
            font-family: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* NAVBAR */

        nav {
            background: rgba(251, 247, 243, .97);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            letter-spacing: 3px;
        }

        .logo span {
            color: var(--rose);
        }

        .back-shop {
            font-size: 14px;
            color: var(--muted);
        }

        .back-shop:hover {
            color: var(--rose);
        }

        /* HEADER */

        .page-header {
            padding: 55px 0 35px;
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
            font-weight: 500;
            line-height: 1.1;
        }

        .page-header p {
            margin-top: 10px;
            color: var(--muted);
            font-size: 14px;
        }

        /* MESSAGES */

        .message-box {
            padding: 15px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .error-box {
            background: #fff0f0;
            border: 1px solid #f0cccc;
            color: var(--danger);
        }

        .success-box {
            background: #edf7ef;
            border: 1px solid #d4ecd8;
            color: #2d6639;
        }

        .error-box ul {
            margin-left: 18px;
            margin-top: 7px;
        }

        /* CHECKOUT */

        .checkout-layout {
            display: grid;
            grid-template-columns: 1.4fr .9fr;
            gap: 30px;
            padding-bottom: 80px;
            align-items: start;
        }

        .checkout-box,
        .summary-box {
            background: white;
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 30px;
        }

        .checkout-box h2,
        .summary-box h2 {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            margin-bottom: 25px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input,
        textarea,
        select {
            width: 100%;
            border: 1px solid var(--border);
            background: #fff;
            border-radius: 10px;
            padding: 13px 14px;
            outline: none;
            font-size: 14px;
            color: var(--dark);
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--rose);
        }

        textarea {
            min-height: 115px;
            resize: vertical;
        }

        .payment-box {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 16px;
            margin-top: 5px;
        }

        .payment-option {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
        }

        .payment-option input {
            width: auto;
        }

        .payment-note {
            margin-top: 8px;
            margin-left: 25px;
            color: var(--muted);
            font-size: 12px;
        }

        .place-order {
            width: 100%;
            border: none;
            background: var(--dark);
            color: white;
            min-height: 55px;
            border-radius: 12px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            transition: .25s;
        }

        .place-order:hover {
            background: var(--rose);
        }

        /* SUMMARY */

        .summary-box {
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .summary-item {
            display: grid;
            grid-template-columns: 65px 1fr auto;
            gap: 14px;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f0e8e5;
        }

        .summary-image {
            width: 65px;
            height: 75px;
            object-fit: cover;
            border-radius: 10px;
            background: #f4ece8;
        }

        .summary-name {
            font-family: "Playfair Display", serif;
            font-size: 17px;
            line-height: 1.2;
        }

        .summary-qty {
            color: var(--muted);
            font-size: 12px;
            margin-top: 4px;
        }

        .summary-price {
            font-size: 13px;
            font-weight: 700;
            text-align: right;
        }

        /* COUPON */

        .coupon-section {
            margin: 20px 0 10px;
            padding: 18px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: #fcfaf8;
        }

        .coupon-section h3 {
            font-size: 13px;
            margin-bottom: 10px;
        }

        .coupon-form {
            display: flex;
            gap: 8px;
        }

        .coupon-input {
            flex: 1;
            min-width: 0;
        }

        .coupon-btn {
            border: none;
            background: var(--dark);
            color: white;
            padding: 0 18px;
            min-height: 46px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }

        .coupon-btn:hover {
            background: var(--rose);
        }

        .coupon-applied {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 13px;
            background: #edf7ef;
            border: 1px solid #d4ecd8;
            border-radius: 10px;
            color: #2d6639;
            font-size: 12px;
        }

        .coupon-applied strong {
            display: block;
            margin-bottom: 2px;
        }

        .remove-coupon {
            border: none;
            background: transparent;
            color: var(--danger);
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .remove-coupon:hover {
            text-decoration: underline;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 0;
            color: var(--muted);
            font-size: 14px;
        }

        .discount-row {
            color: var(--success);
        }

        .summary-total {
            border-top: 1px solid var(--border);
            margin-top: 8px;
            padding-top: 18px;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 700;
        }

        .free {
            color: var(--success);
            font-weight: 700;
        }

        .secure-note {
            margin-top: 20px;
            padding: 13px;
            background: var(--soft-pink);
            border-radius: 10px;
            color: #6d514b;
            font-size: 12px;
            text-align: center;
        }

        /* FOOTER */

        footer {
            background: #241c1a;
            color: white;
            padding: 45px 0;
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

        @media (max-width: 900px) {
            .checkout-layout {
                grid-template-columns: 1fr;
            }

            .summary-box {
                position: static;
            }
        }

        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .checkout-box,
            .summary-box {
                padding: 22px;
            }

            .coupon-form {
                flex-direction: column;
            }

            .coupon-btn {
                width: 100%;
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

            <a href="{{ route('home') }}" class="logo">
                LUMÉ<span>A</span>
            </a>

            <a href="{{ route('cart.index') }}" class="back-shop">
                ← Back to Cart
            </a>

        </div>
    </nav>


    <!-- HEADER -->

    <section class="page-header">
        <div class="container">

            <div class="eyebrow">
                Luméa Cosmetics
            </div>

            <h1>
                Checkout
            </h1>

            <p>
                Complete your details and place your order.
            </p>

        </div>
    </section>


    <div class="container">

        @if(session('success'))

            <div class="message-box success-box">
                {{ session('success') }}
            </div>

        @endif


        @if(session('error'))

            <div class="message-box error-box">
                {{ session('error') }}
            </div>

        @endif


        @if($errors->any())

            <div class="message-box error-box">

                <strong>
                    Please check the following:
                </strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        @endif


        <div class="checkout-layout">


            <!-- CUSTOMER DETAILS -->

            <form
                action="{{ route('checkout.placeOrder') }}"
                method="POST"
                class="checkout-box"
            >

                @csrf

                <h2>
                    Delivery Details
                </h2>


                <div class="form-grid">


                    <!-- NAME -->

                    <div class="form-group full">

                        <label for="customer_name">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="customer_name"
                            name="customer_name"
                            value="{{ old('customer_name') }}"
                            placeholder="Enter your full name"
                            required
                        >

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            required
                        >

                    </div>


                    <!-- PHONE -->

                    <div class="form-group">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="07X XXX XXXX"
                            required
                        >

                    </div>


                    <!-- ADDRESS -->

                    <div class="form-group full">

                        <label for="address">
                            Delivery Address
                        </label>

                        <textarea
                            id="address"
                            name="address"
                            placeholder="House number, street, area..."
                            required
                        >{{ old('address') }}</textarea>

                    </div>


                    <!-- CITY -->

                    <div class="form-group full">

                        <label for="city">
                            City
                        </label>

                        <input
                            type="text"
                            id="city"
                            name="city"
                            value="{{ old('city') }}"
                            placeholder="Enter your city"
                            required
                        >

                    </div>


                    <!-- PAYMENT -->

                    <div class="form-group full">

                        <label>
                            Payment Method
                        </label>

                        <div class="payment-box">

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment_method"
                                    value="cash_on_delivery"
                                    checked
                                >

                                <span>
                                    Cash on Delivery
                                </span>

                            </label>

                            <div class="payment-note">
                                Pay when your order is delivered.
                            </div>

                        </div>

                    </div>

                </div>


                <button
                    type="submit"
                    class="place-order"
                >
                    Place Order
                </button>

            </form>


            <!-- ORDER SUMMARY -->

            <aside class="summary-box">

                <h2>
                    Your Order
                </h2>


                @foreach($cart as $item)

                    <div class="summary-item">

                        @if(!empty($item['image']))

                            <img
                                src="{{ $item['image'] }}"
                                alt="{{ $item['name'] }}"
                                class="summary-image"
                            >

                        @else

                            <div class="summary-image"></div>

                        @endif


                        <div>

                            <div class="summary-name">
                                {{ $item['name'] }}
                            </div>

                            <div class="summary-qty">
                                Qty: {{ $item['quantity'] }}
                            </div>

                        </div>


                        <div class="summary-price">

                            LKR
                            {{ number_format(
                                $item['price'] * $item['quantity'],
                                2
                            ) }}

                        </div>

                    </div>

                @endforeach


                <!-- COUPON -->

                <div class="coupon-section">

                    <h3>
                        Have a coupon?
                    </h3>


                    @if($coupon)

                        <div class="coupon-applied">

                            <div>
                                <strong>
                                    {{ $coupon->code }}
                                </strong>

                                <span>
                                    Discount applied:
                                    LKR {{ number_format($discount, 2) }}
                                </span>
                            </div>


                            <form
                                action="{{ route('checkout.removeCoupon') }}"
                                method="POST"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="remove-coupon"
                                >
                                    Remove
                                </button>

                            </form>

                        </div>

                    @else

                        <form
                            action="{{ route('checkout.applyCoupon') }}"
                            method="POST"
                            class="coupon-form"
                        >

                            @csrf

                            <input
                                type="text"
                                name="coupon_code"
                                class="coupon-input"
                                placeholder="Enter coupon code"
                                value="{{ old('coupon_code') }}"
                                autocomplete="off"
                                required
                            >

                            <button
                                type="submit"
                                class="coupon-btn"
                            >
                                Apply
                            </button>

                        </form>

                    @endif

                </div>


                <!-- SUMMARY TOTALS -->

                <div class="summary-row">

                    <span>
                        Subtotal
                    </span>

                    <span>
                        LKR {{ number_format($subtotal, 2) }}
                    </span>

                </div>


                <div class="summary-row">

                    <span>
                        Shipping
                    </span>

                    <span>

                        @if($shipping == 0)

                            <span class="free">
                                FREE
                            </span>

                        @else

                            LKR {{ number_format($shipping, 2) }}

                        @endif

                    </span>

                </div>


                @if($discount > 0)

                    <div class="summary-row discount-row">

                        <span>
                            Discount
                        </span>

                        <span>
                            - LKR {{ number_format($discount, 2) }}
                        </span>

                    </div>

                @endif


                <div class="summary-total">

                    <span>
                        Total
                    </span>

                    <span>
                        LKR {{ number_format($total, 2) }}
                    </span>

                </div>


                <div class="secure-note">
                    🔒 Your order information is securely processed.
                </div>

            </aside>


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
