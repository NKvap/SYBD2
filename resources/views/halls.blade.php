@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
    <h2>{{$halls ? "Наименование зала:".$halls->name_hall : 'Неверный id зала'}}</h2>
    @if($halls)
    <table border="1">
            <thead>
                <td>id</td>
                <td>Дата</td>
                <td>Стоимость</td>
                <td>Время</td>
            </thead>
            @foreach($halls->sessions as $session)
                <tr>
                    <td>{{$session->id}}</td>
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
