@extends('front.layout')

@section('content')
<section class="catalog-page">
  <div class="container">
    <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
      <p>/ Каталог</p>
    </div>
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
          <p>BG | EC Motors</p>
          <p>GR/G | Brushed DC Motors</p>
          <p>KD/DR | AC motors</p>
          <p>D/DCD | Venetian blind drives</p>
        </div>
        <div class="content__column">
          <p>PLG/SG/STG | Gearboxes</p>
          <p>BGE | Controllers</p>
          <p>Brakes and Encoders</p>
          <p>Linear Systems</p>
        </div>
      </div>
      <div class="card__bottom">
        <a href="#" class="btn btn-primary">Подробнее</a>
        <a href="{{route('pages.catalog.category', 'slug')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
    <div class="catalog-card">
      <div class="card__image"><img src="img/main/card-2.png" alt=""></div>
      <div class="card__heading">
        <h3>Электролитические и пленочные конденсаторы <span>Jianghai</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          <p>Polyimer</p>
          <p>Snap-in</p>
          <p>Film capacitors</p>
        </div>
        <div class="content__column">
          <p>Radial</p>
          <p>Screw</p>
        </div>
      </div>
      <div class="card__bottom">
        <a href="#" class="btn btn-primary">Подробнее</a>
        <a href="{{route('pages.catalog.category', 'slug')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
  </div>
</section>
@endsection