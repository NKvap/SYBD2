<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>605-01</title>
    <style>   .is-invalid { color: red; }    </style>
</head>
<body>
<h2>Добавление фильма</h2>
<form method="post" action={{route('film.store')}}>
    @csrf
    <label>Наименование</label>
    <input type="text" name="name_film" value="{{ old('name_film') }}"/>
    @error('name_film')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Категория:</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}" {{(old('category_id') == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit">
</form>
</body>
</html>
