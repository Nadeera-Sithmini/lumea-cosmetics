<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | Luméa Cosmetics</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
            min-height: 100vh;
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--dark);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .page {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        /* LEFT */

        .visual {
            background:
                linear-gradient(rgba(48, 40, 38, .18), rgba(48, 40, 38, .18)),
                url('https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?auto=format&fit=crop&w=1200&q=85')
                center / cover;

            min-height: 100vh;
            display: flex;
            align-items: flex-end;
            padding: 55px;
            color: white;
        }

        .visual-content {
            max-width: 430px;
        }

        .visual-logo {
            font-family: "Playfair Display", serif;
            font-size: 32px;
            letter-spacing: 4px;
            margin-bottom: 18px;
        }

        .visual-content h1 {
            font-family: "Playfair Display", serif;
            font-size: clamp(38px, 5vw, 58px);
            font-weight: 500;
            line-height: 1.08;
            margin-bottom: 15px;
        }

        .visual-content p {
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255, 255, 255, .88);
        }

        /* RIGHT */

        .form-side {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 30px;
        }

        .form-container {
            width: min(460px, 100%);
        }

        .top-link {
            display: inline-block;
            margin-bottom: 35px;
            color: var(--muted);
            font-size: 13px;
        }

        .top-link:hover {
            color: var(--rose);
        }

        .eyebrow {
            color: var(--rose);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 11px;
        }

        .form-container h2 {
            font-family: "Playfair Display", serif;
            font-size: 46px;
            line-height: 1.08;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .intro {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 30px;
        }

        .error-box {
            background: #fff0f0;
            border: 1px solid #efd0d0;
            color: var(--danger);
            border-radius: 11px;
            padding: 14px 16px;
            margin-bottom: 22px;
            font-size: 13px;
        }

        .error-box ul {
            padding-left: 18px;
            margin-top: 6px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            height: 50px;
            padding: 0 15px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: white;
            color: var(--dark);
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: var(--rose);
        }

        .submit-btn {
            width: 100%;
            height: 53px;
            border: none;
            border-radius: 11px;
            background: var(--dark);
            color: white;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s;
            margin-top: 8px;
        }

        .submit-btn:hover {
            background: var(--rose);
        }

        .login-text {
            text-align: center;
            color: var(--muted);
            font-size: 13px;
            margin-top: 22px;
        }

        .login-text a {
            color: var(--rose);
            font-weight: 700;
        }

        .benefits {
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid var(--border);
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .benefit {
            text-align: center;
            font-size: 11px;
            color: var(--muted);
        }

        .benefit-icon {
            font-size: 20px;
            margin-bottom: 5px;
        }

        @media (max-width: 850px) {
            .page {
                grid-template-columns: 1fr;
            }

            .visual {
                display: none;
            }

            .form-side {
                min-height: 100vh;
            }
        }

        @media (max-width: 500px) {
            .form-side {
                padding: 35px 20px;
            }

            .form-container h2 {
                font-size: 40px;
            }

            .benefits {
                grid-template-columns: 1fr;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <!-- LEFT VISUAL -->

    <section class="visual">

        <div class="visual-content">

            <div class="visual-logo">
                LUMÉA
            </div>

            <h1>
                Beauty that feels like you.
            </h1>

            <p>
                Create your Luméa account and make every beauty ritual
                a little more personal.
            </p>

        </div>

    </section>


    <!-- REGISTER FORM -->

    <section class="form-side">

        <div class="form-container">

            <a href="{{ route('home') }}" class="top-link">
                ← Back to Luméa
            </a>


            <div class="eyebrow">
                Join Luméa
            </div>


            <h2>
                Create Account
            </h2>


            <p class="intro">
                Sign up to enjoy a smoother shopping experience.
            </p>


            @if($errors->any())

                <div class="error-box">

                    <strong>
                        Please check the following:
                    </strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif


            <form
                action="{{ route('register.store') }}"
                method="POST"
            >

                @csrf


                <!-- NAME -->

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                        autofocus
                    >

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        required
                    >

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Minimum 6 characters"
                        required
                    >

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="form-group">

                    <label for="password_confirmation">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Re-enter your password"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="submit-btn"
                >
                    Create My Account
                </button>

            </form>


            <div class="login-text">

                Already have an account?

                <a href="{{ route('login') }}">
                    Log in
                </a>

            </div>


            <div class="benefits">

                <div class="benefit">

                    <div class="benefit-icon">
                        🛍️
                    </div>

                    Easy Shopping

                </div>


                <div class="benefit">

                    <div class="benefit-icon">
                        📦
                    </div>

                    Track Orders

                </div>


                <div class="benefit">

                    <div class="benefit-icon">
                        ♡
                    </div>

                    Save Favorites

                </div>

            </div>

        </div>

    </section>

</div>

</body>

</html>