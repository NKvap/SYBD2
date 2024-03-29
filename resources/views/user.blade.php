@extends('layout')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2>{{ $user ? "Имя пользователя: ".$user->name : 'Неверный id пользователя' }}</h2>
            @if($user)
                <table class="table table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Место</th>
                        <th>Ряд</th>
                        <th>Дата</th>
                        <th>Время</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->ticket as $ticket)
                        <tr>
                            <td>{{ $ticket->id }}</td>
                            <td>{{ $ticket->place }}</td>
                            <td>{{ $ticket->row }}</td>
                            <td>{{ $ticket->sessions->date }}</td>
                            <td>{{ $ticket->sessions->time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
