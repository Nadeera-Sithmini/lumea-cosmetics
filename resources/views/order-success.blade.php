<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Order Successful - Luméa Cosmetics</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8fb;
            color: #333;
        }

        .success-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
        }

        .success-card {
            width: 100%;
            max-width: 650px;
            background: #ffffff;
            border-radius: 20px;
            padding: 45px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .success-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #f6d7e4;
            color: #9d3f67;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
        }

        h1 {
            margin-bottom: 10px;
            color: #7d284d;
        }

        .message {
            color: #666;
            margin-bottom: 30px;
        }

        .order-info {
            background: #fff4f8;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: left;
        }

        .order-info p {
            margin: 10px 0;
        }

        .order-info strong {
            color: #7d284d;
        }

        .btn {
            display: inline-block;
            padding: 13px 22px;
            border-radius: 10px;
            text-decoration: none;
            margin: 5px;
            font-weight: 600;
        }

        .btn-primary {
            background: #9d3f67;
            color: white;
        }

        .btn-secondary {
            background: #f3e5eb;
            color: #7d284d;
        }
    </style>
</head>
<body>

<div class="success-wrapper">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Order Placed Successfully!</h1>

        <p class="message">
            Thank you for shopping with Luméa Cosmetics.
            Your order has been received successfully.
        </p>

        <div class="order-info">

            <p>
                <strong>Order ID:</strong>
                #{{ $order->id }}
            </p>

            <p>
                <strong>Customer:</strong>
                {{ $order->customer_name }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $order->email }}
            </p>

            <p>
                <strong>Total:</strong>
                Rs. {{ number_format($order->total, 2) }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ ucfirst($order->status) }}
            </p>

            <p>
                <strong>Payment:</strong>
                {{ ucfirst($order->payment_method) }}
            </p>

        </div>

        @auth
            <a href="{{ route('orders.show', $order->id) }}"
               class="btn btn-primary">
                View Order
            </a>
        @endauth

        <a href="{{ route('shop.index') }}"
           class="btn btn-secondary">
            Continue Shopping
        </a>

    </div>

</div>

</body>
</html>