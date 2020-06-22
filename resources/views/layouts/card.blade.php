<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if ($product->isNew())
                <span class="badge badge-success">@lang('main.properties.new')</span>
                @endif
            @if ($product->isRecommend())
                    <span class="badge badge-warning">@lang('main.properties.recommend')</span>
                @endif
            @if ($product->isHit())
                    <span class="badge badge-danger">@lang('main.properties.hit_shop')</span>
                @endif
        </div>
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} грн.</p>
            <p>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                @if($product->isAvailable())
                    <button type="submit" class="btn btn-success" role="button">@lang('main.add_to_cart')</button>
                @else
                    @lang('main.not_available')
                @endif
                <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                   class="btn btn-default"
                       role="button">@lang('main.read_more')</a>
                    @csrf
                </form>
            </p>
        </div>
    </div>
</div>
