@extends('auth.layouts.master')

@section('title', 'Замовлення')

@section('content')
<div class="col-md-12">
    <h1>Замовлення</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Ім'я
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Коли відправлений
                </th>
                <th>
                    Сумма
                </th>
                <th>
                    Дія
                </th>
            </tr>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id}}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                <td>{{ $order->getFullPrice() }} грн.</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-success" type="button" @admin href="{{ route('orders.show', $order) }}" @else
                            href="{{ route('person.orders.show', $order) }}" @endadmin>Відкрити</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>
@endsection
