@php /** @var \App\Models\Catalog\Product $product */@endphp
<h3>{{$list->name}}</h3>
@foreach ($products as $product)
    <div class="product__series">
        <div class="param series">
            <div class="prod__img"><img src="{{$product->image}}" alt=""></div>
            <div class="prod__name">
                <p><span>Серия</span> <br> {{$product->name}}</p>
            </div>
        </div>
        <div class="param diameter">
            <p>23</p>
        </div>
        <div class="param length">
            <p>50</p>
        </div>
        <div class="param voltage">
            <p>12/24</p>
        </div>
        <div class="param speed">
            <p>3 950 <br> 450</p>
        </div>
        <div class="param moment">
            <p>1.0 <br> 1.1</p>
        </div>
        <div class="param power">
            <p>4</p>
        </div>
        <a href="{{ route('pages.catalog.product', ['product' => $product->slug]) }}" class="btn btn-next">
            <div class="span-arrow"></div>
        </a>
    </div>
@endforeach