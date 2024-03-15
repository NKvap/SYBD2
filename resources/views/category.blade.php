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
<h2>{{$category ? "Название категории ".$category->name : 'Неверный ID категории' }}</h2>
@if($category)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Наименование</td>
        </thead>
        @foreach($category->films as $film)
            <tr>
                <td>{{$film->id}}</td>
                <td>{{$film->name_film}}</td>
            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
