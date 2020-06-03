{{--@extends('layouts.master')--}}

{{--@section('title', 'Товар')--}}

{{--@section('content')--}}
{{--    <h1>{{ $product->name }}</h1>--}}
{{--    <p>Ціна: <b>{{ $product->price }} грн.</b></p>--}}
{{--    <img src="{{ Storage::url($product->image) }}" height="400px">--}}
{{--    <p>{{ $product->description }}</p>--}}
{{--    <button type="submit" class="btn btn-primary" role="button">В корзину</button>--}}
{{--    @csrf--}}
{{--@endsection--}}

@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<h1>iPhone X 64GB</h1>
<h2>{{ $product }}</h2>
<p>Цена: <b>71990 грн.</b></p>
<img src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg">
<p>Отличный продвинутый телефон с памятью на 64 gb</p>
<a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавити в корзину</a>
@endsection
