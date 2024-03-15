<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование</title>
</head>
<body>
<h2>Редактирование фильма</h2>
<form method="post" action="{{ route('film.update', ['id' => $film->id])}}">
    @csrf
    <label>Название категории</label>
    <input type="text" name="category" value="{{ $film->category->name }}" readonly/>
    <br>
    <label>Название фильма</label>
    <input type="text" name="name_film" value="{{ old('name') ?? $film->name_film }}" />
    @error('name_film')
    <div class="is-invalid">{{ $message }}</div> <!-- Исправляем вывод ошибки -->
    @enderror
    <br>
    <input type="submit" value="Обновить"> <!-- Изменяем текст кнопки на "Обновить" -->
</form>
</body>
</html>
