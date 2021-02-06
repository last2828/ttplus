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
    <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Фильтры</span><span class="span-arrow"></span></a>

      <aside>
        @include('front.catalog.components.aside')
        @include('front.catalog.components.filter')
      </aside>

      <div class="products">
        <div class="parameter__names">
          <div class="param series">
            <p>Серия</p>
          </div>
          <div class="param diameter">
            <p>Внешний диаметр,<br> мм</p>
          </div>
          <div class="param length">
            <p>Длина, <br> мм</p>
          </div>
          <div class="param voltage">
            <p>Номинальное напряжение, В</p>
          </div>
          <div class="param speed">
            <p>Номинальная скорость,<br> об/мин</p>
          </div>
          <div class="param moment">
            <p>Номинальный момент,<br> Нcм</p>
          </div>
          <div class="param power">
            <p>Номинальная мощность, <br> Вт</p>
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
            <div class="product__block">
              @include('front.catalog.components.products-list', ['list' => $group, 'products' => $group->products->take(3)])
              <div class="block__bottom"><a href="{{ route('pages.catalog.category.group', ['category' => $category->slug, 'group' => $group->slug]) }}" class="btn btn-primary">Показать все позиции</a><a href="#" class="btn btn-next--blue">Индивидуальный заказ<span class="span-arrow"></span></a></div>
            </div>
          @endforeach
          @include('front.layouts.pagination', ['paginator' => $groups])
        @endif
      </div>
    </div>
  </section>
@endsection
