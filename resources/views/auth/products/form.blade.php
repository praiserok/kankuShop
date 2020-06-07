@extends('auth.layouts.master')

@isset($product)
@section('title', 'Редагувати товар ' . $product->name)
@else
@section('title', 'Створити товар')
@endisset

@section('content')
<div class="col-md-12">
    @isset($product)
    <h1>Редагувати товар <b>{{ $product->name }}</b></h1>
    @else
    <h1>Добавитм товар</h1>
    @endisset
    <form method="POST" enctype="multipart/form-data" @isset($product) action="{{ route('products.update', $product) }}"
        @else action="{{ route('products.store') }}" @endisset>
        <div>
            @isset($product)
            @method('PUT')
            @endisset
            @csrf
            <div class="input-group row">
                <label for="code" class="col-sm-2 col-form-label">Код: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'code'])
                    <input type="text" class="form-control" name="code" id="code"
                        value="@isset($product){{ $product->code }}@endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="name" class="col-sm-2 col-form-label">Назва: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'name'])
                    <input type="text" class="form-control" name="name" id="name"
                        value="@isset($product){{ $product->name }}@endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="category_id" class="col-sm-2 col-form-label">Категорія: </label>
                <div class="col-sm-6">
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @isset($product) @if($product->category_id == $category->id)
                            selected
                            @endif
                            @endisset
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="description" class="col-sm-2 col-form-label">Опис: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'description'])
                    <textarea name="description" id="description" cols="72"
                        rows="7">@isset($product){{ $product->description }}@endisset</textarea>
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
            <br>
            <div class="input-group row">
                <label for="price" class="col-sm-2 col-form-label">Ціна: </label>
                <div class="col-sm-2">
                    @include('auth.layouts.error', ['fieldName' => 'price'])
                    <input type="text" class="form-control" name="price" id="price"
                        value="@isset($product){{ $product->price }}@endisset">
                </div>
            </div>
                <br>
                @foreach([
                            'hit' => 'Хіт продаж',
                            'new' => 'Новинка',
                            'recommend' => 'Рекомендуємо',
                        ] as $field => $title)
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">{{$title}}</label>
                        <div class="col-sm-6">
                            <input type="checkbox" class="form-control" name="{{$field }}" id="{{$field}}"
                                   @if(isset($product) && $product->$field === 1)
                                           checked="checked"
                                   @endif
                        >
                        </div>
                    </div>
                @endforeach
            <button class="btn btn-success">Зберегти</button>
        </div>
    </form>
</div>
@endsection
