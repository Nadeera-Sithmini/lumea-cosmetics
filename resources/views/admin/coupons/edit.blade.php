<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Coupon | Luméa Admin</title>

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
        select {
            font-family: inherit;
        }

        .container {
            width: min(900px, 92%);
            margin: auto;
        }

        nav {
            background: white;
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: "Playfair Display", serif;
            font-size: 29px;
            letter-spacing: 3px;
        }

        .logo span {
            color: var(--rose);
        }

        .back-link {
            color: var(--muted);
            font-size: 13px;
        }

        .back-link:hover {
            color: var(--rose);
        }

        .page-header {
            padding: 55px 0 30px;
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

        .page-header p {
            color: var(--muted);
            font-size: 13px;
            margin-top: 7px;
        }

        .form-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 70px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 4px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .hint {
            color: var(--muted);
            font-size: 10px;
            margin-top: 5px;
        }

        input,
        select {
            width: 100%;
            min-height: 46px;
            padding: 0 13px;
            border: 1px solid var(--border);
            border-radius: 9px;
            outline: none;
            background: white;
            color: var(--dark);
            font-size: 13px;
        }

        input:focus,
        select:focus {
            border-color: var(--rose);
        }

        input[readonly] {
            background: #faf7f5;
            color: var(--muted);
        }

        .error-box {
            background: #fff0f0;
            color: var(--danger);
            border: 1px solid #f0cccc;
            border-radius: 10px;
            padding: 14px 17px;
            margin-bottom: 22px;
            font-size: 13px;
        }

        .error-box ul {
            margin-left: 18px;
            margin-top: 6px;
        }

        .toggle-box {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 46px;
            padding: 0 13px;
            border: 1px solid var(--border);
            border-radius: 9px;
        }

        .toggle-box input {
            width: auto;
            min-height: auto;
        }

        .toggle-box span {
            font-size: 13px;
        }

        .usage-info {
            padding: 15px;
            background: var(--soft-pink);
            border-radius: 10px;
            font-size: 12px;
            color: #6d514b;
        }

        .form-actions {
            margin-top: 30px;
            padding-top: 22px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            min-height: 46px;
            padding: 0 18px;
            border-radius: 9px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-cancel {
            border: 1px solid var(--border);
            background: white;
        }

        .btn-cancel:hover {
            background: var(--soft-pink);
        }

        .btn-save {
            border: none;
            background: var(--dark);
            color: white;
        }

        .btn-save:hover {
            background: var(--rose);
        }

        @media (max-width: 650px) {

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .form-card {
                padding: 22px;
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

        <a
            href="{{ route('admin.coupons.index') }}"
            class="back-link"
        >
            ← Back to Coupons
        </a>

    </div>

</nav>


<header class="page-header">

    <div class="container">

        <div class="eyebrow">
            Promotions
        </div>

        <h1>
            Edit Coupon
        </h1>

        <p>
            Update this discount coupon.
        </p>

    </div>

</header>


<main class="container">


    @if($errors->any())

        <div class="error-box">

            <strong>
                Please fix the following:
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


    <form
        action="{{ route('admin.coupons.update', $coupon) }}"
        method="POST"
        class="form-card"
    >

        @csrf

        @method('PUT')


        <div class="form-grid">


            <!-- CODE -->

            <div class="form-group">

                <label for="code">
                    Coupon Code
                </label>

                <input
                    type="text"
                    id="code"
                    name="code"
                    value="{{ old('code', $coupon->code) }}"
                    style="text-transform: uppercase;"
                    required
                >

            </div>


            <!-- TYPE -->

            <div class="form-group">

                <label for="type">
                    Discount Type
                </label>

                <select
                    id="type"
                    name="type"
                    required
                >

                    <option
                        value="percentage"
                        {{ old('type', $coupon->type) === 'percentage' ? 'selected' : '' }}
                    >
                        Percentage (%)
                    </option>

                    <option
                        value="fixed"
                        {{ old('type', $coupon->type) === 'fixed' ? 'selected' : '' }}
                    >
                        Fixed Amount (LKR)
                    </option>

                </select>

            </div>


            <!-- VALUE -->

            <div class="form-group">

                <label for="value">
                    Discount Value
                </label>

                <input
                    type="number"
                    id="value"
                    name="value"
                    value="{{ old('value', $coupon->value) }}"
                    min="0.01"
                    step="0.01"
                    required
                >

            </div>


            <!-- MINIMUM ORDER -->

            <div class="form-group">

                <label for="minimum_order">
                    Minimum Order
                </label>

                <input
                    type="number"
                    id="minimum_order"
                    name="minimum_order"
                    value="{{ old('minimum_order', $coupon->minimum_order) }}"
                    min="0"
                    step="0.01"
                    required
                >

            </div>


            <!-- MAXIMUM DISCOUNT -->

            <div class="form-group">

                <label for="maximum_discount">
                    Maximum Discount
                </label>

                <input
                    type="number"
                    id="maximum_discount"
                    name="maximum_discount"
                    value="{{ old('maximum_discount', $coupon->maximum_discount) }}"
                    min="0"
                    step="0.01"
                >

                <div class="hint">
                    Useful for percentage coupons
                </div>

            </div>


            <!-- USAGE LIMIT -->

            <div class="form-group">

                <label for="usage_limit">
                    Usage Limit
                </label>

                <input
                    type="number"
                    id="usage_limit"
                    name="usage_limit"
                    value="{{ old('usage_limit', $coupon->usage_limit) }}"
                    min="1"
                    step="1"
                >

                <div class="hint">
                    Leave empty for unlimited uses
                </div>

            </div>


            <!-- START -->

            <div class="form-group">

                <label for="starts_at">
                    Starts At
                </label>

                <input
                    type="datetime-local"
                    id="starts_at"
                    name="starts_at"
                    value="{{ old(
                        'starts_at',
                        $coupon->starts_at
                            ? $coupon->starts_at->format('Y-m-d\TH:i')
                            : ''
                    ) }}"
                >

            </div>


            <!-- EXPIRY -->

            <div class="form-group">

                <label for="expires_at">
                    Expires At
                </label>

                <input
                    type="datetime-local"
                    id="expires_at"
                    name="expires_at"
                    value="{{ old(
                        'expires_at',
                        $coupon->expires_at
                            ? $coupon->expires_at->format('Y-m-d\TH:i')
                            : ''
                    ) }}"
                >

            </div>


            <!-- STATUS -->

            <div class="form-group">

                <label>
                    Status
                </label>

                <div class="toggle-box">

                    <input
                        type="checkbox"
                        id="is_active"
                        name="is_active"
                        value="1"
                        {{ old('is_active', $coupon->is_active) ? 'checked' : '' }}
                    >

                    <span>
                        Coupon is active
                    </span>

                </div>

            </div>


            <!-- USAGE INFO -->

            <div class="form-group">

                <label>
                    Usage Information
                </label>

                <div class="usage-info">

                    Used:
                    <strong>
                        {{ $coupon->used_count }}
                    </strong>

                    times

                    @if($coupon->usage_limit !== null)

                        out of
                        <strong>
                            {{ $coupon->usage_limit }}
                        </strong>

                    @else

                        — Unlimited usage

                    @endif

                </div>

            </div>


        </div>


        <div class="form-actions">

            <a
                href="{{ route('admin.coupons.index') }}"
                class="btn btn-cancel"
            >
                Cancel
            </a>


            <button
                type="submit"
                class="btn btn-save"
            >
                Update Coupon
            </button>

        </div>


    </form>

</main>


</body>
</html>