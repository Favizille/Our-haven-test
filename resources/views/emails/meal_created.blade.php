<!DOCTYPE html>
<html>
<head>
    <title>New Meal Created</title>
</head>
<body>
    <h2>New Meal Created</h2>

    <p><strong>Name:</strong> {{ $meal->name }}</p>
    <p><strong>Description:</strong> {{ $meal->description }}</p>
    <p><strong>Price:</strong> ₦{{ number_format($meal->price, 2) }}</p>
</body>
</html>
