
@extends('front.layout')
@section('content')
<section class="contacts">
  <div class="container">
    <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
      <p>/ Контакты</p>
    </div>
    <h2>Контакты</h2>
    <div class="contacts__content">
      <ul>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Адрес:</h3>
          </div>
          <p>г.Санкт-Петербург, ул. Лодейнопольская, 5 литера А (здание КЦ "Петроконгресс")</p>
          <p>Пешком от м.Чкаловская по ул. Большая Зеленина до ул. Лодейнопольская и повернуть направо. <br></p>
          <p><span>Время в пути 6 минут.</span></p>
          <p>Если едете на машине, то парковаться лучше либо на Лодейнопольской улице, либо на Петрозаводской.</p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Телефон:</h3>
          </div>
          <p>+7 (812) 303 98 63</p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Факс:</h3>
          </div>
          <p>+7 (812) 335 89 07</p>
        </li>
      </ul>
      <div class="maps">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
@endsection
