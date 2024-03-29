@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;">
        <div class="col-6">
            <h2>Редактирование фильма</h2>
            <form method="post" action="{{ route('film.update', ['id' => $film->id])}}">
                @csrf
                <div class="mb-3">
                    <label for="category">Название категории</label>
                    <input type="text" class="form-control" name="category" value="{{ $film->category->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name_film">Название фильма</label>
                    <input type="text" class="form-control @error('name_film') is-invalid @enderror" name="name_film" value="{{ old('name_film') ?? $film->name_film }}">
                    @error('name_film')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>
    </div>
@endsection
