@extends('auth.layouts.master')

@section('title', 'Заказ ' . $order->id)

@section('content')
<div class="py-4">
    <div class="container">
        <div class="justify-content-center">
            <div class="panel">
                <h1>Замовлення №{{ $order->id }}</h1>
                <p>Замовник: <b>{{ $order->name }}</b></p>
                <p>Номер телефону: <b>{{ $order->phone }}</b></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Назва</th>
                            <th>Кількість</th>
                            <th>Ціна</th>
                            <th>Вартість</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->products as $product)
                        <tr>
                            <td>
                                <a href="{{ route('product', $product) }}">
                                    <img height="56px" src="{{ Storage::url($product->image) }}">
                                    {{ $product->name }}
                                </a>
                            </td>
                            <td><span class="badge">1</span></td>
                            <td>{{ $product->price }} грн.</td>
                            <td>{{ $product->getPriceForCount()}} грн.</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Загальна вартість:</td>
                            <td>{{ $order->getFullPrice() }} грн.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
