@extends('front.layouts.layout')

@section('content')
  <section class="main-catalog__heading">
    <div class="container">
      @if (isset($group))
        {{Breadcrumbs::render('catalog-category-group', $group)}}
      @else
        {{Breadcrumbs::render('catalog-brand-category', $category)}}
      @endif
      @include('front.catalog.components.description-section')
    </div>
  </section>
  <section class="main-catalog__content">
    <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Filters</span><span class="span-arrow"></span></a>

      <aside>
        @include('front.catalog.components.aside')
	@if (isset($attributes))
	        @include('front.catalog.components.filter',['attributes'=>$attributes])
	@else
	        @include('front.catalog.components.nofilter')
	@endif
      </aside>

      <div class="products">
        <div class="parameter__names">
          <div class="param series">
            <p>Series</p>
          </div>
          <div class="param diameter">
            <p>Outer diameter,<br> mm</p>
          </div>
          <div class="param length">
            <p>Length, <br> mm</p>
          </div>
          <div class="param voltage">
            <p>Rated voltage, V</p>
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

        @php
          /**
          * @var \App\Models\Catalog\ProductCategory $category
          * @var \App\Models\Catalog\ProductGroup $group
          */
        @endphp

        {{--Получаем список всех продуктов в группе производителя Dunkermotoren--}}
        @if (isset($group))
          <div class="product__block">
            @include('front.catalog.components.products-list', ['list' => $group, 'products' => $products])
            @include('front.layouts.pagination', ['paginator' => $products])
          </div>

          {{--Получаем список всех продуктов в категории производителя Jianghai--}}
        @elseif (isset($category) and $category->groups->isEmpty())
          <div class="product__block">
            @include('front.catalog.components.products-list', ['list' => $category, 'products' => $category->products])
          </div>

          {{--Получаем список всех групп в категории производителя Dunkermotoren--}}
        @elseif (isset($category) and !$category->groups->isEmpty())
          @foreach ($groups as $group)
              @if ($group->products()->exists())
                <div class="product__block">
                  @include('front.catalog.components.products-list', ['list' => $group, 'products' => $group->products->take(3)])
                  <div class="block__bottom"><a href="{{ route('pages.catalog.category.group', $group->slug) }}" class="btn btn-primary">Show all items</a><a href="#" class="btn btn-next--blue">Customized<span class="span-arrow"></span></a></div>
                </div>
              @endif
          @endforeach
          @include('front.layouts.pagination', ['paginator' => $groups])
        @endif
      </div>
    </div>
  </section>
@endsection
