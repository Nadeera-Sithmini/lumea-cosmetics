<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Product | Luméa Admin</title>

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

        button,
        input,
        textarea,
        select {
            font-family: inherit;
        }

        .container {
            width: min(1000px, 92%);
            margin: auto;
        }

        nav {
            background: var(--dark);
            color: white;
        }

        .nav-inner {
            min-height: 76px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .nav-links a:hover {
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

        .page-header {
            padding: 45px 0 28px;
        }

        .back-link {
            display: inline-block;
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 20px;
        }

        .back-link:hover {
            color: var(--rose);
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
            font-size: 44px;
            font-weight: 500;
        }

        .page-description {
            color: var(--muted);
            font-size: 13px;
            margin-top: 6px;
        }

        .form-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 70px;
        }

        .form-section {
            margin-bottom: 32px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .section-heading {
            font-family: "Playfair Display", serif;
            font-size: 23px;
            font-weight: 500;
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1e9e6;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        label {
            font-size: 12px;
            font-weight: 700;
        }

        .required {
            color: var(--danger);
        }

        input,
        textarea,
        select {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: white;
            color: var(--dark);
            outline: none;
            padding: 12px 14px;
            font-size: 13px;
        }

        input {
            height: 47px;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        select {
            height: 47px;
            cursor: pointer;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--rose);
        }

        .hint {
            color: var(--muted);
            font-size: 10px;
        }

        .field-error {
            color: var(--danger);
            font-size: 11px;
        }

        .error-box {
            background: #fff0f0;
            color: var(--danger);
            border: 1px solid #f0d0d0;
            border-radius: 10px;
            padding: 13px 16px;
            margin-bottom: 25px;
            font-size: 12px;
        }

        .error-box ul {
            padding-left: 18px;
            margin-top: 6px;
        }

        .current-image {
            width: 120px;
            height: 145px;
            object-fit: cover;
            border-radius: 12px;
            background: #f4ece8;
            border: 1px solid var(--border);
            margin-top: 10px;
        }

        .toggle-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .toggle-card {
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .toggle-card input {
            width: 18px;
            height: 18px;
            accent-color: var(--rose);
            cursor: pointer;
        }

        .toggle-card strong {
            display: block;
            font-size: 12px;
        }

        .toggle-card span {
            display: block;
            color: var(--muted);
            font-size: 10px;
            margin-top: 2px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding-top: 25px;
            border-top: 1px solid #f1e9e6;
        }

        .btn {
            min-height: 47px;
            padding: 0 20px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .btn-secondary {
            border: 1px solid var(--border);
            background: white;
            color: var(--muted);
        }

        .btn-secondary:hover {
            background: #fcf8f5;
        }

        .btn-primary {
            border: none;
            background: var(--dark);
            color: white;
        }

        .btn-primary:hover {
            background: var(--rose);
        }

        @media (max-width: 650px) {

            .form-grid,
            .toggle-row {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .form-card {
                padding: 22px;
            }

            .nav-links a:not(:last-child) {
                display: none;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
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


<section class="page-header">

    <div class="container">

        <a
            href="{{ route('admin.products.index') }}"
            class="back-link"
        >
            ← Back to Products
        </a>


        <div class="eyebrow">
            Store Management
        </div>


        <h1>
            Edit Product
        </h1>


        <p class="page-description">
            Update {{ $product->name }}.
        </p>

    </div>

</section>


<div class="container">


    @if($errors->any())

        <div class="error-box">

            <strong>
                Please fix the following:
            </strong>

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('admin.products.update', $product) }}"
        method="POST"
        class="form-card"
    >

        @csrf
        @method('PUT')


        <!-- BASIC -->

        <div class="form-section">

            <h2 class="section-heading">
                Basic Information
            </h2>


            <div class="form-grid">


                <div class="form-group">

                    <label for="name">
                        Product Name
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $product->name) }}"
                        required
                    >

                    @error('name')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="slug">
                        Slug
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="slug"
                        name="slug"
                        value="{{ old('slug', $product->slug) }}"
                        required
                    >

                    @error('slug')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>


                <!-- DYNAMIC CATEGORY -->

                <div class="form-group">

                    <label for="category_id">
                        Category
                        <span class="required">*</span>
                    </label>

                    <select
                        id="category_id"
                        name="category_id"
                        required
                    >

                        <option value="">
                            Select category
                        </option>

                        @foreach($categories as $category)

                            <option
                                value="{{ $category->id }}"
                                @selected(
                                    old(
                                        'category_id',
                                        $product->category_id
                                    ) == $category->id
                                )
                            >
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                    <span class="hint">
                        Categories are managed from Admin → Categories.
                    </span>

                    @error('category_id')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="stock">
                        Stock
                        <span class="required">*</span>
                    </label>

                    <input
                        type="number"
                        id="stock"
                        name="stock"
                        value="{{ old('stock', $product->stock) }}"
                        min="0"
                        required
                    >

                    @error('stock')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>


                <div class="form-group full">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                    >{{ old('description', $product->description) }}</textarea>

                    @error('description')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>

            </div>

        </div>


        <!-- PRICING -->

        <div class="form-section">

            <h2 class="section-heading">
                Pricing
            </h2>


            <div class="form-grid">


                <div class="form-group">

                    <label for="price">
                        Current Price (LKR)
                        <span class="required">*</span>
                    </label>

                    <input
                        type="number"
                        id="price"
                        name="price"
                        value="{{ old('price', $product->price) }}"
                        min="0"
                        step="0.01"
                        required
                    >

                    @error('price')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="old_price">
                        Old Price (LKR)
                    </label>

                    <input
                        type="number"
                        id="old_price"
                        name="old_price"
                        value="{{ old('old_price', $product->old_price) }}"
                        min="0"
                        step="0.01"
                    >

                    <span class="hint">
                        Optional. Use this to show a discount.
                    </span>

                    @error('old_price')
                        <span class="field-error">{{ $message }}</span>
                    @enderror

                </div>

            </div>

        </div>


        <!-- IMAGE -->

        <div class="form-section">

            <h2 class="section-heading">
                Product Image
            </h2>


            <div class="form-group">

                <label for="image">
                    Image URL
                </label>

                <input
                    type="url"
                    id="image"
                    name="image"
                    value="{{ old('image', $product->image) }}"
                    placeholder="https://example.com/product-image.jpg"
                >

                <span class="hint">
                    Paste a publicly accessible image URL.
                </span>

                @error('image')
                    <span class="field-error">{{ $message }}</span>
                @enderror


                @if($product->image)

                    <img
                        src="{{ $product->image }}"
                        alt="{{ $product->name }}"
                        class="current-image"
                    >

                @endif

            </div>

        </div>


        <!-- VISIBILITY -->

        <div class="form-section">

            <h2 class="section-heading">
                Store Visibility
            </h2>


            <div class="toggle-row">


                <label class="toggle-card">

                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        @checked(old('is_active', $product->is_active))
                    >

                    <div>

                        <strong>
                            Active Product
                        </strong>

                        <span>
                            Make this product visible in the store.
                        </span>

                    </div>

                </label>


                <label class="toggle-card">

                    <input
                        type="checkbox"
                        name="is_featured"
                        value="1"
                        @checked(old('is_featured', $product->is_featured))
                    >

                    <div>

                        <strong>
                            Featured / Bestseller
                        </strong>

                        <span>
                            Show this product in Best Sellers.
                        </span>

                    </div>

                </label>


            </div>

        </div>


        <!-- ACTIONS -->

        <div class="form-actions">

            <a
                href="{{ route('admin.products.index') }}"
                class="btn btn-secondary"
            >
                Cancel
            </a>


            <button
                type="submit"
                class="btn btn-primary"
            >
                Save Changes
            </button>

        </div>


    </form>


</div>

</body>
</html>
