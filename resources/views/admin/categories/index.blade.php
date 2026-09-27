<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Categories — Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #f8f3f0;
            color: #2f2527;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        .topbar {
            background: #2f2527;
            color: white;
            padding: 18px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
        }

        .brand span {
            color: #e8b8ad;
        }

        .layout {
            display: flex;
            min-height: calc(100vh - 74px);
        }

        .sidebar {
            width: 245px;
            background: #fffaf8;
            border-right: 1px solid #eaded9;
            padding: 28px 16px;
        }

        .nav-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: #9c8580;
            padding: 0 12px 10px;
        }

        .nav-link {
            display: block;
            padding: 12px 13px;
            margin-bottom: 6px;
            border-radius: 12px;
            color: #5a4b4d;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-link:hover {
            background: #f4e6e1;
        }

        .nav-link.active {
            background: #edd5cf;
            color: #6b3d35;
        }

        .main {
            flex: 1;
            padding: 34px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 24px;
        }

        .eyebrow {
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #a28983;
            font-weight: 700;
            margin-bottom: 7px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            margin-bottom: 7px;
        }

        .subtext {
            color: #806f6c;
            font-size: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 17px;
            border-radius: 11px;
            border: 1px solid #2f2527;
            background: #2f2527;
            color: white;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn:hover {
            background: #6b3d35;
        }

        .card {
            background: white;
            border: 1px solid #eaded9;
            border-radius: 18px;
            padding: 22px;
        }

        .flash {
            border-radius: 12px;
            padding: 13px 16px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .flash-success {
            background: #e9f7ed;
            color: #27633a;
            border: 1px solid #c7e8d0;
        }

        .flash-error {
            background: #fff0ee;
            color: #9c4238;
            border: 1px solid #f1cbc5;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 13px 10px;
            border-bottom: 1px solid #f0e8e4;
            font-size: 13px;
            vertical-align: middle;
        }

        th {
            color: #927f7a;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .image-box {
            width: 48px;
            height: 48px;
            border-radius: 11px;
            object-fit: cover;
            background: #f3e6e1;
            border: 1px solid #eaded9;
        }

        .category-name {
            font-weight: 700;
        }

        .category-slug {
            margin-top: 3px;
            color: #9a8782;
            font-size: 12px;
        }

        .status {
            display: inline-flex;
            padding: 6px 9px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
        }

        .status-active {
            background: #e9f7ed;
            color: #2e7041;
        }

        .status-inactive {
            background: #f3e7e5;
            color: #8a5d56;
        }

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .action {
            border: 1px solid #eaded9;
            background: #fffaf8;
            border-radius: 9px;
            padding: 8px 10px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .action:hover {
            background: #f4e6e1;
        }

        .delete {
            color: #9b463d;
        }

        .empty {
            text-align: center;
            color: #9b8783;
            padding: 35px 0;
        }

        .pagination {
            margin-top: 18px;
        }

        @media (max-width: 980px) {
            .sidebar {
                width: 205px;
            }

            .main {
                padding: 24px;
            }
        }

        @media (max-width: 760px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-right: 0;
                border-bottom: 1px solid #eaded9;
            }

            .header {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="topbar">
        <div class="brand">
            Luméa <span>Cosmetics</span>
        </div>

        <div style="font-size:13px; opacity:.8;">
            Admin Panel
        </div>
    </div>

    <div class="layout">

        <aside class="sidebar">

            <div class="nav-title">
                Management
            </div>

            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                Dashboard
            </a>

            <a href="{{ route('admin.products.index') }}" class="nav-link">
                Products
            </a>

            <a href="{{ route('admin.categories.index') }}" class="nav-link active">
                Categories
            </a>

            <a href="{{ route('admin.orders.index') }}" class="nav-link">
                Orders
            </a>

            <a href="{{ route('admin.customers.index') }}" class="nav-link">
                Customers
            </a>

            <a href="{{ route('admin.reviews.index') }}" class="nav-link">
                Reviews
            </a>

            <a href="{{ route('admin.coupons.index') }}" class="nav-link">
                Coupons
            </a>

        </aside>

        <main class="main">

            <div class="header">

                <div>
                    <div class="eyebrow">
                        Store Management
                    </div>

                    <h1>
                        Categories
                    </h1>

                    <div class="subtext">
                        Create and manage your product categories.
                    </div>
                </div>

                <a
                    href="{{ route('admin.categories.create') }}"
                    class="btn"
                >
                    + Add Category
                </a>

            </div>

            @if(session('success'))
                <div class="flash flash-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="flash flash-error">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="flash flash-error">

                    <strong>
                        Please fix the following:
                    </strong>

                    <ul style="margin:7px 0 0 18px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>
            @endif

            <div class="card">

                @if($categories->count())

                    <div class="table-wrap">

                        <table>

                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Products</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($categories as $category)

                                    <tr>

                                        <td>

                                            @if($category->image)

                                                <img
                                                    src="{{ $category->image }}"
                                                    alt="{{ $category->name }}"
                                                    class="image-box"
                                                >

                                            @else

                                                <div class="image-box"></div>

                                            @endif

                                        </td>

                                        <td>

                                            <div class="category-name">
                                                {{ $category->name }}
                                            </div>

                                            <div class="category-slug">
                                                {{ $category->slug }}
                                            </div>

                                        </td>

                                        <td>
                                            {{ $category->products()->count() }}
                                        </td>

                                        <td>

                                            @if($category->is_active)

                                                <span class="status status-active">
                                                    Active
                                                </span>

                                            @else

                                                <span class="status status-inactive">
                                                    Inactive
                                                </span>

                                            @endif

                                        </td>

                                        <td>
                                            {{ $category->created_at?->format('M d, Y') }}
                                        </td>

                                        <td>

                                            <div class="actions">

                                                <a
                                                    href="{{ route('admin.categories.edit', $category) }}"
                                                    class="action"
                                                >
                                                    Edit
                                                </a>

                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.categories.destroy', $category) }}"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?');"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="action delete"
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
                        {{ $categories->links() }}
                    </div>

                @else

                    <div class="empty">

                        No categories yet.

                        <br><br>

                        Create your first category using
                        <strong>+ Add Category</strong>.

                    </div>

                @endif

            </div>

        </main>

    </div>

</div>

</body>
</html>
