<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <ul>
        <h2>PHP</h2>
        <?php foreach($users as $user) { echo "<li>".$user->name."</li>";} ?>
        <h2>BLADE</h2>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
        <BR>
        {{ $users[0]->name }}
        <BR>
        {{ $firstUser->name }}
        <BR>
        {{ $whereUser->email }}
        <BR>
        @foreach($roles as $name)
        <li>{{ $name }}</li>
        @endforeach
    </ul>
</body>
</html>