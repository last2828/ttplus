
@extends('front.layout')
@section('content')

<section class="about-page">
  <div class="container">
    <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
      <p class="breadcrumbs__current">/ О компании</p>
    </div>
    {!! $html->value !!}
    <style>{{$css->value}}</style>
  </div>
</section>
<section class="about__documents">
  <div class="tabs">
    <ul class="tabs__caption">
      <li class="active"><a class="btn tab-button">Награды</a></li>
      <li><a class="btn tab-button">Сертификаты и лицензии</a></li>
      <li><a class="btn tab-button">Выставки</a></li>
    </ul>
    <div class="tabs__content about__documents-tab active">
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
    </div>
    <div class="tabs__content about__documents-tab">
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
    </div>
    <div class="tabs__content about__documents-tab">
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
      <div class="document"><img src="img/about/certificate.png" alt=""></div>
    </div>
  </div><a href="#" class="btn btn-form">Показать все</a>
  <div class="custom-select"><select id="tab-select">
      <option value="awards">Награды</option>
      <option value="certificates">Сертификаты и лицензии</option>
      <option value="exhibitions">Выставки</option>
    </select></div>
  <div id="awards" class="tabs__content-mobile">
    <div class="swiper-mobile">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
      </div>
      <div class="swiper-mobile-pagination"></div>
    </div>
  </div>
  <div id="certificates" class="tabs__content-mobile">
    <div class="swiper-mobile">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
      </div>
      <div class="swiper-mobile-pagination"></div>
    </div>
  </div>
  <div id="exhibitions" class="tabs__content-mobile">
    <div class="swiper-mobile">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
        </div>
      </div>
      <div class="swiper-mobile-pagination"></div>
    </div>
  </div>
</section>
@endsection