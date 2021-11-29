<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>email</th>
        </tr>
        @forelse ($authors as $authors)
            <tr>
                <td>{{$authors->id}}</td>
                <td>{{$authors->name}}</td>
                <td>{{$authors->email}}</td>
            </tr>
        @empty
            <h1>VACIO</h1>
        @endforelse
    </table>
</body>
</html>