<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>605-01</title>
</head>
<body>
<h2>Список билетов</h2>
<table border="1">
    <thead>
        <td>id</td>
        <td>Место</td>
        <td>Ряд</td>
        <td>Id сессии</td>
        <td>Id пользователя</td>
    </thead>
    @foreach($ticket as $tickets)
        <tr>
            <td>{{$tickets->id}}</td>
            <td>{{$tickets->place}}</td>
            <td>{{$tickets->row}}</td>
            <td>{{$tickets->session_id}}</td>
            <td>{{$tickets->users_id}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
