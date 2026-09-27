<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Category — Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

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

        input,
        textarea,
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

        .card {
            max-width: 850px;

            background: white;

            border: 1px solid #eaded9;
            border-radius: 18px;

            padding: 26px;
        }

        .grid {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;

            font-size: 12px;
            font-weight: 700;

            color: #665456;

            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;

            border: 1px solid #dfd0cb;

            border-radius: 11px;

            padding: 12px 13px;

            font-size: 14px;

            background: white;
            color: #2f2527;

            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #b8897e;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .hint {
            font-size: 11px;
            color: #9a8782;
            margin-top: 6px;
        }

        .checkbox-row {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .checkbox-row input {
            width: auto;
        }

        .checkbox-row label {
            margin: 0;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 24px;
        }

        .btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 12px 18px;

            border-radius: 11px;

            border: 1px solid #2f2527;

            background: #2f2527;
            color: white;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;
        }

        .btn-light {
            background: #fffaf8;
            color: #684a45;

            border-color: #eaded9;
        }

        .error-box {
            max-width: 850px;

            margin-bottom: 20px;

            padding: 14px 16px;

            border-radius: 12px;

            background: #fff0ee;
            color: #9c4238;

            border: 1px solid #f1cbc5;

            font-size: 14px;
        }

        .error-box ul {
            margin: 7px 0 0 18px;
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

            .main {
                padding: 20px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

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

            <div class="eyebrow">
                Store Management
            </div>

            <h1>
                Edit Category
            </h1>

            <div class="subtext">
                Update {{ $category->name }} details.
            </div>

        </div>


        @if($errors->any())

            <div class="error-box">

                <strong>
                    Please fix these errors:
                </strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="card">

            <form
                method="POST"
                action="{{ route('admin.categories.update', $category) }}"
            >

                @csrf

                @method('PUT')


                <div class="grid">

                    <div>

                        <label for="name">
                            Category Name *
                        </label>

                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name', $category->name) }}"
                            required
                        >

                    </div>


                    <div>

                        <label for="slug">
                            Slug
                        </label>

                        <input
                            id="slug"
                            name="slug"
                            type="text"
                            value="{{ old('slug', $category->slug) }}"
                        >

                    </div>


                    <div class="full">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                        >{{ old('description', $category->description) }}</textarea>

                    </div>


                    <div class="full">

                        <label for="image">
                            Image URL
                        </label>

                        <input
                            id="image"
                            name="image"
                            type="url"
                            value="{{ old('image', $category->image) }}"
                        >

                    </div>


                    <div class="full checkbox-row">

                        <input
                            id="is_active"
                            name="is_active"
                            type="checkbox"
                            value="1"
                            {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                        >

                        <label for="is_active">
                            Active category
                        </label>

                    </div>

                </div>


                <div class="actions">

                    <button
                        type="submit"
                        class="btn"
                    >
                        Update Category
                    </button>

                    <a
                        href="{{ route('admin.categories.index') }}"
                        class="btn btn-light"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </main>

</div>

</body>
</html>