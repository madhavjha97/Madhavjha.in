<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h2>{{ $type === 'user' ? 'Thank You for Contacting Us' : 'New Contact Form Submission' }}</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Subject:</strong> {{ $data['subject'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] }}</p>

<p>Regards, <br> {{ config('app.name') }}</p>
</body>
</html>
