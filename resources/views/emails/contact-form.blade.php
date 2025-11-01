<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
<h2 style="color: #0066cc;">New Contact Form Submission</h2>

<p><strong>Full Name:</strong> {{ $data['fullname'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>

<p><strong>Message:</strong></p>
<p style="background-color: #f4f4f4; padding: 15px; border-left: 4px solid #0066cc;">
    {{ $data['message'] }}
</p>
</body>
</html>
