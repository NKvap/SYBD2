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
<h2>Список залов</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Наименование</td>
    <td>Вместимость</td>
    </thead>
    @foreach($hall as $halls)
        <tr>
            <td>{{$halls->id}}</td>
            <td>{{$halls->name_hall}}</td>
            <td>{{$halls->capacity}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
