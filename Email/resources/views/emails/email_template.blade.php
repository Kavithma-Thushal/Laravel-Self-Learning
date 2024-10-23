<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            background-color: #f9b330;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
        }

        .footer {
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>

<body>
<div class="header">Payment Receipt</div>
<div class="content">
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $details['name'] }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $details['address'] }}</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ $details['date'] }}</td>
        </tr>
        <tr>
            <th>Payment Method</th>
            <td>{{ $details['paymentMethod'] }}</td>
        </tr>
    </table>
    <table>
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($details['products'] as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>${{ number_format($product['unitPrice'], 2) }}</td>
                <td>${{ number_format($product['quantity'] * $product['unitPrice'], 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="footer">
    If you have any issues accessing your account, feel free to contact our support team.<br>
    Email: support@example.com
</div>
</body>
</html>
