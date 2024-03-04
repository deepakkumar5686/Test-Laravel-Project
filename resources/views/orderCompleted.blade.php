
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            max-width: 800px;
            min-width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h1 {
            color: #28a745;
            margin-bottom: 20px;
        }

        p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
        }
        .bi-check-circle-fill {
            font-size: 5em; /* Adjust the font-size as needed */
            margin-bottom: 20px; /* Adjust the margin as needed */
            display: block;
            color: #28a745; /* Change the color as needed */
        }
     
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <i class="bi bi-check-circle-fill text-center"></i>
        <h3 class="text-center">Your Order is Confirmed!</h3>
        <p class="text-center">We'll send a shopping confirmation email <br> as soon as your order slips.</p>
        <p class="text-center">Order ID: {{ $orders->id }}</p>

        <!-- Add more order details or call-to-action buttons as needed -->

        <div class="text-center">
            <a href="/" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
</div>
</body>
</html>
