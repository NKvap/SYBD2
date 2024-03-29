@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
    <h2>{{$sessions ? "Время сеанса: ".$sessions->time : 'Неверный id сеанса'}}</h2>
    @if($sessions)
    <table border="1">
        <thead>
            <td>id</td>
            <td>Место</td>
            <td>Ряд</td>
            <td>Id пользователя</td>
        </thead>
        @foreach($sessions->tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->place}}</td>
                <td>{{$ticket->row}}</td>
                <td>{{$ticket->users_id}}</td>
            </tr>
        @endforeach
    </table>
    @endif
        </div>
    </div>
@endsection
