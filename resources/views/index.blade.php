@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <h1>Всі товари</h1>

    <div class="row">
        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
