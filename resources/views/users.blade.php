@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
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
        </div>
    </div>
@endsection
