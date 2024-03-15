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
    <h2>{{$sessions ? "Время сеанса: ".$sessions->time : 'Неверный id сеанса'}}</h2>
    @if($sessions)
    <table border="1">
        <thead>
            <td>id</td>
            <td>Место</td>
            <td>Ряд</td>
            <td>Id пользователя</td>
        </thead>
        @foreach($sessions->tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->place}}</td>
                <td>{{$ticket->row}}</td>
                <td>{{$ticket->users_id}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
