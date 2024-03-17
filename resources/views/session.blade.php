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
<h2>Список сеансов</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Название фильма</td>
    <td>Название зала</td>
    <td>Вместимость</td>
    <td>Дата</td>
    <td>Стоимость</td>
    <td>Время</td>
    </thead>
    @foreach($session as $sessions)
        <tr>
            <td>{{$sessions->id}}</td>
            <td>{{$sessions->films->name_film}}</td>
            <td>{{$sessions->halls->name_hall}}</td>
            <td>{{$sessions->halls->capacity}}</td>
            <td>{{$sessions->date}}</td>
            <td>{{$sessions->price}}</td>
            <td>{{$sessions->time}}</td>
        </tr>
    @endforeach
    </table>
{{$session->links()}}
</body>
</html>
