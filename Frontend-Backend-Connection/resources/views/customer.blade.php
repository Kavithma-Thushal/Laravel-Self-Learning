<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 94%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<h1>Customer Management</h1>

<form id="customerForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" id="name" placeholder="Customer Name" required>
    <input type="text" id="address" placeholder="Customer Address" required>
    <input type="number" id="salary" placeholder="Customer Salary" required>
    <button type="submit">Save Customer</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#customerForm').on('submit', function (e) {
            e.preventDefault();

            const formData = {
                _token: $('input[name="_token"]').val(),
                name: $('#name').val(),
                address: $('#address').val(),
                salary: $('#salary').val(),
            };

            $.ajax({
                url: '/customer/save',
                method: 'POST',
                data: formData,
                success: function (response) {
                    alert(response.message);
                },
                error: function (response) {
                    alert(response.responseJSON.message);
                }
            });
        });
    });
</script>

</body>
</html>
