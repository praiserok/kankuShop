@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
    <h1>Корзина</h1>
    <p>Оформлення замовлення</p>
    <div class="panel">
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
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                            <img height="56px" src="{{ Storage::url($product->image) }}">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td><span class="badge">{{ $product->pivot->count }}</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basket-remove', $product) }}" method="POST">
                                <button type="submit" class="btn btn-danger"
                                        href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                            <form action="{{ route('basket-add', $product) }}" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td>{{ $product->price }} грн.</td>
                    <td>{{ $product->getPriceForCount() }} грн.</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">Загальна вартість:</td>
                <td>{{ $order->getFullPrice() }} грн.</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place') }}">Оформити
                замовлення</a>
        </div>
    </div>
@endsection
