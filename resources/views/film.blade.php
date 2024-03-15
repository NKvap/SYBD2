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
<h2>{{$film ? "Название фильма ".$film->name_film : 'Неверный ID фильма' }}</h2>
@if($film)
    <table border="1">
        <thead>
            <td>id</td>
            <td>Название зала</td>
            <td>Вместимость</td>
            <td>Дата</td>
            <td>Стоимость</td>
            <td>Время</td>
        </thead>
        @foreach($film->session as $session)
            <tr>
                <td>{{$session->id}}</td>
                <td>{{$session->halls->name_hall}}</td>
                <td>{{$session->halls->capacity}}</td>
                <td>{{$session->date}}</td>
                <td>{{$session->price}}</td>
                <td>{{$session->time}}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
