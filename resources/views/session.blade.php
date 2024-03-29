@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-10">
            <h2 class="mb-4">Список сеансов</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Название фильма</th>
                    <th>Название зала</th>
                    <th>Вместимость</th>
                    <th>Дата</th>
                    <th>Стоимость</th>
                    <th>Время</th>
                </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
            {{$session->links()}}
        </div>
    </div>
@endsection
