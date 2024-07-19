<!DOCTYPE html>
<html>
<head>
    <title>広告ページからのお問合せ</title>
</head>
<body>
    <h1>問い合わせ内容</h1>
    <p><strong>Name:</strong> {{ $inquiry['name'] }}</p>
    <p><strong>Email:</strong> {{ $inquiry['email'] }}</p>
    <p><strong>Phone:</strong> {{ $inquiry['phone'] }}</p>
    <p><strong>Age:</strong> {{ $inquiry['age'] }}</p>
    <p><strong>Postal Code:</strong> {{ $inquiry['postal-code'] }}</p>
    <p><strong>Prefecture:</strong> {{ $inquiry['prefecture'] }}</p>
    <p><strong>Address:</strong> {{ $inquiry['address'] }}</p>
    <p><strong>Building:</strong> {{ $inquiry['building'] }}</p>
    <p><strong>Inquiry:</strong> {{ $inquiry['inquiry'] }}</p>
</body>
</html>
