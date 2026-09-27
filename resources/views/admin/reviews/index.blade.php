<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Reviews | Luméa Admin</title>

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
            --green: #5d8a65;
            --red: #b95d5d;
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
            gap: 25px;
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
            align-items: center;
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
            padding: 55px 0 35px;
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 10px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .page-header-row {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
        }

        .page-header h1 {
            font-family: "Playfair Display", serif;
            font-size: 48px;
            font-weight: 500;
        }

        .page-header p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .back-btn {
            border: 1px solid var(--border);
            background: white;
            padding: 11px 17px;
            font-size: 12px;
            font-weight: 600;
        }

        .back-btn:hover {
            background: var(--dark);
            color: white;
        }

        /* ALERT */

        .alert {
            margin-bottom: 25px;
            padding: 14px 18px;
            background: #edf7ef;
            color: #2d6639;
            border: 1px solid #d4ecd8;
            border-radius: 9px;
            font-size: 13px;
        }

        /* TABLE */

        .reviews-box {
            background: white;
            border: 1px solid var(--border);
            margin-bottom: 70px;
            overflow: hidden;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 16px 18px;
            background: #fcfaf8;
            border-bottom: 1px solid var(--border);
            text-align: left;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            color: var(--muted);
            white-space: nowrap;
        }

        td {
            padding: 18px;
            border-bottom: 1px solid var(--border);
            vertical-align: top;
            font-size: 13px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .product-name {
            font-family: "Playfair Display", serif;
            font-size: 17px;
            margin-bottom: 3px;
        }

        .category {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--rose);
        }

        .customer-name {
            font-weight: 600;
            margin-bottom: 3px;
        }

        .customer-email {
            font-size: 11px;
            color: var(--muted);
        }

        .stars {
            color: #d49a43;
            letter-spacing: 2px;
            white-space: nowrap;
            margin-bottom: 7px;
        }

        .comment {
            max-width: 350px;
            color: var(--muted);
            line-height: 1.55;
        }

        .status {
            display: inline-flex;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .8px;
        }

        .approved {
            background: #edf7ef;
            color: var(--green);
        }

        .hidden-status {
            background: #fff0f0;
            color: var(--red);
        }

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .action-btn {
            border: 1px solid var(--border);
            background: white;
            min-height: 35px;
            padding: 0 11px;
            font-size: 10px;
            font-weight: 700;
            cursor: pointer;
        }

        .action-btn:hover {
            background: var(--soft-pink);
        }

        .delete-btn {
            border-color: #f0d1d1;
            color: var(--red);
        }

        .delete-btn:hover {
            background: #fff0f0;
        }

        .empty {
            padding: 70px 20px;
            text-align: center;
        }

        .empty h2 {
            font-family: "Playfair Display", serif;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .empty p {
            color: var(--muted);
            font-size: 13px;
        }

        .pagination {
            padding: 25px;
        }

        @media (max-width: 850px) {

            .nav-links a:nth-child(2),
            .nav-links a:nth-child(3) {
                display: none;
            }

            .page-header-row {
                align-items: start;
                flex-direction: column;
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

            <a href="{{ route('admin.customers.index') }}">
                Customers
            </a>

            <a href="{{ route('home') }}">
                Store
            </a>

        </div>

    </div>

</nav>


<header class="page-header">

    <div class="container">

        <div class="page-header-row">

            <div>

                <div class="eyebrow">
                    Customer Feedback
                </div>

                <h1>
                    Product Reviews
                </h1>

                <p>
                    Manage customer ratings and reviews.
                </p>

            </div>


            <a
                href="{{ route('admin.dashboard') }}"
                class="back-btn"
            >
                ← Back to Dashboard
            </a>

        </div>

    </div>

</header>


<main class="container">

    @if(session('success'))

        <div class="alert">
            {{ session('success') }}
        </div>

    @endif


    <div class="reviews-box">

        @if($reviews->count() > 0)

            <div class="table-wrap">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Product
                            </th>

                            <th>
                                Customer
                            </th>

                            <th>
                                Rating & Review
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

                        @foreach($reviews as $review)

                            <tr>

                                <td>

                                    @if($review->product)

                                        <div class="product-name">
                                            {{ $review->product->name }}
                                        </div>

                                        <div class="category">
                                            {{ $review->product->category }}
                                        </div>

                                    @else

                                        <div class="product-name">
                                            Product unavailable
                                        </div>

                                    @endif

                                </td>


                                <td>

                                    <div class="customer-name">
                                        {{ $review->user->name ?? 'Unknown Customer' }}
                                    </div>

                                    <div class="customer-email">
                                        {{ $review->user->email ?? '—' }}
                                    </div>

                                </td>


                                <td>

                                    <div class="stars">

                                        @for($i = 1; $i <= 5; $i++)

                                            {{ $i <= $review->rating ? '★' : '☆' }}

                                        @endfor

                                    </div>


                                    <div class="comment">

                                        {{ $review->comment ?: 'No written comment.' }}

                                    </div>

                                </td>


                                <td>

                                    @if($review->is_approved)

                                        <span class="status approved">
                                            Approved
                                        </span>

                                    @else

                                        <span class="status hidden-status">
                                            Hidden
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <div class="actions">


                                        <form
                                            action="{{ route(
                                                'admin.reviews.toggleApproval',
                                                $review
                                            ) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('PATCH')

                                            <button
                                                type="submit"
                                                class="action-btn"
                                            >

                                                {{ $review->is_approved
                                                    ? 'Unapprove'
                                                    : 'Approve'
                                                }}

                                            </button>

                                        </form>


                                        <form
                                            action="{{ route(
                                                'admin.reviews.destroy',
                                                $review
                                            ) }}"
                                            method="POST"
                                            onsubmit="return confirm('Delete this review permanently?');"
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
                {{ $reviews->links() }}
            </div>

        @else

            <div class="empty">

                <h2>
                    No reviews yet
                </h2>

                <p>
                    Customer reviews will appear here once they are submitted.
                </p>

            </div>

        @endif

    </div>

</main>


</body>
</html>