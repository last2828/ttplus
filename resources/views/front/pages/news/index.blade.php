@extends('front.layout')

@section('content')
<section class="info-page">
  <div class="container">
    <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
      <p>/ Полезная информация</p>
    </div>
    <h2>Полезная информация</h2>
    <div class="tabs">
      <ul class="tabs__caption">
        <li class="active"><a class="btn tab-button">Документы</a></li>
        <li><a class="btn tab-button">Статьи</a></li>
        <li><a class="btn tab-button">Видео</a></li>
      </ul>
      <div class="custom-select"><select id="tab-select">
          <option value="documents">Документы</option>
          <option value="articles">Статьи</option>
          <option value="video">Видео</option>
        </select></div>
      <div id="documents" class="tabs__content active tabs__content-mobile">
        <div class="info__cards">
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="{{route('pages.news.article', 'slug')}}" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
        </div>
        <div class="info__bottom"><a href="#" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Предыдущая страница</span></a><a href="#" class="btn btn-next"><span class="span-text">Следующая страница</span><span class="span-arrow"></span></a></div>
      </div>
      <div id="articles" class="tabs__content about__documents-tab tabs__content-mobile">
        <div class="info__cards">
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
        </div>
        <div class="info__bottom"><a href="#" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Предыдущая страница</span></a><a href="#" class="btn btn-next"><span class="span-text">Следующая страница</span><span class="span-arrow"></span></a></div>
      </div>
      <div id="video" class="tabs__content about__documents-tab tabs__content-mobile">
        <div class="info__cards">
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
          <div class="info__card">
            <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
            <div class="card__bottom">
              <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
        </div>
        <div class="info__bottom"><a href="#" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Предыдущая страница</span></a><a href="#" class="btn btn-next"><span class="span-text">Следующая страница</span><span class="span-arrow"></span></a></div>
      </div>
    </div>
  </div>
</section>
@endsection