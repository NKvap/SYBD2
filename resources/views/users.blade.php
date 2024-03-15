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
<h2>Список пользователей</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Имя</td>
    <td>Email</td>
    <td>Дата верификации почты</td>
    <td>Пароль</td>
    <td>Кодовое слово</td>
    <td>Дата создания</td>
    <td>Дата обновления</td>
    </thead>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->remember_token}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
