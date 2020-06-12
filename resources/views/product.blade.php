@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Ціна: <b>{{ $product->price }} грн.</b></p>
    <img src="{{ Storage::url($product->image) }}" height="400px">
    <p>{{ $product->description }}</p>
    <form action="{{ route('basket-add', $product) }}" method="POST">
        @if($product->isAvailable())
            <button type="submit" class="btn btn-success" role="button">Добавити в корзину</button>
        @else
            Немає в наявності
        @endif
        @csrf
    </form>
    @endsection
