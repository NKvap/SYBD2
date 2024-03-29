@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-10">
            <h2 class="mb-4">Список билетов</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Место</th>
                    <th>Ряд</th>
                    <th>Id сессии</th>
                    <th>Id пользователя</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ticket as $tickets)
                    <tr>
                        <td>{{$tickets->id}}</td>
                        <td>{{$tickets->place}}</td>
                        <td>{{$tickets->row}}</td>
                        <td>{{$tickets->session_id}}</td>
                        <td>{{$tickets->users_id}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
