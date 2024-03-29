@extends('layout')
@section('content')
    <div class="row justify-content-center">
        <div class="col-4">
<h2>{{$category ? "Название категории ".$category->name : 'Неверный ID категории' }}</h2>
@if($category)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Наименование</td>
        </thead>
        @foreach($category->films as $film)
            <tr>
                <td>{{$film->id}}</td>
                <td>{{$film->name_film}}</td>
            </tr>
        @endforeach
    </table>
@endif
        </div>
    </div>
@endsection
