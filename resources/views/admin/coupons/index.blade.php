<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Coupons | Luméa Admin</title>

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
            --warning: #b88942;
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
            font-size: 29px;
            letter-spacing: 3px;
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
            margin-bottom: 8px;
        }

        h1 {
            font-family: "Playfair Display", serif;
            font-size: 46px;
            font-weight: 500;
        }

        .header-text {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .add-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 45px;
            padding: 0 18px;
            background: var(--dark);
            color: white;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 700;
        }

        .add-btn:hover {
            background: var(--rose);
        }

        /* ALERT */

        .alert {
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .alert-success {
            background: #edf7ef;
            color: #2d6639;
            border: 1px solid #d4ecd8;
        }

        /* TABLE */

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 70px;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 15px 18px;
            background: #fcfaf8;
            border-bottom: 1px solid var(--border);
            text-align: left;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--muted);
            white-space: nowrap;
        }

        td {
            padding: 17px 18px;
            border-bottom: 1px solid #f1e9e6;
            font-size: 12px;
            vertical-align: middle;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .coupon-code {
            display: inline-flex;
            padding: 7px 10px;
            background: var(--soft-pink);
            color: var(--rose);
            border-radius: 7px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .type-text {
            text-transform: capitalize;
            font-weight: 600;
        }

        .value-text {
            font-weight: 700;
        }

        .muted {
            color: var(--muted);
            font-size: 11px;
        }

        .status {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 25px;
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

        .expired {
            background: #f8eee1;
            color: var(--warning);
        }

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .action-btn {
            min-height: 34px;
            padding: 0 11px;
            border-radius: 7px;
            border: 1px solid var(--border);
            background: white;
            font-size: 10px;
            font-weight: 700;
            cursor: pointer;
        }

        .action-btn:hover {
            background: var(--soft-pink);
        }

        .edit-btn {
            color: var(--rose);
        }

        .delete-btn {
            color: var(--danger);
            border-color: #efd2d2;
        }

        .delete-btn:hover {
            background: #fff0f0;
        }

        .empty {
            text-align: center;
            padding: 70px 20px;
        }

        .empty h2 {
            font-family: "Playfair Display", serif;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .empty p {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 22px;
        }

        .pagination {
            padding: 20px;
        }

        @media (max-width: 800px) {

            .header-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links a:nth-child(n+3) {
                display: none;
            }

        }

    </style>

</head>


<body>


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

            <a href="{{ route('admin.reviews.index') }}">
                Reviews
            </a>

            <a href="{{ route('home') }}">
                Store
            </a>

        </div>

    </div>

</nav>


<header class="page-header">

    <div class="container">

        <div class="header-row">

            <div>

                <div class="eyebrow">
                    Promotions
                </div>

                <h1>
                    Coupons
                </h1>

                <p class="header-text">
                    Create and manage discount codes for your customers.
                </p>

            </div>


            <a
                href="{{ route('admin.coupons.create') }}"
                class="add-btn"
            >
                + Create Coupon
            </a>

        </div>

    </div>

</header>


<main class="container">


    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    <div class="card">

        @if($coupons->count() > 0)

            <div class="table-wrap">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Code
                            </th>

                            <th>
                                Discount
                            </th>

                            <th>
                                Minimum Order
                            </th>

                            <th>
                                Usage
                            </th>

                            <th>
                                Validity
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($coupons as $coupon)

                            @php

                                $isExpired =
                                    $coupon->expires_at &&
                                    now()->gt($coupon->expires_at);

                                $isStarted =
                                    !$coupon->starts_at ||
                                    now()->gte($coupon->starts_at);

                            @endphp


                            <tr>


                                <!-- CODE -->

                                <td>

                                    <span class="coupon-code">
                                        {{ $coupon->code }}
                                    </span>

                                </td>


                                <!-- DISCOUNT -->

                                <td>

                                    <div class="value-text">

                                        @if($coupon->type === 'percentage')

                                            {{ number_format(
                                                (float) $coupon->value,
                                                0
                                            ) }}%

                                        @else

                                            LKR
                                            {{ number_format(
                                                (float) $coupon->value,
                                                2
                                            ) }}

                                        @endif

                                    </div>

                                    <div class="muted">
                                        {{ ucfirst($coupon->type) }}
                                    </div>

                                </td>


                                <!-- MINIMUM -->

                                <td>

                                    LKR
                                    {{ number_format(
                                        (float) $coupon->minimum_order,
                                        2
                                    ) }}

                                </td>


                                <!-- USAGE -->

                                <td>

                                    {{ $coupon->used_count }}

                                    @if($coupon->usage_limit !== null)

                                        / {{ $coupon->usage_limit }}

                                    @else

                                        / ∞

                                    @endif

                                </td>


                                <!-- VALIDITY -->

                                <td>

                                    @if($coupon->starts_at)

                                        <div>
                                            {{ $coupon->starts_at->format('d M Y') }}
                                        </div>

                                    @else

                                        <div>
                                            No start date
                                        </div>

                                    @endif


                                    <div class="muted">

                                        @if($coupon->expires_at)

                                            Until
                                            {{ $coupon->expires_at->format('d M Y') }}

                                        @else

                                            No expiry

                                        @endif

                                    </div>

                                </td>


                                <!-- STATUS -->

                                <td>

                                    @if(!$coupon->is_active)

                                        <span class="status inactive">
                                            Inactive
                                        </span>

                                    @elseif($isExpired)

                                        <span class="status expired">
                                            Expired
                                        </span>

                                    @elseif(!$isStarted)

                                        <span class="status expired">
                                            Not Started
                                        </span>

                                    @else

                                        <span class="status active">
                                            Active
                                        </span>

                                    @endif

                                </td>


                                <!-- ACTIONS -->

                                <td>

                                    <div class="actions">


                                        <a
                                            href="{{ route(
                                                'admin.coupons.edit',
                                                $coupon
                                            ) }}"
                                            class="action-btn edit-btn"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route(
                                                'admin.coupons.destroy',
                                                $coupon
                                            ) }}"
                                            method="POST"
                                            onsubmit="return confirm('Delete this coupon permanently?');"
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


            <div class="pagination">
                {{ $coupons->links() }}
            </div>

        @else

            <div class="empty">

                <h2>
                    No coupons yet
                </h2>

                <p>
                    Create your first discount coupon for customers.
                </p>

                <a
                    href="{{ route('admin.coupons.create') }}"
                    class="add-btn"
                >
                    + Create Coupon
                </a>

            </div>

        @endif

    </div>


</main>


</body>
</html>