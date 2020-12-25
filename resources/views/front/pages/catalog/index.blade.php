@extends('front.layout')

@section('content')
<section class="catalog-page">
  <div class="container">
    {{ Breadcrumbs::render('front-catalog') }}
    <h2>Каталог</h2>

  </div>
  <div class="product-cards">
    <div class="catalog-card">
      <div class="card__image"><img src="img/main/card-1.png" alt=""></div>
      <div class="card__heading">
        <h3>Электродвигатели <span>Dunkermotoren</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          @foreach (array_slice($dunkermotoren, 0, 6) as $item)
          <p><a href="{{route('pages.catalog.dunkermotoren.category', $item['slug'])}}">{{$item['name']}}</a></p>
          @endforeach
        </div>
        <div class="content__column">
          @foreach (array_slice($dunkermotoren, 6) as $item)
            <p><a href="{{route('pages.catalog.dunkermotoren.category', $item['slug'])}}">{{$item['name']}}</a></p>
          @endforeach
        </div>
      </div>
      <div class="card__bottom">
        <a href="{{route('pages.catalog.dunkermotoren.index')}}" class="btn btn-primary">Подробнее</a>
        <a href="{{route('pages.catalog.dunkermotoren.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
    <div class="catalog-card">
      <div class="card__image"><img src="img/main/card-2.png" alt=""></div>
      <div class="card__heading">
        <h3>Электролитические и пленочные конденсаторы <span>Jianghai</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          @foreach (array_slice($jianghai, 0, 3) as $item)
            <p><a href="{{route('pages.catalog.jianghai.category', $item['slug'])}}">{{$item['name']}}</a></p>
          @endforeach
        </div>
        <div class="content__column">
          @foreach (array_slice($jianghai, 3) as $item)
            <p><a href="{{route('pages.catalog.jianghai.category', $item['slug'])}}">{{$item['name']}}</a></p>
          @endforeach
        </div>
      </div>
      <div class="card__bottom">
        <a href="{{route('pages.catalog.jianghai.index')}}" class="btn btn-primary">Подробнее</a>
        <a href="{{route('pages.catalog.jianghai.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
  </div>
</section>
@endsection