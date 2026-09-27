<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>My Wishlist | Luméa Cosmetics</title>

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
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        .container {
            width: min(1150px, 92%);
            margin: auto;
        }

        /* NAV */

        nav {
            background: white;
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
        }

        .logo span {
            color: var(--rose);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
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
            padding: 60px 0 35px;
            text-align: center;
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
            color: var(--muted);
            font-size: 14px;
            margin-top: 9px;
        }

        /* MESSAGE */

        .message {
            margin-bottom: 25px;
            padding: 14px 17px;
            border-radius: 10px;
            font-size: 13px;
        }

        .success {
            background: #edf7ef;
            color: #2d6639;
            border: 1px solid #d4ecd8;
        }

        .error {
            background: #fff0f0;
            color: var(--danger);
            border: 1px solid #f2d1d1;
        }

        /* GRID */

        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            padding-bottom: 80px;
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .image-wrap {
            height: 300px;
            background: #f4ece8;
            position: relative;
            overflow: hidden;
        }

        .image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .4s;
        }

        .card:hover .image-wrap img {
            transform: scale(1.05);
        }

        .remove-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 35px;
            height: 35px;
            border: none;
            border-radius: 50%;
            background: rgba(255,255,255,.95);
            color: var(--danger);
            cursor: pointer;
            z-index: 2;
            font-size: 17px;
        }

        .remove-btn:hover {
            background: #fff0f0;
        }

        .product-info {
            padding: 18px;
        }

        .category {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 10px;
            font-weight: 700;
        }

        .name {
            font-family: "Playfair Display", serif;
            font-size: 21px;
            margin: 7px 0;
            line-height: 1.2;
        }

        .price {
            font-size: 14px;
            font-weight: 700;
        }

        .old-price {
            color: #aaa;
            text-decoration: line-through;
            margin-left: 8px;
            font-weight: 400;
        }

        .stock-text {
            font-size: 11px;
            color: var(--muted);
            margin-top: 7px;
        }

        .out-of-stock {
            color: var(--danger);
        }

        .action-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 9px;
            margin-top: 14px;
        }

        .view-btn,
        .cart-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 43px;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 700;
            transition: .25s;
        }

        .view-btn {
            background: var(--soft-pink);
            color: var(--dark);
        }

        .view-btn:hover {
            background: var(--pink, #dfb9ad);
        }

        .cart-btn {
            border: none;
            background: var(--dark);
            color: white;
            cursor: pointer;
        }

        .cart-btn:hover {
            background: var(--rose);
        }

        .cart-btn:disabled {
            background: #c7bfbb;
            cursor: not-allowed;
        }

        .cart-form {
            margin: 0;
        }

        /* EMPTY */

        .empty {
            text-align: center;
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 80px 20px;
            margin-bottom: 80px;
        }

        .empty-icon {
            font-size: 52px;
            margin-bottom: 15px;
        }

        .empty h2 {
            font-family: "Playfair Display", serif;
            font-size: 34px;
            margin-bottom: 9px;
        }

        .empty p {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 24px;
        }

        .shop-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 25px;
            border-radius: 10px;
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

        @media (max-width: 1000px) {
            .wishlist-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 750px) {
            .wishlist-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .action-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 520px) {
            .wishlist-grid {
                grid-template-columns: 1fr;
            }

            .nav-links a:not(:last-child) {
                display: none;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }

            .action-row {
                grid-template-columns: 1fr 1fr;
            }
        }

    </style>

</head>


<body>


<nav>

    <div class="container nav-inner">

        <a href="{{ route('home') }}" class="logo">
            LUMÉ<span>A</span>
        </a>

        <div class="nav-links">

            <a href="{{ route('home') }}">
                Home
            </a>

            <a href="{{ route('shop.index') }}">
                Shop
            </a>

            <a href="{{ route('cart.index') }}">
                Cart
            </a>

            <a href="{{ route('orders.index') }}">
                My Orders
            </a>

        </div>

    </div>

</nav>


<section class="page-header">

    <div class="container">

        <div class="eyebrow">
            Saved For Later
        </div>

        <h1>
            My Wishlist
        </h1>

        <p>
            Keep your favorite Luméa products close.
        </p>

    </div>

</section>


<div class="container">

    @if(session('success'))

        <div class="message success">
            {{ session('success') }}
        </div>

    @endif

    @if(session('error'))

        <div class="message error">
            {{ session('error') }}
        </div>

    @endif


    @if($wishlists->count() > 0)

        <div class="wishlist-grid">

            @foreach($wishlists as $wishlist)

                @php
                    $product = $wishlist->product;
                @endphp


                @if($product)

                    <article class="card">


                        <div class="image-wrap">

                            @if($product->image)

                                <img
                                    src="{{ $product->image }}"
                                    alt="{{ $product->name }}"
                                >

                            @else

                                <div style="
                                    height:100%;
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    color:#756b67;
                                ">
                                    No image
                                </div>

                            @endif


                            <form
                                action="{{ route('wishlist.remove', $wishlist) }}"
                                method="POST"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="remove-btn"
                                    title="Remove from wishlist"
                                    aria-label="Remove {{ $product->name }} from wishlist"
                                >
                                    ♥
                                </button>

                            </form>

                        </div>


                        <div class="product-info">

                            <div class="category">
                                {{ $product->category }}
                            </div>

                            <div class="name">
                                {{ $product->name }}
                            </div>

                            <div class="price">

                                LKR
                                {{ number_format((float) $product->price, 2) }}


                                @if($product->old_price)

                                    <span class="old-price">

                                        LKR
                                        {{ number_format(
                                            (float) $product->old_price,
                                            2
                                        ) }}

                                    </span>

                                @endif

                            </div>


                            @if($product->stock > 0)

                                <div class="stock-text">
                                    {{ $product->stock }} items available
                                </div>

                            @else

                                <div class="stock-text out-of-stock">
                                    Out of stock
                                </div>

                            @endif


                            <div class="action-row">

                                <a
                                    href="{{ route('product.show', $product->slug) }}"
                                    class="view-btn"
                                >
                                    View Product
                                </a>


                                @if($product->stock > 0)

                                    <form
                                        action="{{ route('cart.add') }}"
                                        method="POST"
                                        class="cart-form"
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
                                            value="1"
                                        >

                                        <button
                                            type="submit"
                                            class="cart-btn"
                                        >
                                            Add to Cart
                                        </button>

                                    </form>

                                @else

                                    <button
                                        type="button"
                                        class="cart-btn"
                                        disabled
                                    >
                                        Out of Stock
                                    </button>

                                @endif

                            </div>

                        </div>

                    </article>

                @endif

            @endforeach

        </div>

    @else

        <div class="empty">

            <div class="empty-icon">
                ♡
            </div>

            <h2>
                Your wishlist is empty
            </h2>

            <p>
                Save products you love and come back to them anytime.
            </p>

            <a
                href="{{ route('shop.index') }}"
                class="shop-btn"
            >
                Explore Products
            </a>

        </div>

    @endif

</div>


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
