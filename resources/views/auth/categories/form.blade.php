@extends('auth.layouts.master')

@isset($category)
@section('title', 'Редагувати категорію ' . $category->name)
@else
@section('title', 'Створити категорію')
@endisset

@section('content')
<div class="col-md-12">
    @isset($category)
    <h1>Редагувати Категорію<b>{{ $category->name }}</b></h1>
    @else
    <h1>Добавити Категорію</h1>
    @endisset

    <form method="POST" enctype="multipart/form-data" @isset($category)
        action="{{ route('categories.update', $category) }}" @else action="{{ route('categories.store') }}" @endisset>
        <div>
            @isset($category)
            @method('PUT')
            @endisset
            @csrf
            <div class="input-group row">
                <label for="code" class="col-sm-2 col-form-label">Код: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'code'])
                    <input type="text" class="form-control" name="code" id="code"
                        value="{{ old('code', isset($category) ? $category->code : null) }}">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'name'])
                    <input type="text" class="form-control" name="name" id="name"
                        value="@isset($category){{ $category->name }}@endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="description" class="col-sm-2 col-form-label">Опис: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'description'])
                    <textarea name="description" id="description" cols="72"
                        rows="7">@isset($category){{ $category->description }}@endisset</textarea>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                <div class="col-sm-10">
                    <label class="btn btn-default btn-file">
                        Загрузити <input type="file" style="display: none;" name="image" id="image">
                    </label>
                </div>
            </div>
            <button class="btn btn-success">Зберегти</button>
        </div>
    </form>
</div>
@endsection
