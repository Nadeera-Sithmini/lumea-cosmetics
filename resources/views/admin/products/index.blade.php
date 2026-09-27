<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Products | Luméa Admin</title>

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
            --danger: #b95d5d;
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
            align-items: center;
            justify-content: space-between;
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
            color: white;
            background: rgba(255,255,255,.08);
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
            margin-bottom: 9px;
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

        .add-btn {
            min-height: 46px;
            padding: 0 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--dark);
            color: white;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            transition: .2s;
        }

        .add-btn:hover {
            background: var(--rose);
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

        .products-box {
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
            border-collapse: collapse;
            min-width: 900px;
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
            padding: 16px 18px;
            border-top: 1px solid #f1e9e6;
            font-size: 12px;
            vertical-align: middle;
        }

        .product-cell {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .product-image {
            width: 58px;
            height: 68px;
            object-fit: cover;
            border-radius: 10px;
            background: #f4ece8;
            flex-shrink: 0;
        }

        .product-name {
            font-family: "Playfair Display", serif;
            font-size: 17px;
            line-height: 1.15;
            margin-bottom: 4px;
        }

        .product-slug {
            font-size: 10px;
            color: var(--muted);
        }

        .category {
            color: var(--rose);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .price {
            font-weight: 700;
        }

        .old-price {
            display: block;
            color: #aaa;
            font-size: 10px;
            text-decoration: line-through;
            margin-top: 2px;
        }

        .stock {
            font-weight: 700;
        }

        .stock.low {
            color: var(--danger);
        }

        .stock.good {
            color: var(--success);
        }

        .stock.out {
            color: var(--danger);
        }

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

        .active {
            background: #edf7ef;
            color: var(--success);
        }

        .inactive {
            background: #fff0f0;
            color: var(--danger);
        }

        .featured {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 25px;
            padding: 0 8px;
            background: var(--soft-pink);
            color: var(--rose);
            border-radius: 20px;
            font-size: 9px;
            font-weight: 700;
        }

        /* ACTIONS */

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-btn {
            min-height: 32px;
            padding: 0 9px;
            border-radius: 7px;
            border: 1px solid var(--border);
            background: white;
            font-size: 10px;
            font-weight: 700;
            cursor: pointer;
        }

        .edit-btn {
            color: #5f5350;
        }

        .edit-btn:hover {
            background: var(--soft-pink);
        }

        .delete-btn {
            color: var(--danger);
        }

        .delete-btn:hover {
            background: #fff0f0;
        }

        /* PAGINATION */

        .pagination-wrap {
            padding: 20px;
            border-top: 1px solid #f1e9e6;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination nav {
            background: transparent;
            color: inherit;
            min-height: auto;
        }

        /* EMPTY */

        .empty {
            text-align: center;
            padding: 70px 20px;
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
            margin-bottom: 20px;
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .header-row {
                align-items: flex-start;
                flex-direction: column;
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

            <a
                href="{{ route('admin.products.index') }}"
                class="active"
            >
                Products
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
                    Products
                </h1>

                <p class="page-description">
                    Manage your Luméa cosmetics catalog.
                </p>

            </div>


            <a
                href="{{ route('admin.products.create') }}"
                class="add-btn"
            >
                + Add Product
            </a>


        </div>

    </div>

</section>


<div class="container">


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="products-box">


        @if($products->count() > 0)


            <div class="table-scroll">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Product
                            </th>

                            <th>
                                Category
                            </th>

                            <th>
                                Price
                            </th>

                            <th>
                                Stock
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Featured
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @foreach($products as $product)


                            <tr>


                                <!-- PRODUCT -->

                                <td>

                                    <div class="product-cell">


                                        @if($product->image)

                                            <img
                                                src="{{ $product->image }}"
                                                alt="{{ $product->name }}"
                                                class="product-image"
                                            >

                                        @else

                                            <div class="product-image"></div>

                                        @endif


                                        <div>

                                            <div class="product-name">
                                                {{ $product->name }}
                                            </div>

                                            <div class="product-slug">
                                                {{ $product->slug }}
                                            </div>

                                        </div>


                                    </div>

                                </td>


                                <!-- CATEGORY -->

                                <td>

                                    <span class="category">
                                        {{ $product->category }}
                                    </span>

                                </td>


                                <!-- PRICE -->

                                <td>

                                    <span class="price">

                                        LKR
                                        {{ number_format(
                                            (float) $product->price,
                                            2
                                        ) }}

                                    </span>


                                    @if($product->old_price)

                                        <span class="old-price">

                                            LKR
                                            {{ number_format(
                                                (float) $product->old_price,
                                                2
                                            ) }}

                                        </span>

                                    @endif

                                </td>


                                <!-- STOCK -->

                                <td>

                                    @if($product->stock == 0)

                                        <span class="stock out">
                                            Out of stock
                                        </span>

                                    @elseif($product->stock <= 5)

                                        <span class="stock low">
                                            {{ $product->stock }} left
                                        </span>

                                    @else

                                        <span class="stock good">
                                            {{ $product->stock }}
                                        </span>

                                    @endif

                                </td>


                                <!-- STATUS -->

                                <td>

                                    @if($product->is_active)

                                        <span class="status active">
                                            Active
                                        </span>

                                    @else

                                        <span class="status inactive">
                                            Inactive
                                        </span>

                                    @endif

                                </td>


                                <!-- FEATURED -->

                                <td>

                                    @if($product->is_featured)

                                        <span class="featured">
                                            Bestseller
                                        </span>

                                    @else

                                        <span style="color:#aaa;font-size:11px;">
                                            —
                                        </span>

                                    @endif

                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="actions">


                                        <a
                                            href="{{ route(
                                                'admin.products.edit',
                                                $product
                                            ) }}"
                                            class="action-btn edit-btn"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route(
                                                'admin.products.destroy',
                                                $product
                                            ) }}"
                                            method="POST"
                                            onsubmit="return confirm(
                                                'Are you sure you want to delete this product?'
                                            );"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="action-btn delete-btn"
                                            >
                                                Delete
                                            </button>

                                        </form>


                                    </div>

                                </td>


                            </tr>


                        @endforeach


                    </tbody>


                </table>

            </div>


            <div class="pagination-wrap">

                {{ $products->links() }}

            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    🛍️
                </div>

                <h2>
                    No Products Yet
                </h2>

                <p>
                    Add your first Luméa product to the catalog.
                </p>

                <a
                    href="{{ route('admin.products.create') }}"
                    class="add-btn"
                >
                    + Add Product
                </a>

            </div>


        @endif


    </div>


</div>


</body>
</html>