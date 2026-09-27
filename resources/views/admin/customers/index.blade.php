<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Customers | Luméa Admin</title>

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
            background: rgba(255,255,255,.08);
            color: white;
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
            margin-bottom: 8px;
        }

        h1 {
            font-family: "Playfair Display", serif;
            font-size: 45px;
            font-weight: 500;
        }

        .description {
            color: var(--muted);
            font-size: 13px;
            margin-top: 6px;
        }

        .count-badge {
            background: var(--soft-pink);
            color: var(--rose);
            border-radius: 30px;
            padding: 8px 13px;
            font-size: 10px;
            font-weight: 700;
        }

        /* BOX */

        .customers-box {
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
            min-width: 800px;
            border-collapse: collapse;
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
            padding: 17px 18px;
            border-top: 1px solid #f1e9e6;
            font-size: 12px;
            vertical-align: middle;
        }

        .customer-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--soft-pink);
            color: var(--rose);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
        }

        .customer-name {
            font-weight: 700;
            font-size: 13px;
        }

        .customer-email {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        .order-count {
            font-weight: 700;
        }

        .joined {
            color: var(--muted);
            font-size: 11px;
        }

        .view-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: white;
            font-size: 10px;
            font-weight: 700;
        }

        .view-btn:hover {
            background: var(--dark);
            color: white;
            border-color: var(--dark);
        }

        /* EMPTY */

        .empty {
            text-align: center;
            padding: 75px 20px;
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
        }

        .pagination-wrap {
            padding: 20px;
            border-top: 1px solid #f1e9e6;
        }

        @media (max-width: 700px) {

            .header-row {
                flex-direction: column;
                align-items: flex-start;
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

            <a href="{{ route('admin.products.index') }}">
                Products
            </a>

            <a href="{{ route('admin.orders.index') }}">
                Orders
            </a>

            <a
                href="{{ route('admin.customers.index') }}"
                class="active"
            >
                Customers
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
                    Customer Management
                </div>

                <h1>
                    Customers
                </h1>

                <p class="description">
                    View registered customers and their order activity.
                </p>

            </div>


            <div class="count-badge">
                {{ $customers->total() }} CUSTOMERS
            </div>


        </div>

    </div>

</section>


<!-- CONTENT -->

<div class="container">


    <div class="customers-box">


        @if($customers->count() > 0)


            <div class="table-scroll">

                <table>


                    <thead>

                        <tr>

                            <th>
                                Customer
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Orders
                            </th>

                            <th>
                                Joined
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @foreach($customers as $customer)


                            <tr>


                                <td>

                                    <div class="customer-cell">


                                        <div class="avatar">

                                            {{ strtoupper(
                                                substr(
                                                    $customer->name,
                                                    0,
                                                    1
                                                )
                                            ) }}

                                        </div>


                                        <div>

                                            <div class="customer-name">
                                                {{ $customer->name }}
                                            </div>

                                            <div class="customer-email">
                                                #USER-{{ $customer->id }}
                                            </div>

                                        </div>


                                    </div>

                                </td>


                                <td>

                                    <span class="customer-email">
                                        {{ $customer->email }}
                                    </span>

                                </td>


                                <td>

                                    <span class="order-count">

                                        {{ $customer->orders_count }}

                                        order(s)

                                    </span>

                                </td>


                                <td>

                                    <span class="joined">

                                        {{ $customer->created_at->format(
                                            'd M Y'
                                        ) }}

                                    </span>

                                </td>


                                <td>

                                    <a
                                        href="{{ route(
                                            'admin.customers.show',
                                            $customer
                                        ) }}"
                                        class="view-btn"
                                    >
                                        View Customer →
                                    </a>

                                </td>


                            </tr>


                        @endforeach


                    </tbody>


                </table>

            </div>


            <div class="pagination-wrap">

                {{ $customers->links() }}

            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    👥
                </div>

                <h2>
                    No Customers Yet
                </h2>

                <p>
                    Registered customer accounts will appear here.
                </p>

            </div>


        @endif


    </div>


</div>


</body>
</html>