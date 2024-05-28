<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <p>Dear {{ $order->customer_name }},</p>
    <p>We have received your order. Here are the details:</p>
    <ul>
        @foreach ($order->dishes as $dish)
            <li>{{ $dish->name }}: {{ $dish->pivot->quantity }}</li>
        @endforeach
    </ul>
    <p>Total: {{ $order->total_price }}</p>
    <p>We will notify you once your order is ready.</p>
</body>
</html>