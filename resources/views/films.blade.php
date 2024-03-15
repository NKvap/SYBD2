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
    <h2>Список фильмов</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Наименование</td>
            <td>Категория</td>
        </thead>
    @foreach($films as $film)
        <tr>
            <td>{{$film->id}}</td>
            <td>{{$film->name_film}}</td>
            <td>{{$film->category->name}}</td>
            <td>
                <a href="{{ route('film.edit', $film->id) }}">Редактировать</a>
                <form method="POST" action="{{ route('film.destroy', $film->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
