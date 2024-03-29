@extends('layout')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <h2>Список фильмов</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Категория</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($films as $film)
                    <tr>
                        <td>{{$film->id}}</td>
                        <td>{{$film->name_film}}</td>
                        <td>{{$film->category->name}}</td>
                        <td>
                            <a href="{{ route('film.edit', $film->id) }}" class="btn btn-primary">Редактировать</a>
                            <form method="POST" action="{{ route('film.destroy', $film->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
