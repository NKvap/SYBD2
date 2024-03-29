@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
        <h2>Список залов</h2>
        <table border="1">
            <thead>
                <td>id</td>
                <td>Наименование</td>
                <td>Вместимость</td>
            </thead>
        @foreach($hall as $halls)
            <tr>
                <td>{{$halls->id}}</td>
                <td>{{$halls->name_hall}}</td>
                <td>{{$halls->capacity}}</td>
            </tr>
        @endforeach
        </table>
        </div>
    </div>
@endsection
