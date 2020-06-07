@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Ціна: <b>{{ $product->price }} грн.</b></p>
    <img src="{{ Storage::url($product->image) }}" height="400px">
    <p>{{ $product->description }}</p>
    @if($product->isAvailable())
        <a class="btn btn-success" href="{{ route('basket-add', $product) }}">Добавити в корзину</a>
    @else
        Не доступений
    @endif
    @endsection
