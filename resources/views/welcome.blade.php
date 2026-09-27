<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Luméa Cosmetics | Beauty that feels like you</title>

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
            width: 100%;
            display: block;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* =========================
           TOP BAR
        ========================= */

        .top-bar {
            background: var(--dark);
            color: #fff;
            text-align: center;
            padding: 9px 15px;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(251, 247, 243, 0.96);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(234, 223, 217, 0.8);
        }

        .nav-inner {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 31px;
            letter-spacing: 3px;
            font-weight: 500;
            white-space: nowrap;
        }

        .logo span {
            color: var(--rose);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
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
            bottom: -7px;
            width: 0;
            height: 1px;
            background: var(--rose);
            transition: 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
            cursor: pointer;
            transition: 0.3s;
            position: relative;
            flex-shrink: 0;
        }

        .icon-btn:hover {
            background: var(--dark);
            color: white;
        }

        .cart-link {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-count {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: var(--rose);
            color: #fff;
            font-size: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            border: 2px solid var(--cream);
        }

        .auth-area {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-left: 3px;
        }

        .auth-name {
            font-size: 12px;
            color: var(--muted);
            white-space: nowrap;
        }

        .auth-link {
            font-size: 12px;
            color: var(--muted);
            white-space: nowrap;
        }

        .auth-link:hover {
            color: var(--rose);
        }

        .logout-btn {
            border: none;
            background: transparent;
            color: var(--muted);
            font-size: 12px;
            cursor: pointer;
            padding: 0;
            white-space: nowrap;
        }

        .logout-btn:hover {
            color: var(--rose);
        }

        .mobile-menu {
            display: none;
        }

        /* =========================
           ALERTS
        ========================= */

        .alert-wrapper {
            padding-top: 20px;
        }

        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            font-size: 13px;
        }

        .alert-success {
            background: #edf8ef;
            color: #29633a;
            border: 1px solid #d4ecd8;
        }

        .alert-error {
            background: #fff0f0;
            color: var(--danger);
            border: 1px solid #f2d1d1;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 650px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            min-height: 650px;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 70px 50px 70px 0;
        }

        .eyebrow {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--rose);
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(55px, 7vw, 94px);
            line-height: 0.98;
            font-weight: 500;
            max-width: 700px;
        }

        .hero h1 em {
            color: var(--rose);
            font-style: italic;
        }

        .hero-text {
            color: var(--muted);
            max-width: 510px;
            margin: 28px 0 35px;
            font-size: 16px;
        }

        .btn-row {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 27px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary {
            background: var(--dark);
            color: white;
        }

        .btn-primary:hover {
            background: var(--rose);
            transform: translateY(-2px);
        }

        .btn-light {
            border: 1px solid var(--border);
            background: transparent;
        }

        .btn-light:hover {
            background: var(--white);
        }

        .hero-image {
            min-height: 650px;
            background:
                linear-gradient(rgba(0,0,0,0.05), rgba(0,0,0,0.05)),
                url("https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=1000&q=85")
                center / cover;
        }

        /* =========================
           TRUST BAR
        ========================= */

        .trust-bar {
            background: var(--white);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .trust-item {
            padding: 22px 18px;
            text-align: center;
            border-right: 1px solid var(--border);
        }

        .trust-item:last-child {
            border-right: none;
        }

        .trust-item strong {
            display: block;
            font-size: 13px;
            margin-bottom: 3px;
        }

        .trust-item span {
            color: var(--muted);
            font-size: 12px;
        }

        /* =========================
           SECTION
        ========================= */

        section {
            padding: 95px 0;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
            margin-bottom: 45px;
        }

        .section-title {
            font-family: "Playfair Display", serif;
            font-size: 48px;
            line-height: 1.1;
            font-weight: 500;
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 420px;
            font-size: 14px;
        }

        .view-link {
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
            border-bottom: 1px solid var(--dark);
            padding-bottom: 4px;
        }

        .view-link:hover {
            color: var(--rose);
            border-color: var(--rose);
        }

        /* =========================
           CATEGORIES
        ========================= */

        .categories {
            background: var(--white);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 18px;
        }

        .category-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            min-height: 300px;
            background: var(--soft-pink);
        }

        .category-card img {
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .category-card:hover img {
            transform: scale(1.06);
        }

        .category-overlay {
            position: absolute;
            inset: auto 0 0 0;
            padding: 25px 20px;
            color: white;
            background: linear-gradient(
                transparent,
                rgba(30, 20, 18, 0.85)
            );
        }

        .category-overlay h3 {
            font-family: "Playfair Display", serif;
            font-size: 25px;
            font-weight: 500;
        }

        .category-overlay p {
            font-size: 11px;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .category-empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 55px 20px;
            color: var(--muted);
        }

        /* =========================
           PRODUCTS
        ========================= */

        .products {
            background: var(--cream);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .product-card {
            background: var(--white);
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(48, 40, 38, .08);
        }

        .product-main-link {
            display: block;
        }

        .product-image {
            height: 310px;
            overflow: hidden;
            background: #f3ece7;
            position: relative;
        }

        .product-image img {
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: var(--white);
            padding: 7px 10px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            z-index: 2;
        }

        .wishlist-form {
            margin: 0;
            padding: 0;
        }

        .wishlist {
            position: absolute;
            right: 14px;
            top: 14px;
            width: 35px;
            height: 35px;
            border: none;
            border-radius: 50%;
            background: rgba(255,255,255,0.95);
            cursor: pointer;
            z-index: 3;
            font-size: 17px;
            transition: .2s;
            display: flex;
            align-items: center;
            justify-content: center;
            color: inherit;
        }

        .wishlist-link {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wishlist:hover {
            background: var(--soft-pink);
            color: var(--rose);
        }

        .product-info {
            padding: 20px 16px 22px;
        }

        .product-category {
            color: var(--rose);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
        }

        .product-name {
            font-family: "Playfair Display", serif;
            font-size: 21px;
            margin: 6px 0 8px;
        }

        .stars {
            font-size: 12px;
            letter-spacing: 2px;
            margin-bottom: 7px;
        }

        .price {
            font-size: 14px;
            font-weight: 700;
        }

        .old-price {
            text-decoration: line-through;
            color: #aaa;
            margin-left: 8px;
            font-weight: 400;
        }

        .product-empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 50px 0;
            color: var(--muted);
        }

        /* =========================
           PROMO
        ========================= */

        .promo {
            background: var(--dark);
            color: white;
        }

        .promo-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
        }

        .promo-image {
            min-height: 520px;
            background:
                url("https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?auto=format&fit=crop&w=1000&q=85")
                center / cover;
        }

        .promo-content {
            padding: 70px;
        }

        .promo .eyebrow {
            color: var(--pink);
        }

        .promo h2 {
            font-family: "Playfair Display", serif;
            font-size: 54px;
            font-weight: 500;
            line-height: 1.08;
            margin-bottom: 22px;
        }

        .promo p {
            color: #cec2bd;
            max-width: 450px;
            margin-bottom: 30px;
        }

        .promo .btn-primary {
            background: white;
            color: var(--dark);
        }

        .promo .btn-primary:hover {
            background: var(--pink);
        }

        /* =========================
           ABOUT
        ========================= */

        .about {
            background: var(--white);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 70px;
            align-items: center;
        }

        .about-images {
            position: relative;
            min-height: 580px;
        }

        .about-main {
            width: 78%;
            height: 500px;
            object-fit: cover;
        }

        .about-small {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 46%;
            height: 260px;
            object-fit: cover;
            border: 10px solid white;
        }

        .about-text .section-title {
            margin-bottom: 25px;
        }

        .about-text p {
            color: var(--muted);
            max-width: 600px;
            margin-bottom: 20px;
        }

        .signature {
            font-family: "Playfair Display", serif;
            font-size: 25px;
            font-style: italic;
            margin-top: 25px;
        }

        /* =========================
           NEWSLETTER
        ========================= */

        .newsletter {
            background: var(--soft-pink);
            text-align: center;
        }

        .newsletter-content {
            max-width: 700px;
            margin: auto;
        }

        .newsletter h2 {
            font-family: "Playfair Display", serif;
            font-size: 47px;
            font-weight: 500;
            margin-bottom: 14px;
        }

        .newsletter p {
            color: var(--muted);
            margin-bottom: 28px;
        }

        .newsletter-form {
            max-width: 530px;
            margin: auto;
            display: flex;
            background: white;
            border: 1px solid var(--border);
        }

        .newsletter-form input {
            flex: 1;
            border: none;
            outline: none;
            padding: 16px;
            font-family: inherit;
            font-size: 13px;
            background: transparent;
        }

        .newsletter-form button {
            border: none;
            background: var(--dark);
            color: white;
            padding: 0 25px;
            cursor: pointer;
            font-family: inherit;
            font-weight: 600;
        }

        .newsletter-form button:hover {
            background: var(--rose);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #241c1a;
            color: white;
            padding-top: 70px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 45px;
        }

        .footer-brand .logo {
            display: inline-block;
            margin-bottom: 18px;
        }

        .footer-brand p {
            color: #b8aaa5;
            font-size: 13px;
            max-width: 300px;
        }

        .footer-col h4 {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 18px;
        }

        .footer-col a {
            display: block;
            color: #b8aaa5;
            font-size: 13px;
            margin-bottom: 10px;
            transition: 0.2s;
        }

        .footer-col a:hover {
            color: white;
        }

        .footer-empty {
            color: #8f827d;
            font-size: 13px;
        }

        .footer-bottom {
            margin-top: 60px;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            gap: 20px;
            color: #91837e;
            font-size: 11px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1100px) {

            .nav-links {
                gap: 18px;
            }

            .auth-name {
                display: none;
            }

            .category-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-grid {
                gap: 40px;
            }

            .promo-content {
                padding: 45px;
            }

        }

        @media (max-width: 760px) {

            .nav-inner {
                min-height: 70px;
            }

            .nav-links {
                display: none;
            }

            .auth-area {
                gap: 8px;
            }

            .mobile-menu {
                display: flex;
            }

            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-content {
                padding: 70px 0;
            }

            .hero-image {
                min-height: 460px;
            }

            .trust-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .trust-item:nth-child(2) {
                border-right: none;
            }

            .trust-item:nth-child(3),
            .trust-item:nth-child(4) {
                border-top: 1px solid var(--border);
            }

            .section-header {
                display: block;
            }

            .view-link {
                display: inline-block;
                margin-top: 18px;
            }

            .category-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .promo-grid {
                grid-template-columns: 1fr;
            }

            .promo-image {
                min-height: 420px;
            }

            .promo-content {
                padding: 55px 25px;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .about-images {
                min-height: 500px;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-bottom {
                flex-direction: column;
            }

        }

        @media (max-width: 520px) {

            .logo {
                font-size: 25px;
            }

            .auth-link,
            .logout-btn {
                font-size: 11px;
            }

            .hero h1 {
                font-size: 52px;
            }

            .section-title {
                font-size: 38px;
            }

            .category-grid {
                grid-template-columns: 1fr;
            }

            .category-card {
                min-height: 350px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .newsletter h2 {
                font-size: 38px;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form button {
                padding: 14px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .nav-actions {
                gap: 6px;
            }

            .icon-btn {
                width: 36px;
                height: 36px;
            }

        }

    </style>

</head>


<body>


    <!-- TOP BAR -->

    <div class="top-bar">
        Free shipping on orders over LKR 10,000 ✨
    </div>


    <!-- NAVBAR -->

    <nav>

        <div class="container nav-inner">


            <!-- LOGO -->

            <a
                href="{{ route('home') }}"
                class="logo"
            >
                LUMÉ<span>A</span>
            </a>


            <!-- NAV LINKS -->

            <div class="nav-links">

                <a href="{{ route('home') }}">
                    Home
                </a>

                <a href="{{ route('shop.index') }}">
                    Shop
                </a>

                <a href="#categories">
                    Categories
                </a>

                <a href="#about">
                    About
                </a>

                <a href="#contact">
                    Contact
                </a>

            </div>


            <!-- NAV ACTIONS -->

            <div class="nav-actions">


                <!-- SEARCH -->

                <a
                    href="{{ route('shop.index') }}"
                    class="icon-btn"
                    aria-label="Search"
                >
                    ⌕
                </a>


                <!-- ACCOUNT -->

                @auth

                    <div class="auth-area">

                        <span class="auth-name">
                            Hi, {{ Auth::user()->name }}
                        </span>

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

                @else

                    <div class="auth-area">

                        <a
                            href="{{ route('login') }}"
                            class="auth-link"
                        >
                            Login
                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="auth-link"
                        >
                            Create Account
                        </a>

                    </div>

                @endauth


                <!-- WISHLIST -->

                @auth

                    <a
                        href="{{ route('wishlist.index') }}"
                        class="icon-btn"
                        aria-label="Wishlist"
                    >
                        ♡
                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="icon-btn"
                        aria-label="Login to use wishlist"
                    >
                        ♡
                    </a>

                @endauth


                <!-- CART -->

                @php
                    $cartCount = collect(
                        session('cart', [])
                    )->sum('quantity');
                @endphp


                <a
                    href="{{ route('cart.index') }}"
                    class="icon-btn cart-link"
                    aria-label="Shopping Cart"
                >

                    🛍

                    @if($cartCount > 0)

                        <span class="cart-count">
                            {{ $cartCount }}
                        </span>

                    @endif

                </a>


                <!-- MOBILE MENU -->

                <button
                    class="icon-btn mobile-menu"
                    type="button"
                    aria-label="Menu"
                >
                    ☰
                </button>


            </div>


        </div>

    </nav>


    <!-- SUCCESS / ERROR MESSAGE -->

    @if(session('success') || session('error'))

        <div class="container alert-wrapper">

            @if(session('success'))

                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif


            @if(session('error'))

                <div class="alert alert-error">
                    {{ session('error') }}
                </div>

            @endif

        </div>

    @endif


    <!-- HERO -->

    <section
        class="hero"
        id="home"
    >

        <div class="container hero-grid">


            <div class="hero-content">


                <div class="eyebrow">
                    Beauty • Care • Confidence
                </div>


                <h1>

                    Discover<br>
                    your <em>glow.</em>

                </h1>


                <p class="hero-text">

                    Thoughtfully curated beauty essentials made to
                    celebrate your natural beauty and everyday rituals.

                </p>


                <div class="btn-row">


                    <a
                        href="{{ route('shop.index') }}"
                        class="btn btn-primary"
                    >
                        Shop Collection →
                    </a>


                    <a
                        href="#categories"
                        class="btn btn-light"
                    >
                        Explore Categories
                    </a>


                </div>


            </div>


            <div class="hero-image"></div>


        </div>

    </section>


    <!-- TRUST BAR -->

    <div class="trust-bar">

        <div class="container trust-grid">


            <div class="trust-item">

                <strong>
                    Free Delivery
                </strong>

                <span>
                    On orders over LKR 10,000
                </span>

            </div>


            <div class="trust-item">

                <strong>
                    Authentic Products
                </strong>

                <span>
                    100% genuine beauty products
                </span>

            </div>


            <div class="trust-item">

                <strong>
                    Secure Payments
                </strong>

                <span>
                    Safe & trusted checkout
                </span>

            </div>


            <div class="trust-item">

                <strong>
                    Customer Care
                </strong>

                <span>
                    We're here for you
                </span>

            </div>


        </div>

    </div>


    <!-- CATEGORIES -->

    <section
        class="categories"
        id="categories"
    >

        <div class="container">


            <div class="section-header">


                <div>

                    <div class="eyebrow">
                        Shop by category
                    </div>

                    <h2 class="section-title">
                        Find your beauty ritual.
                    </h2>

                </div>


                <p class="section-subtitle">

                    From everyday essentials to special treats,
                    discover products chosen to make your routine
                    feel a little more beautiful.

                </p>


            </div>


            <div class="category-grid">

                @php
                    $categoryFallbackImages = [
                        'skincare' => 'https://images.unsplash.com/photo-1556228578-8c89e6adf883?auto=format&fit=crop&w=700&q=85',
                        'makeup' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=700&q=85',
                        'haircare' => 'https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=700&q=85',
                        'fragrance' => 'https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&fit=crop&w=700&q=85',
                        'body-care' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=700&q=85',
                    ];
                @endphp


                @forelse($categories as $category)

                    @php
                        $categoryImage = $category->image
                            ?: ($categoryFallbackImages[$category->slug]
                                ?? 'https://images.unsplash.com/photo-1556228578-8c89e6adf883?auto=format&fit=crop&w=700&q=85');
                    @endphp


                    <a
                        href="{{ route('shop.index', ['category' => $category->slug]) }}"
                        class="category-card"
                    >

                        <img
                            src="{{ $categoryImage }}"
                            alt="{{ $category->name }}"
                            loading="lazy"
                        >


                        <div class="category-overlay">

                            <p>
                                Explore
                            </p>

                            <h3>
                                {{ $category->name }}
                            </h3>

                        </div>

                    </a>


                @empty

                    <div class="category-empty">

                        No active categories available yet.

                    </div>

                @endforelse


            </div>


        </div>

    </section>


    <!-- PRODUCTS -->

    <section
        class="products"
        id="shop"
    >

        <div class="container">


            <div class="section-header">


                <div>

                    <div class="eyebrow">
                        Customer favorites
                    </div>

                    <h2 class="section-title">
                        Best sellers.
                    </h2>

                </div>


                <a
                    href="{{ route('shop.index') }}"
                    class="view-link"
                >
                    View all products →
                </a>


            </div>


            <div class="product-grid">


                @forelse($featuredProducts as $product)


                    <div class="product-card">


                        <!-- PRODUCT LINK -->

                        <a
                            href="{{ route('product.show', $product->slug) }}"
                            class="product-main-link"
                        >


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
                                        loading="lazy"
                                    >

                                @else

                                    <div
                                        style="
                                            height:100%;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            color:#756b67;
                                        "
                                    >
                                        No image
                                    </div>

                                @endif


                            </div>


                            <div class="product-info">


                                <span class="product-category">

                                    {{ $product->categoryRelation?->name ?? $product->category }}

                                </span>


                                <h3 class="product-name">
                                    {{ $product->name }}
                                </h3>


                                <div
                                    class="stars"
                                    aria-label="5 out of 5 stars"
                                >
                                    ★★★★★
                                </div>


                                <div class="price">

                                    LKR
                                    {{ number_format((float) $product->price, 2) }}


                                    @if($product->old_price)

                                        <span class="old-price">
                                            LKR
                                            {{ number_format((float) $product->old_price, 2) }}
                                        </span>

                                    @endif

                                </div>


                            </div>


                        </a>


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
                                    aria-label="{{ $isWishlisted
                                        ? 'Remove ' . $product->name . ' from wishlist'
                                        : 'Add ' . $product->name . ' to wishlist' }}"
                                >
                                    {{ $isWishlisted ? '♥' : '♡' }}
                                </button>

                            </form>

                        @else

                            <a
                                href="{{ route('login') }}"
                                class="wishlist wishlist-link"
                                aria-label="Login to add {{ $product->name }} to wishlist"
                            >
                                ♡
                            </a>

                        @endauth


                    </div>


                @empty


                    <div class="product-empty">

                        No featured products available yet.

                    </div>


                @endforelse


            </div>


        </div>

    </section>


    <!-- PROMO -->

    <section class="promo">

        <div class="container promo-grid">


            <div class="promo-image"></div>


            <div class="promo-content">


                <div class="eyebrow">
                    Your everyday ritual
                </div>


                <h2>
                    Beauty that
                    feels like you.
                </h2>


                <p>

                    We believe beauty should never feel complicated.
                    Luméa brings together carefully selected products
                    that fit naturally into your life.

                </p>


                <a
                    href="{{ route('shop.index') }}"
                    class="btn btn-primary"
                >
                    Shop Collection →
                </a>


            </div>


        </div>

    </section>


    <!-- ABOUT -->

    <section
        class="about"
        id="about"
    >

        <div class="container about-grid">


            <div class="about-images">


                <img
                    class="about-main"
                    src="https://images.unsplash.com/photo-1612817288484-6f916006741a?auto=format&fit=crop&w=900&q=85"
                    alt="Beauty products"
                    loading="lazy"
                >


                <img
                    class="about-small"
                    src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&w=600&q=85"
                    alt="Skincare ritual"
                    loading="lazy"
                >


            </div>


            <div class="about-text">


                <div class="eyebrow">
                    Our story
                </div>


                <h2 class="section-title">

                    Simple beauty.
                    Beautifully yours.

                </h2>


                <p>

                    Luméa was created around one simple idea:
                    beauty should help you feel more like yourself.

                </p>


                <p>

                    From skincare to fragrance, every product in our
                    collection is thoughtfully selected with quality,
                    confidence and everyday self-care in mind.

                </p>


                <p>

                    Your routine is personal.
                    We believe your beauty should be too.

                </p>


                <div class="signature">
                    With love, Luméa
                </div>


            </div>


        </div>

    </section>


    <!-- NEWSLETTER -->

    <section
        class="newsletter"
        id="contact"
    >

        <div class="container newsletter-content">


            <div class="eyebrow">
                Stay in the glow
            </div>


            <h2>
                Beauty notes, just for you.
            </h2>


            <p>

                Sign up for new arrivals, exclusive offers and
                little moments of beauty inspiration.

            </p>


            <form class="newsletter-form">

                <input
                    type="email"
                    placeholder="Your email address"
                    required
                >

                <button type="submit">
                    Subscribe
                </button>

            </form>


        </div>

    </section>


    <!-- FOOTER -->

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
                        Discover carefully curated beauty
                        essentials for your everyday ritual.

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


                    @forelse($categories as $category)

                        <a
                            href="{{ route('shop.index', ['category' => $category->slug]) }}"
                        >
                            {{ $category->name }}
                        </a>

                    @empty

                        <span class="footer-empty">
                            No categories available
                        </span>

                    @endforelse


                </div>


                <!-- CUSTOMER CARE -->

                <div class="footer-col">

                    <h4>
                        Customer Care
                    </h4>


                    <a href="#contact">
                        Contact Us
                    </a>


                    <a href="{{ route('cart.index') }}">
                        Shopping Cart
                    </a>


                    @auth

                        <a href="{{ route('wishlist.index') }}">
                            My Wishlist
                        </a>

                    @else

                        <a href="{{ route('login') }}">
                            Login
                        </a>

                    @endauth


                    <a href="#">
                        Shipping & Delivery
                    </a>


                    <a href="#">
                        Returns
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


            <div class="footer-bottom">


                <span>

                    © {{ date('Y') }}
                    Luméa Cosmetics.
                    All rights reserved.

                </span>


                <span>
                    Made with ♥
                </span>


            </div>


        </div>

    </footer>


    <!-- JAVASCRIPT -->

    <script>

        /*
        |--------------------------------------------------------------------------
        | Newsletter Demo
        |--------------------------------------------------------------------------
        */

        const newsletterForm =
            document.querySelector('.newsletter-form');


        if (newsletterForm) {

            newsletterForm.addEventListener('submit', function (event) {

                event.preventDefault();

                alert('Thank you for subscribing to Luméa! ✨');

                this.reset();

            });

        }

    </script>


</body>

</html>
