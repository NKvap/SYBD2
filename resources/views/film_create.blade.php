@extends('layout')
@section('content')
    <div class="row justify-content-center" style="margin-top: 70px;"> <!-- Добавляем пользовательский отступ сверху -->
        <div class="col-6">
            <form method="post" action="{{url('film')}}" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name_film" class="form-label">Наименование</label>
                    <input type="text" class="form-control @error('name_film') is-invalid @enderror" id="name_film" name="name_film" aria-describedby="nameHelp" value="{{ old('name_film') }}" required>
                    <div id="nameHelp" class="form-text">Введите наименование фильма.</div>
                    @error('name_film')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категория:</label>
                    <select class="form-select" id="category" name="category_id" aria-describedby="categoryHelp" required>
                        <option value="" disabled selected>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{ (old('category_id') == $category->id) ? 'selected' : '' }}>
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                    <div id="categoryHelp" class="form-text">Выберите категорию.</div>
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection
