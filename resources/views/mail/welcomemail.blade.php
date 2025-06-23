<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $request['subject'] }}</title>
</head>
<body>
    <h3>Hello Adesh,</h3>
    <p><strong>NAME:</strong> {{ $request['name'] }}</p>
    <p><strong>EMAIL:</strong> {{ $request['email'] }}</p>
    <p><strong>SUBJECT:</strong> {{ $request['subject'] }}</p>
    <p><strong>MESSAGE:</strong> {{ $request['message'] }}</p>
</body>
</html>
