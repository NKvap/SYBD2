@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-8">
            <h2 class="mt-5">Список категорий</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Наименование</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
