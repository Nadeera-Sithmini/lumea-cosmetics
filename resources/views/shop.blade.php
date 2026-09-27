<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shop | Luméa Cosmetics</title>

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
        select {
            font-family: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* ==========================
           TOP BAR
        ========================== */

        .top-bar {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 9px 15px;
            font-size: 13px;
            letter-spacing: .5px;
        }

        /* ==========================
           NAVBAR
        ========================== */

        nav {
            background: rgba(251, 247, 243, .97);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
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
        }

        .icon-btn:hover {
            background: var(--dark);
            color: white;
        }

        /* ==========================
           HERO
        ========================== */

        .shop-hero {
            background: var(--soft-pink);
            padding: 85px 0;
            text-align: center;
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .shop-hero h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(52px, 7vw, 80px);
            font-weight: 500;
            line-height: 1;
            margin-bottom: 20px;
        }

        .shop-hero p {
            color: var(--muted);
            max-width: 580px;
            margin: auto;
            font-size: 15px;
        }

        /* ==========================
           SHOP SECTION
        ========================== */

        .shop-section {
            padding: 75px 0 100px;
        }

        .shop-toolbar {
            display: grid;
            grid-template-columns: 1fr 220px 150px;
            gap: 14px;
            margin-bottom: 22px;
        }

        .search-box {
            display: flex;
            background: white;
            border: 1px solid var(--border);
        }

        .search-box input {
            width: 100%;
            padding: 14px 16px;
            border: none;
            outline: none;
            background: transparent;
            font-size: 13px;
        }

        .search-box button {
            border: none;
            background: var(--dark);
            color: white;
            padding: 0 22px;
            cursor: pointer;
            transition: .25s;
        }

        .search-box button:hover {
            background: var(--rose);
        }

        .select-box {
            background: white;
            border: 1px solid var(--border);
        }

        .select-box select {
            width: 100%;
            padding: 14px;
            border: none;
            outline: none;
            background: white;
            cursor: pointer;
        }

        .clear-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--dark);
            background: transparent;
            font-size: 12px;
            font-weight: 600;
            transition: .25s;
        }

        .clear-btn:hover {
            background: var(--dark);
            color: white;
        }

        /* ==========================
           CATEGORY FILTERS
        ========================== */

        .category-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 45px;
        }

        .category-filter a {
            border: 1px solid var(--border);
            background: white;
            padding: 10px 17px;
            font-size: 12px;
            transition: .25s;
        }

        .category-filter a:hover,
        .category-filter a.active {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
        }

        /* ==========================
           RESULT HEADER
        ========================== */

        .result-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 30px;
        }

        .result-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 40px;
            font-weight: 500;
        }

        .result-count {
            color: var(--muted);
            font-size: 13px;
        }

        /* ==========================
           PRODUCTS
        ========================== */

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .product-card {
            display: block;
            background: white;
            color: var(--dark);
            text-decoration: none;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(48, 40, 38, .08);
        }

        .product-main-link {
            display: block;
            color: inherit;
        }

        .product-image {
            height: 320px;
            position: relative;
            overflow: hidden;
            background: #f3ece7;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 13px;
            left: 13px;
            background: white;
            padding: 7px 10px;
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            z-index: 3;
        }

        .wishlist-form {
            position: absolute;
            top: 13px;
            right: 13px;
            z-index: 4;
            margin: 0;
        }

        .wishlist {
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            font-size: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .25s;
        }

        .wishlist:hover {
            color: var(--rose);
            transform: scale(1.05);
        }

        .product-info {
            padding: 18px 15px 20px;
        }

        .product-category {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 10px;
            font-weight: 700;
        }

        .product-name {
            font-family: "Playfair Display", serif;
            font-size: 21px;
            margin: 5px 0 7px;
            line-height: 1.2;
        }

        .product-description {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 10px;
            line-height: 1.5;

            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .stars {
            font-size: 11px;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .price {
            font-size: 14px;
            font-weight: 700;
        }

        .old-price {
            color: #aaa;
            text-decoration: line-through;
            font-weight: 400;
            margin-left: 8px;
        }

        .stock {
            color: var(--muted);
            font-size: 11px;
            margin-top: 7px;
        }

        /* ==========================
           EMPTY STATE
        ========================== */

        .empty-state {
            background: white;
            border: 1px solid var(--border);
            text-align: center;
            padding: 80px 20px;
        }

        .empty-state h3 {
            font-family: "Playfair Display", serif;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: var(--muted);
        }

        /* ==========================
           PAGINATION
        ========================== */

        .pagination-wrap {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        .pagination-wrap nav {
            position: static;
            border: none;
            background: transparent;
            backdrop-filter: none;
        }

        .pagination-wrap nav > div {
            display: flex;
            justify-content: center;
        }

        .pagination-wrap a,
        .pagination-wrap span {
            font-size: 12px;
        }

        /* ==========================
           FOOTER
        ========================== */

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

        /* ==========================
           RESPONSIVE
        ========================== */

        @media (max-width: 1000px) {

            .shop-toolbar {
                grid-template-columns: 1fr 1fr;
            }

            .clear-btn {
                min-height: 46px;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 700px) {

            .nav-links {
                display: none;
            }

            .nav-inner {
                min-height: 70px;
            }

            .shop-toolbar {
                grid-template-columns: 1fr;
            }

            .result-header {
                display: block;
            }

            .result-count {
                margin-top: 8px;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .product-image {
                height: 250px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                display: block;
            }

        }

        @media (max-width: 480px) {

            .shop-hero {
                padding: 65px 0;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 330px;
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

                <a
                    href="{{ route('login') }}"
                    class="icon-btn"
                    aria-label="Login"
                >
                    ♙
                </a>

                <a
                    href="{{ route('wishlist.index') }}"
                    class="icon-btn"
                    aria-label="Wishlist"
                >
                    ♡
                </a>


                <a
                    href="{{ route('cart.index') }}"
                    class="icon-btn"
                    aria-label="Shopping cart"
                >
                    🛍
                </a>

            </div>


        </div>

    </nav>


    <!-- SHOP HERO -->

    <section class="shop-hero">

        <div class="container">

            <div class="eyebrow">
                Luméa collection
            </div>


            <h1>
                Shop beauty.
            </h1>


            <p>
                Discover skincare, makeup, haircare, fragrance and
                body care thoughtfully selected for your everyday ritual.
            </p>

        </div>

    </section>


    <!-- SHOP SECTION -->

    <section class="shop-section">

        <div class="container">


            <!-- SEARCH + SORT -->

            <form
                method="GET"
                action="{{ route('shop.index') }}"
                class="shop-toolbar"
            >


                <div class="search-box">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search products..."
                    >


                    <button type="submit">
                        Search
                    </button>

                </div>


                <div class="select-box">

                    <select
                        name="sort"
                        onchange="this.form.submit()"
                    >

                        <option value="">
                            Sort by
                        </option>


                        <option
                            value="latest"
                            {{ request('sort') === 'latest' ? 'selected' : '' }}
                        >
                            Newest
                        </option>


                        <option
                            value="name_az"
                            {{ request('sort') === 'name_az' ? 'selected' : '' }}
                        >
                            Name A-Z
                        </option>


                        <option
                            value="name_za"
                            {{ request('sort') === 'name_za' ? 'selected' : '' }}
                        >
                            Name Z-A
                        </option>


                        <option
                            value="price_low"
                            {{ request('sort') === 'price_low' ? 'selected' : '' }}
                        >
                            Price: Low to High
                        </option>


                        <option
                            value="price_high"
                            {{ request('sort') === 'price_high' ? 'selected' : '' }}
                        >
                            Price: High to Low
                        </option>

                    </select>

                </div>


                <a
                    href="{{ route('shop.index') }}"
                    class="clear-btn"
                >
                    Clear Filters
                </a>


            </form>


            <!-- CATEGORY FILTER -->

            <div class="category-filter">

                <a
                    href="{{ route('shop.index', request()->except('category')) }}"
                    class="{{ !request('category') ? 'active' : '' }}"
                >
                    All Products
                </a>


                @foreach($categories as $category)

                    <a
                        href="{{ route('shop.index', array_merge(
                            request()->except('page'),
                            ['category' => $category->slug]
                        )) }}"
                        class="{{ request('category') === $category->slug ? 'active' : '' }}"
                    >
                        {{ $category->name }}
                    </a>

                @endforeach

            </div>


            <!-- RESULT HEADER -->

            <div class="result-header">


                <div>

                    <div class="eyebrow">
                        Explore our collection
                    </div>


                    <h2>

                        @if(request('category'))

                            {{ optional($categories->firstWhere('slug', request('category')))->name ?? 'Products' }}

                        @else

                            All products.

                        @endif

                    </h2>

                </div>


                <div class="result-count">

                    {{ $products->total() }} products

                </div>


            </div>


            <!-- PRODUCTS -->

            @if($products->count())


                <div class="product-grid">


                    @foreach($products as $product)


                        <div class="product-card">


                            @auth

                                @php
                                    $isWishlisted = $product->wishlists()
                                        ->where('user_id', Auth::id())
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
                                        aria-label="{{ $isWishlisted ? 'Remove ' : 'Add ' }}{{ $product->name }} {{ $isWishlisted ? 'from' : 'to' }} wishlist"
                                    >
                                        {{ $isWishlisted ? '♥' : '♡' }}
                                    </button>

                                </form>

                            @else

                                <a
                                    href="{{ route('login') }}"
                                    class="wishlist-form"
                                    aria-label="Login to use wishlist"
                                >
                                    <span class="wishlist" role="button">♡</span>
                                </a>

                            @endauth


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
                                        >

                                    @else

                                        <div
                                            style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#9a8782;font-size:12px;"
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


                                    <p class="product-description">
                                        {{ $product->description }}
                                    </p>


                                    <div class="stars">
                                        ★★★★★
                                    </div>


                                    <div class="price">

                                        LKR {{ number_format($product->price, 2) }}


                                        @if($product->old_price)

                                            <span class="old-price">
                                                LKR {{ number_format($product->old_price, 2) }}
                                            </span>

                                        @endif

                                    </div>


                                    <div class="stock">


                                        @if($product->stock > 0)

                                            {{ $product->stock }} in stock

                                        @else

                                            Out of stock

                                        @endif


                                    </div>


                                </div>

                            </a>


                        </div>


                    @endforeach


                </div>


                <!-- PAGINATION -->


                <div class="pagination-wrap">

                    {{ $products->links() }}

                </div>


            @else


                <!-- EMPTY STATE -->

                <div class="empty-state">


                    <h3>
                        No products found.
                    </h3>


                    <p>
                        Try another search or category.
                    </p>


                </div>


            @endif


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


                    @foreach($categories as $category)


                        <a
                            href="{{ route('shop.index', ['category' => $category->slug]) }}"
                        >
                            {{ $category->name }}
                        </a>


                    @endforeach


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
                    Made with ♥
                </span>


            </div>


        </div>

    </footer>


</body>

</html>
