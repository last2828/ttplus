@extends('front.layouts.layout')

@section('content')
<section class="catalog-page">
  <div class="container">
    {{ Breadcrumbs::render('front-catalog') }}
    <h2>Catalog</h2>

  </div>
  <div class="product-cards">
    <div class="catalog-card">
      <div class="card__image"><img src="{{ env('APP_URL') . 'img/main/card-1.png' }}" alt=""></div>
      <div class="card__heading">
        <h3>Electric motors <span>Dunkermotoren</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          @php /** @var array $category */@endphp
          @foreach (array_slice($dunkermotorenSubCategories, 0, 6) as $category)
          <p><a href="{{route('pages.catalog.category.subcategory', $category['slug'])}}">{{$category['name']}}</a></p>
          @endforeach
        </div>
        <div class="content__column">
          @foreach (array_slice($dunkermotorenSubCategories, 6) as $category)
            <p><a href="{{route('pages.catalog.category.subcategory', $category['slug'])}}">{{$category['name']}}</a></p>
          @endforeach
        </div>
      </div>
      <div class="card__bottom">
        <a href="{{route('pages.catalog.maincategory', ['dunkermotoren'])}}" class="btn btn-primary">Read more</a>
        <a href="{{route('pages.catalog.maincategory', ['dunkermotoren'])}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Catalog</span></a>
      </div>
    </div>
    <div class="catalog-card">
      <div class="card__image"><img src="{{ env('APP_URL') . 'img/main/card-2.png' }}" alt=""></div>
      <div class="card__heading">
        <h3>Electrolytic and film capacitors <span>Jianghai</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          @php /** @var array $category */@endphp
          @foreach (array_slice($jianghaiSubCategories, 0, 3) as $category)
            <p><a href="{{route('pages.catalog.category.subcategory', $category['slug'])}}">{{$category['name']}}</a></p>
          @endforeach
        </div>
        <div class="content__column">
          @foreach (array_slice($jianghaiSubCategories, 3) as $category)
            <p><a href="{{route('pages.catalog.category.subcategory', $category['slug'])}}">{{$category['name']}}</a></p>
          @endforeach
        </div>
      </div>
      <div class="card__bottom">
        <a href="{{route('pages.catalog.maincategory', ['jianghai'])}}" class="btn btn-primary">Read more</a>
        <a href="{{route('pages.catalog.maincategory', ['jianghai'])}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Catalog</span></a>
      </div>
    </div>
  </div>
</section>
@endsection
