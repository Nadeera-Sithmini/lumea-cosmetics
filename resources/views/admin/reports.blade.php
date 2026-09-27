<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reports | Luméa Cosmetics</title>

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
            --rose: #b97d72;
            --dark: #302826;
            --muted: #756b67;
            --border: #eadfd9;
            --danger: #b95d5d;
            --success: #5d8a65;
            --soft-pink: #f4e5df;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            color: var(--dark);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 35px;
        }

        .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
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
            font-size: 38px;
            font-weight: 500;
        }

        .back {
            padding: 11px 16px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: white;
            font-size: 12px;
        }

        .back:hover {
            border-color: var(--rose);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }

        .card,
        .panel {
            background: white;
            border: 1px solid var(--border);
            border-radius: 15px;
        }

        .card {
            padding: 20px;
        }

        .label {
            color: var(--muted);
            font-size: 11px;
        }

        .value {
            margin-top: 10px;
            font-size: 25px;
            font-weight: 700;
        }

        .content {
            margin-top: 22px;
        }

        .panel {
            overflow: hidden;
            max-width: 700px;
        }

        .panel-header {
            padding: 18px 20px;
            border-bottom: 1px solid #f0e7e3;
        }

        .panel-header h2 {
            font-family: "Playfair Display", serif;
            font-size: 21px;
            font-weight: 500;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            text-align: left;
            padding: 15px 20px;
            border-bottom: 1px solid #f2eae7;
            font-size: 12px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .status-ok {
            color: var(--success);
            font-weight: 700;
        }

        .status-danger {
            color: var(--danger);
            font-weight: 700;
        }

        @media (max-width: 1100px) {
            .cards {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {
            .page {
                padding: 22px 16px;
            }

            .top {
                align-items: flex-start;
                flex-direction: column;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="top">

        <div>
            <div class="eyebrow">
                Luméa Cosmetics
            </div>

            <h1>
                Store Reports
            </h1>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="back">
            ← Back to Dashboard
        </a>

    </div>

    <div class="cards">

        <div class="card">
            <div class="label">Total Revenue</div>
            <div class="value">
                LKR {{ number_format((float) $totalRevenue, 2) }}
            </div>
        </div>

        <div class="card">
            <div class="label">Total Orders</div>
            <div class="value">
                {{ number_format($totalOrders) }}
            </div>
        </div>

        <div class="card">
            <div class="label">Delivered Orders</div>
            <div class="value">
                {{ number_format($deliveredOrders) }}
            </div>
        </div>

        <div class="card">
            <div class="label">Active Orders</div>
            <div class="value">
                {{ number_format($pendingOrders) }}
            </div>
        </div>

        <div class="card">
            <div class="label">Average Order Value</div>
            <div class="value">
                LKR {{ number_format((float) $averageOrderValue, 2) }}
            </div>
        </div>

    </div>

    <div class="content">

        <section class="panel">

            <div class="panel-header">
                <h2>Order Summary</h2>
            </div>

            <table>

                <tbody>

                <tr>
                    <td>Total Orders</td>
                    <td>{{ $totalOrders }}</td>
                </tr>

                <tr>
                    <td>Delivered Orders</td>
                    <td class="status-ok">
                        {{ $deliveredOrders }}
                    </td>
                </tr>

                <tr>
                    <td>Active Orders</td>
                    <td>{{ $pendingOrders }}</td>
                </tr>

                <tr>
                    <td>Cancelled Orders</td>
                    <td class="status-danger">
                        {{ $cancelledOrders }}
                    </td>
                </tr>

                <tr>
                    <td>Total Revenue</td>
                    <td>
                        <strong>
                            LKR {{ number_format((float) $totalRevenue, 2) }}
                        </strong>
                    </td>
                </tr>

                <tr>
                    <td>Average Order Value</td>
                    <td>
                        <strong>
                            LKR {{ number_format((float) $averageOrderValue, 2) }}
                        </strong>
                    </td>
                </tr>

                </tbody>

            </table>

        </section>

    </div>

</div>

</body>
</html>
