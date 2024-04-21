<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->password }}</td>
        <td>{{ $user->level }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach

    <nav aria-label="Pages">
        {!! $users->links() !!}
    </nav>
    
</body>
</html>