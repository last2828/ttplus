@extends('front.layouts.layout')

@section('content')
    <section class="main-catalog__heading">
        <div class="container">
            {{Breadcrumbs::render('catalog-brand', $category)}}
            @include('front.catalog.components.description-section')
        </div>
    </section>
    <section class="main-catalog__content">
        <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Filters</span><span class="span-arrow"></span></a>

            <aside>
                @include('front.catalog.components.aside')
            </aside>
            @if (Route::current()->parameter('category') == 'dunkermotoren')
            <div class="products">
                <div class="parameter__names">
                    <div class="param series">
                        <p>Category</p>
                    </div>
                    <div class="param diameter">
                        <p>Outer Diameter,<br> mm</p>
                    </div>
                    <div class="param length">
                        <p>Length, <br> mm</p>
                    </div>
                    <div class="param voltage">
                        <p>Nominal voltage, V</p>
                    </div>
                    <div class="param speed">
                        <p>Rated speed,<br> rpm</p>
                    </div>
                    <div class="param moment">
                        <p>Rated torque,<br> Ncm</p>
                    </div>
                    <div class="param power">
                        <p>Rated power, <br> W</p>
                    </div>
                </div>
            @elseif (Route::current()->parameter('category') == 'jianghai')
            <div class="products">
                <div class="parameter__names">
                    <div class="param series">
                        <p>Category</p>
                    </div>
                    <div class="param diameter">
                        <p>Capacitance,<br> (µF)</p>
                    </div>
                    <div class="param length">
                        <p>Voltage, <br> (V DC)</p>
                    </div>
                    <div class="param speed">
                        <p>Temperature,<br> (°C)</p>
                    </div>
                    <div class="param moment">
                        <p>Useful Life,<br> (hours)</p>
                    </div>
                </div>
            @endif
                @php /** @var \App\Models\Catalog\ProductCategory $category */ @endphp
                <div class="product__block">
                    @include('front.catalog.components.subcategories-list', ['list' => $category, 'categories' => $subCategories])
                </div>
            </div>
        </div>
    </section>
@endsection
