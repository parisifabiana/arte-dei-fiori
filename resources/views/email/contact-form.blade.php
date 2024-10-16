<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo messaggio dal form di contatto</title>
</head>
<body>
    <h2>Nuovo messaggio dal form di contatto - L'arte dei fiori</h2>
    <p><strong>Nome:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Oggetto:</strong> {{ $data['subject'] }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>