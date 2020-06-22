Шановний клієнт, товар {{ $product->name }} появився в наявності.

<a href="{{ route('product', [$product->category->code, $product->code]) }}">Замовити</a>