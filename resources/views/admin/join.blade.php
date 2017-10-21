<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOIN</title>
</head>
<body>
    <ol>
    @foreach($users as $user)
    <li>{{ $user->email }} || {{ $user->description }}</li>
    @endforeach
    </ol>
</body>
</html>