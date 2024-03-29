@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-4">
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
        </div>
    </div>
@endsection
