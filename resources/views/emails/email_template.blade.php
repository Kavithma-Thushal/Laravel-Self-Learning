<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .header {
            background: #fcd116;
            padding: 10px 20px;
            text-align: center;
            font-size: 24px;
        }

        .info {
            margin-top: 20px;
        }

        .info th {
            text-align: left;
            padding-right: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table, .table th, .table td {
            border: 1px solid #ccc;
        }

        .table th, .table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
<main>
    <div class="header">Payment Receipt</div>
    <table class="info">
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
    <table class="table">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Amount</th>
        </tr>
        @foreach ($details['products'] as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>${{ number_format($product['unitPrice'], 2) }}</td>
                <td>${{ number_format($product['quantity'] * $product['unitPrice'], 2) }}</td>
            </tr>
        @endforeach
    </table>
</main>
</body>

</html>
