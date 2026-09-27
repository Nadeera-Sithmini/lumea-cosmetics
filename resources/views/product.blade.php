<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} | Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <style>

        :root {
            --cream: #fbf7f3;
            --white: #ffffff;
            --soft-pink: #f4e5df;
            --pink: #dfb9ad;
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

        html {
            scroll-behavior: smooth;
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
        input {
            font-family: inherit;
        }

        img {
            display: block;
            width: 100%;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }


        /* ================================
           TOP BAR
        ================================= */

        .top-bar {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 9px 15px;
            font-size: 13px;
            letter-spacing: .5px;
        }


        /* ================================
           NAVBAR
        ================================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(251, 247, 243, .97);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            letter-spacing: 3px;
            font-weight: 500;
        }

        .logo span {
            color: var(--rose);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 14px;
            font-weight: 500;
        }

        .nav-links a {
            position: relative;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 1px;
            background: var(--rose);
            transition: .3s;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: transparent;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .25s;
            position: relative;
        }

        .icon-btn:hover {
            background: var(--dark);
            color: white;
        }

        .cart-badge {
            position: absolute;
            top: -6px;
            right: -5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--rose);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            border: 2px solid var(--cream);
        }


        /* ================================
           BREADCRUMB
        ================================= */

        .breadcrumb-wrapper {
            background: var(--cream);
        }

        .breadcrumb {
            padding: 25px 0 10px;
            color: var(--muted);
            font-size: 12px;
        }

        .breadcrumb a:hover {
            color: var(--rose);
        }

        .breadcrumb-current {
            color: var(--dark);
        }


        /* ================================
           PRODUCT SECTION
        ================================= */

        .product-section {
            padding: 30px 0 100px;
        }

        .product-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: start;
        }


        /* PRODUCT IMAGE */

        .product-image-wrapper {
            position: sticky;
            top: 110px;
        }

        .product-image {
            position: relative;
            height: 650px;
            overflow: hidden;
            background: #f3ece7;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge {
            position: absolute;
            top: 18px;
            left: 18px;
            z-index: 2;
            background: white;
            padding: 8px 12px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }


        /* PRODUCT CONTENT */

        .product-content {
            padding-top: 15px;
        }

        .product-category {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .product-content h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(42px, 5vw, 66px);
            line-height: 1.05;
            font-weight: 500;
            margin-bottom: 18px;
        }

        .stars {
            letter-spacing: 3px;
            font-size: 13px;
            margin-bottom: 22px;
        }

        .review-text {
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 0;
            margin-left: 8px;
        }

        .description {
            max-width: 570px;
            color: var(--muted);
            font-size: 15px;
            margin-bottom: 28px;
        }


        /* PRICE */

        .price {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .old-price {
            color: #aaa;
            font-size: 16px;
            font-weight: 400;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .discount {
            display: inline-block;
            margin-left: 10px;
            padding: 4px 8px;
            background: var(--soft-pink);
            color: var(--rose);
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            vertical-align: middle;
        }


        /* STOCK */

        .stock {
            font-size: 12px;
            margin-bottom: 28px;
        }

        .stock.in-stock {
            color: var(--success);
        }

        .stock.out-stock {
            color: var(--danger);
        }


        /* ================================
           PURCHASE AREA
        ================================= */

        .purchase-box {
            display: flex;
            gap: 12px;
            margin-bottom: 30px;
            align-items: stretch;
        }

        .cart-form {
            display: flex;
            gap: 12px;
            flex: 1;
        }

        .quantity {
            display: flex;
            align-items: center;
            border: 1px solid var(--border);
            background: white;
            flex-shrink: 0;
        }

        .quantity button {
            width: 42px;
            height: 50px;
            border: none;
            background: white;
            cursor: pointer;
            font-size: 18px;
            color: var(--dark);
            transition: .2s;
        }

        .quantity button:hover {
            background: var(--soft-pink);
        }

        .quantity input {
            width: 48px;
            height: 50px;
            text-align: center;
            border: none;
            outline: none;
            font-size: 14px;
            background: white;
        }

        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .quantity input[type="number"] {
            appearance: textfield;
            -moz-appearance: textfield;
        }

        .add-cart {
            flex: 1;
            min-height: 50px;
            border: none;
            background: var(--dark);
            color: white;
            cursor: pointer;
            font-size: 13px;
            font-weight: 700;
            transition: .3s;
        }

        .add-cart:hover {
            background: var(--rose);
        }

        .add-cart:disabled {
            background: #b7aea9;
            cursor: not-allowed;
        }

        .wishlist-form {
            display: inline-flex;
            flex-shrink: 0;
        }

        .wishlist {
            width: 52px;
            min-height: 50px;
            border: 1px solid var(--border);
            background: white;
            cursor: pointer;
            font-size: 21px;
            transition: .25s;
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            text-decoration: none;
        }

        .wishlist:hover {
            background: var(--soft-pink);
            color: var(--rose);
        }

        .wishlist-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }


        /* PRODUCT DETAILS */

        .details {
            margin-top: 35px;
            border-top: 1px solid var(--border);
        }

        .detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 17px 0;
            border-bottom: 1px solid var(--border);
            font-size: 13px;
        }

        .detail-row span:last-child {
            color: var(--muted);
            text-align: right;
        }


        /* ================================
           RELATED PRODUCTS
        ================================= */

        .related {
            background: white;
            padding: 90px 0;
        }

        .section-heading {
            margin-bottom: 35px;
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .section-heading h2 {
            font-family: "Playfair Display", serif;
            font-weight: 500;
            font-size: 45px;
            line-height: 1.1;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .related-card {
            background: var(--cream);
            overflow: hidden;
            transition: transform .3s;
        }

        .related-card:hover {
            transform: translateY(-4px);
        }

        .related-image {
            height: 310px;
            overflow: hidden;
            background: #f3ece7;
        }

        .related-image img {
            height: 100%;
            object-fit: cover;
            transition: transform .5s;
        }

        .related-card:hover .related-image img {
            transform: scale(1.05);
        }

        .related-info {
            padding: 17px;
        }

        .related-category {
            color: var(--rose);
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 1.5px;
            font-weight: 700;
        }

        .related-name {
            font-family: "Playfair Display", serif;
            font-size: 20px;
            line-height: 1.2;
            margin: 6px 0;
        }

        .related-price {
            font-size: 13px;
            font-weight: 700;
        }


        /* ================================
           FOOTER
        ================================= */

        footer {
            background: #241c1a;
            color: white;
            padding: 65px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 45px;
        }

        .footer-brand p {
            color: #b8aaa5;
            font-size: 13px;
            max-width: 300px;
            margin-top: 15px;
        }

        .footer-col h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 18px;
        }

        .footer-col a {
            display: block;
            color: #b8aaa5;
            margin-bottom: 9px;
            font-size: 13px;
            transition: .2s;
        }

        .footer-col a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.1);
            margin-top: 50px;
            padding-top: 18px;
            color: #8f827d;
            font-size: 11px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }


        /* ================================
           REVIEWS
        ================================= */

        .reviews {
            background: var(--cream);
            padding: 90px 0;
            border-top: 1px solid var(--border);
        }

        .reviews-top {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 55px;
            align-items: start;
        }

        .rating-summary {
            background: white;
            border: 1px solid var(--border);
            padding: 30px;
            text-align: center;
        }

        .rating-number {
            font-family: "Playfair Display", serif;
            font-size: 58px;
            line-height: 1;
            margin-bottom: 10px;
        }

        .rating-stars {
            color: var(--rose);
            font-size: 19px;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .rating-count {
            color: var(--muted);
            font-size: 12px;
        }

        .review-form-box {
            background: white;
            border: 1px solid var(--border);
            padding: 28px;
            margin-bottom: 28px;
        }

        .review-form-box h3,
        .reviews-list h3 {
            font-family: "Playfair Display", serif;
            font-size: 28px;
            font-weight: 500;
            margin-bottom: 18px;
        }

        .review-stars-input {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 4px;
            margin-bottom: 18px;
        }

        .review-stars-input input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .review-stars-input label {
            font-size: 28px;
            color: #c8beb9;
            cursor: pointer;
            transition: .2s;
        }

        .review-stars-input label:hover,
        .review-stars-input label:hover ~ label,
        .review-stars-input input:checked ~ label {
            color: var(--rose);
        }

        .review-form-box textarea {
            width: 100%;
            min-height: 130px;
            border: 1px solid var(--border);
            padding: 14px;
            resize: vertical;
            outline: none;
            font-family: inherit;
            font-size: 13px;
            background: var(--cream);
        }

        .review-form-box textarea:focus {
            border-color: var(--rose);
        }

        .review-submit {
            margin-top: 14px;
            border: none;
            background: var(--dark);
            color: white;
            min-height: 46px;
            padding: 0 25px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 700;
            transition: .25s;
        }

        .review-submit:hover {
            background: var(--rose);
        }

        .login-review-note {
            background: white;
            border: 1px solid var(--border);
            padding: 22px;
            color: var(--muted);
            font-size: 13px;
        }

        .login-review-note a {
            color: var(--rose);
            font-weight: 700;
        }

        .review-item {
            background: white;
            border: 1px solid var(--border);
            padding: 24px;
            margin-bottom: 14px;
        }

        .review-head {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            align-items: start;
            margin-bottom: 10px;
        }

        .review-user {
            font-weight: 700;
            font-size: 13px;
        }

        .review-date {
            color: var(--muted);
            font-size: 11px;
            margin-top: 3px;
        }

        .review-rating {
            color: var(--rose);
            font-size: 14px;
            letter-spacing: 2px;
        }

        .review-comment {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            white-space: pre-line;
        }

        .delete-review {
            margin-top: 14px;
            border: 1px solid #edd2d2;
            background: #fff8f8;
            color: var(--danger);
            padding: 8px 12px;
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
        }

        .no-reviews {
            color: var(--muted);
            font-size: 13px;
            padding: 20px 0;
        }

        .review-error {
            color: var(--danger);
            font-size: 12px;
            margin-top: 8px;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 1000px) {

            .reviews-top {
                grid-template-columns: 1fr;
            }

            .product-main {
                grid-template-columns: 1fr;
                gap: 45px;
            }

            .product-image-wrapper {
                position: static;
            }

            .product-image {
                height: 560px;
            }

            .related-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }


        @media (max-width: 760px) {

            .review-head {
                flex-direction: column;
            }

            .nav-inner {
                min-height: 70px;
            }

            .nav-links {
                display: none;
            }

            .product-section {
                padding-top: 20px;
            }

            .product-image {
                height: 500px;
            }

            .product-content h1 {
                font-size: 47px;
            }

            .purchase-box {
                flex-wrap: wrap;
            }

            .cart-form {
                width: 100%;
            }

            .quantity {
                width: auto;
            }

            .add-cart {
                min-width: 200px;
            }
        }


        @media (max-width: 520px) {

            .top-bar {
                font-size: 11px;
            }

            .logo {
                font-size: 24px;
            }

            .product-image {
                height: 430px;
            }

            .product-content h1 {
                font-size: 41px;
            }

            .description {
                font-size: 14px;
            }

            .purchase-box {
                display: flex;
                flex-direction: column;
            }

            .cart-form {
                display: grid;
                grid-template-columns: auto 1fr;
                width: 100%;
            }

            .quantity {
                width: 100%;
            }

            .quantity input {
                flex: 1;
            }

            .add-cart {
                width: 100%;
                min-width: 0;
            }

            .wishlist {
                width: 100%;
            }

            .related-grid {
                grid-template-columns: 1fr;
            }

            .section-heading h2 {
                font-size: 37px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                display: block;
            }

            .footer-bottom span {
                display: block;
                margin-bottom: 7px;
            }
        }

    </style>
</head>


<body>

    @php
        $reviews = $product->reviews()
            ->where('is_approved', true)
            ->with('user')
            ->latest()
            ->get();

        $reviewCount = $reviews->count();
        $averageRating = $reviewCount > 0
            ? round($reviews->avg('rating'), 1)
            : 0;

        $currentUserReview = auth()->check()
            ? $reviews->firstWhere('user_id', auth()->id())
            : null;
    @endphp

    @if(session('success') || session('error'))
        <div class="container" style="padding-top:20px;">
            @if(session('success'))
                <div style="padding:14px 18px;background:#edf8ef;color:#29633a;border:1px solid #d4ecd8;font-size:13px;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div style="padding:14px 18px;background:#fff0f0;color:var(--danger);border:1px solid #f2d1d1;font-size:13px;">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    @endif

    <!-- ====================================
         TOP BAR
    ===================================== -->

    <div class="top-bar">
        Free shipping on orders over LKR 10,000 ✨
    </div>


    <!-- ====================================
         NAVBAR
    ===================================== -->

    <nav>

        <div class="container nav-inner">

            <a href="{{ route('home') }}" class="logo">
                LUMÉ<span>A</span>
            </a>


            <div class="nav-links">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a
                    href="{{ route('shop.index') }}"
                    class="active"
                >
                    Shop
                </a>

                <a href="{{ route('home') }}#categories">
                    Categories
                </a>

                <a href="{{ route('home') }}#about">
                    About
                </a>

                <a href="{{ route('home') }}#contact">
                    Contact
                </a>

            </div>


            <div class="nav-actions">

                <!-- SEARCH -->

                <button
                    type="button"
                    class="icon-btn"
                    aria-label="Search"
                >
                    ⌕
                </button>


                <!-- WISHLIST -->

                <button
                    type="button"
                    class="icon-btn"
                    aria-label="Wishlist"
                >
                    ♡
                </button>


                <!-- CART -->

                @php
                    $cartCount = collect(session('cart', []))->sum('quantity');
                @endphp

                <a
                    href="{{ route('cart.index') }}"
                    class="icon-btn"
                    aria-label="Shopping cart"
                >

                    🛍

                    @if($cartCount > 0)
                        <span class="cart-badge">
                            {{ $cartCount }}
                        </span>
                    @endif

                </a>

            </div>


        </div>

    </nav>


    <!-- ====================================
         BREADCRUMB
    ===================================== -->

    <div class="container breadcrumb-wrapper">

        <div class="breadcrumb">

            <a href="{{ route('home') }}">
                Home
            </a>

            <span> / </span>

            <a href="{{ route('shop.index') }}">
                Shop
            </a>

            <span> / </span>

            <span class="breadcrumb-current">
                {{ $product->name }}
            </span>

        </div>

    </div>


    <!-- ====================================
         PRODUCT
    ===================================== -->

    <section class="product-section">

        <div class="container product-main">


            <!-- PRODUCT IMAGE -->

            <div class="product-image-wrapper">

                <div class="product-image">

                    @if($product->is_featured)

                        <span class="badge">
                            Bestseller
                        </span>

                    @endif


                    @if($product->image)

                        <img
                            src="{{ $product->image }}"
                            alt="{{ $product->name }}"
                        >

                    @endif

                </div>

            </div>


            <!-- PRODUCT CONTENT -->

            <div class="product-content">


                <!-- CATEGORY -->

                <div class="product-category">
                    {{ $product->category }}
                </div>


                <!-- NAME -->

                <h1>
                    {{ $product->name }}
                </h1>


                <!-- RATING -->

                <div class="stars" aria-label="{{ $averageRating ?: 0 }} out of 5 stars">

                    @for($star = 1; $star <= 5; $star++)
                        {{ $star <= round($averageRating) ? '★' : '☆' }}
                    @endfor

                    <span class="review-text">
                        @if($reviewCount > 0)
                            {{ number_format($averageRating, 1) }} · {{ $reviewCount }} {{ $reviewCount === 1 ? 'review' : 'reviews' }}
                        @else
                            No reviews yet
                        @endif
                    </span>

                </div>


                <!-- DESCRIPTION -->

                <p class="description">
                    {{ $product->description }}
                </p>


                <!-- PRICE -->

                <div class="price">

                    LKR {{ number_format($product->price, 2) }}


                    @if($product->old_price)

                        <span class="old-price">
                            LKR {{ number_format($product->old_price, 2) }}
                        </span>


                        @php

                            $discount = round(
                                (($product->old_price - $product->price)
                                / $product->old_price) * 100
                            );

                        @endphp


                        <span class="discount">
                            -{{ $discount }}%
                        </span>

                    @endif

                </div>


                <!-- STOCK -->

                @if($product->stock > 0)

                    <div class="stock in-stock">
                        ✓ {{ $product->stock }} items available
                    </div>

                @else

                    <div class="stock out-stock">
                        ✕ This product is currently out of stock
                    </div>

                @endif


                <!-- PURCHASE -->

                <div class="purchase-box">


                    @if($product->stock > 0)

                        <form
                            action="{{ route('cart.add') }}"
                            method="POST"
                            class="cart-form"
                            id="cartForm"
                        >

                            @csrf


                            <input
                                type="hidden"
                                name="product_id"
                                value="{{ $product->id }}"
                            >


                            <input
                                type="hidden"
                                name="quantity"
                                id="cartQuantity"
                                value="1"
                            >


                            <!-- QUANTITY -->

                            <div class="quantity">

                                <button
                                    type="button"
                                    onclick="decreaseQty()"
                                    aria-label="Decrease quantity"
                                >
                                    −
                                </button>


                                <input
                                    type="number"
                                    id="quantity"
                                    value="1"
                                    min="1"
                                    max="{{ $product->stock }}"
                                    aria-label="Quantity"
                                >


                                <button
                                    type="button"
                                    onclick="increaseQty()"
                                    aria-label="Increase quantity"
                                >
                                    +
                                </button>

                            </div>


                            <!-- ADD TO CART -->

                            <button
                                type="submit"
                                class="add-cart"
                            >
                                Add to Cart
                            </button>

                        </form>

                    @else

                        <div class="cart-form">

                            <div class="quantity">

                                <input
                                    type="number"
                                    value="1"
                                    disabled
                                >

                            </div>


                            <button
                                type="button"
                                class="add-cart"
                                disabled
                            >
                                Out of Stock
                            </button>

                        </div>

                    @endif


                    <!-- WISHLIST -->

                    @auth
                        @php
                            $isWishlisted = Auth::user()
                                ->wishlists()
                                ->where('product_id', $product->id)
                                ->exists();
                        @endphp

                        <form
                            action="{{ route('wishlist.toggle', $product) }}"
                            method="POST"
                            class="wishlist-form"
                        >
                            @csrf

                            <button
                                type="submit"
                                class="wishlist"
                                aria-label="{{ $isWishlisted ? 'Remove from wishlist' : 'Add to wishlist' }}"
                                title="{{ $isWishlisted ? 'Remove from wishlist' : 'Add to wishlist' }}"
                            >
                                {{ $isWishlisted ? '♥' : '♡' }}
                            </button>
                        </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="wishlist wishlist-link"
                            aria-label="Login to use wishlist"
                            title="Login to use wishlist"
                        >
                            ♡
                        </a>
                    @endauth

                </div>


                <!-- PRODUCT DETAILS -->

                <div class="details">


                    <div class="detail-row">

                        <strong>
                            Category
                        </strong>

                        <span>
                            {{ $product->category }}
                        </span>

                    </div>


                    <div class="detail-row">

                        <strong>
                            Availability
                        </strong>

                        <span>

                            @if($product->stock > 0)

                                In Stock

                            @else

                                Out of Stock

                            @endif

                        </span>

                    </div>


                    <div class="detail-row">

                        <strong>
                            SKU
                        </strong>

                        <span>
                            LUM-{{ str_pad($product->id, 5, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>


                    <div class="detail-row">

                        <strong>
                            Shipping
                        </strong>

                        <span>
                            Islandwide delivery available
                        </span>

                    </div>


                    <div class="detail-row">

                        <strong>
                            Returns
                        </strong>

                        <span>
                            7-day return policy
                        </span>

                    </div>


                </div>


            </div>

        </div>

    </section>


    <!-- ====================================
         REVIEWS
    ===================================== -->

    <section class="reviews" id="reviews">

        <div class="container">

            <div class="section-heading">

                <div class="eyebrow">
                    Customer feedback
                </div>

                <h2>
                    Reviews for {{ $product->name }}.
                </h2>

            </div>

            <div class="reviews-top">

                <div class="rating-summary">

                    <div class="rating-number">
                        {{ $reviewCount > 0 ? number_format($averageRating, 1) : '—' }}
                    </div>

                    <div class="rating-stars">
                        @for($star = 1; $star <= 5; $star++)
                            {{ $star <= round($averageRating) ? '★' : '☆' }}
                        @endfor
                    </div>

                    <div class="rating-count">
                        {{ $reviewCount }} {{ $reviewCount === 1 ? 'customer review' : 'customer reviews' }}
                    </div>

                </div>

                <div>

                    @auth

                        @if($currentUserReview)

                            <div class="review-form-box">

                                <h3>Your review</h3>

                                <div class="review-item" style="margin-bottom:0;">

                                    <div class="review-head">

                                        <div>
                                            <div class="review-user">
                                                {{ $currentUserReview->user->name }}
                                            </div>
                                            <div class="review-date">
                                                {{ $currentUserReview->created_at->format('M d, Y') }}
                                            </div>
                                        </div>

                                        <div class="review-rating">
                                            @for($star = 1; $star <= 5; $star++)
                                                {{ $star <= $currentUserReview->rating ? '★' : '☆' }}
                                            @endfor
                                        </div>

                                    </div>

                                    @if($currentUserReview->comment)
                                        <p class="review-comment">
                                            {{ $currentUserReview->comment }}
                                        </p>
                                    @endif

                                    <form
                                        action="{{ route('reviews.destroy', $currentUserReview) }}"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="delete-review">
                                            Remove My Review
                                        </button>
                                    </form>

                                </div>

                            </div>

                        @else

                            <div class="review-form-box">

                                <h3>Write a review</h3>

                                <form
                                    action="{{ route('reviews.store', $product) }}"
                                    method="POST"
                                >

                                    @csrf

                                    <div class="review-stars-input">

                                        @for($star = 5; $star >= 1; $star--)
                                            <input
                                                type="radio"
                                                id="rating-{{ $star }}"
                                                name="rating"
                                                value="{{ $star }}"
                                                {{ old('rating') == $star ? 'checked' : '' }}
                                            >

                                            <label
                                                for="rating-{{ $star }}"
                                                title="{{ $star }} star{{ $star > 1 ? 's' : '' }}"
                                            >
                                                ★
                                            </label>
                                        @endfor

                                    </div>

                                    @error('rating')
                                        <div class="review-error">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <textarea
                                        name="comment"
                                        placeholder="Share your experience with this product..."
                                    >{{ old('comment') }}</textarea>

                                    @error('comment')
                                        <div class="review-error">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button type="submit" class="review-submit">
                                        Submit Review
                                    </button>

                                </form>

                            </div>

                        @endif

                    @else

                        <div class="login-review-note">
                            <a href="{{ route('login') }}">Login</a>
                            to share your review and rating for this product.
                        </div>

                    @endauth

                </div>

            </div>

            <div class="reviews-list" style="margin-top:45px;">

                <h3>Customer reviews</h3>

                @forelse($reviews as $review)

                    <div class="review-item">

                        <div class="review-head">

                            <div>
                                <div class="review-user">
                                    {{ $review->user->name }}
                                </div>

                                <div class="review-date">
                                    {{ $review->created_at->format('M d, Y') }}
                                </div>
                            </div>

                            <div class="review-rating">
                                @for($star = 1; $star <= 5; $star++)
                                    {{ $star <= $review->rating ? '★' : '☆' }}
                                @endfor
                            </div>

                        </div>

                        @if($review->comment)
                            <p class="review-comment">
                                {{ $review->comment }}
                            </p>
                        @else
                            <p class="review-comment">
                                No written comment provided.
                            </p>
                        @endif

                    </div>

                @empty

                    <div class="no-reviews">
                        No reviews yet. Be the first to review this product.
                    </div>

                @endforelse

            </div>

        </div>

    </section>


    <!-- ====================================
         RELATED PRODUCTS
    ===================================== -->

    @if($relatedProducts->count())


        <section class="related">

            <div class="container">


                <div class="section-heading">

                    <div class="eyebrow">
                        You may also like
                    </div>

                    <h2>
                        More from {{ $product->category }}.
                    </h2>

                </div>


                <div class="related-grid">


                    @foreach($relatedProducts as $related)


                        <a
                            href="{{ route('product.show', $related->slug) }}"
                            class="related-card"
                        >


                            <div class="related-image">

                                <img
                                    src="{{ $related->image }}"
                                    alt="{{ $related->name }}"
                                >

                            </div>


                            <div class="related-info">


                                <div class="related-category">
                                    {{ $related->category }}
                                </div>


                                <h3 class="related-name">
                                    {{ $related->name }}
                                </h3>


                                <div class="related-price">

                                    LKR {{ number_format($related->price, 2) }}

                                </div>


                            </div>


                        </a>


                    @endforeach


                </div>


            </div>

        </section>


    @endif


    <!-- ====================================
         FOOTER
    ===================================== -->

    <footer>

        <div class="container">


            <div class="footer-grid">


                <!-- BRAND -->

                <div class="footer-brand">

                    <a
                        href="{{ route('home') }}"
                        class="logo"
                    >
                        LUMÉ<span>A</span>
                    </a>


                    <p>
                        Beauty that feels like you.
                        Carefully curated beauty essentials
                        for your everyday ritual.
                    </p>

                </div>


                <!-- SHOP -->

                <div class="footer-col">

                    <h4>
                        Shop
                    </h4>


                    <a href="{{ route('shop.index') }}">
                        All Products
                    </a>


                    <a href="{{ route('shop.index', ['category' => 'Skincare']) }}">
                        Skincare
                    </a>


                    <a href="{{ route('shop.index', ['category' => 'Makeup']) }}">
                        Makeup
                    </a>


                    <a href="{{ route('shop.index', ['category' => 'Haircare']) }}">
                        Haircare
                    </a>


                    <a href="{{ route('shop.index', ['category' => 'Fragrance']) }}">
                        Fragrance
                    </a>


                    <a href="{{ route('shop.index', ['category' => 'Body Care']) }}">
                        Body Care
                    </a>

                </div>


                <!-- CUSTOMER CARE -->

                <div class="footer-col">

                    <h4>
                        Customer Care
                    </h4>


                    <a href="{{ route('home') }}#contact">
                        Contact Us
                    </a>


                    <a href="#">
                        Shipping & Delivery
                    </a>


                    <a href="#">
                        Returns
                    </a>


                    <a href="#">
                        FAQ
                    </a>


                    <a href="#">
                        Privacy Policy
                    </a>

                </div>


                <!-- SOCIAL -->

                <div class="footer-col">

                    <h4>
                        Follow Us
                    </h4>


                    <a href="#">
                        Instagram
                    </a>


                    <a href="#">
                        Facebook
                    </a>


                    <a href="#">
                        TikTok
                    </a>


                    <a href="#">
                        Pinterest
                    </a>

                </div>


            </div>


            <!-- COPYRIGHT -->

            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} Luméa Cosmetics.
                    All rights reserved.
                </span>


                <span>
                    Beauty that feels like you ♥
                </span>

            </div>


        </div>

    </footer>


    <!-- ====================================
         JAVASCRIPT
    ===================================== -->

    <script>

        const quantityInput = document.getElementById('quantity');
        const cartQuantity = document.getElementById('cartQuantity');


        function syncQuantity() {

            if (!quantityInput || !cartQuantity) {
                return;
            }

            cartQuantity.value = quantityInput.value;

        }


        function decreaseQty() {

            if (!quantityInput || quantityInput.disabled) {
                return;
            }

            let value = parseInt(quantityInput.value) || 1;

            if (value > 1) {

                quantityInput.value = value - 1;

            }

            syncQuantity();

        }


        function increaseQty() {

            if (!quantityInput || quantityInput.disabled) {
                return;
            }

            let value = parseInt(quantityInput.value) || 1;
            let max = parseInt(quantityInput.max) || 1;

            if (value < max) {

                quantityInput.value = value + 1;

            }

            syncQuantity();

        }


        if (quantityInput) {

            quantityInput.addEventListener('input', function () {

                let value = parseInt(this.value) || 1;
                let min = parseInt(this.min) || 1;
                let max = parseInt(this.max) || 1;


                if (value < min) {

                    this.value = min;

                }


                if (value > max) {

                    this.value = max;

                }


                syncQuantity();

            });

        }


        const cartForm = document.getElementById('cartForm');

        if (cartForm) {

            cartForm.addEventListener('submit', function () {

                syncQuantity();

            });

        }

    </script>


</body>
</html>