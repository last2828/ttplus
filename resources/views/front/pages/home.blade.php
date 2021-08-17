@extends('front.layouts.layout')

@section('content')
  <section class="bg">
    <div id="bg" class="bg_div"></div>
    <section class="intro">
      <div class="container">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="intro__content">
                <h2 class="heading" >Электродвигатели Dunkermotoren</h2>
                <p>Немецкое качество с более чем полувековой историей</p>
                <div class="content__bottom">
                  <div>
                    <a href="{{route('pages.page', 'dunkermotoren')}}" class="btn btn-primary">Подробнее</a>
                  </div>
                  <div>
                    <a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a>
                  </div>
                </div>
              </div>
              <div class="intro__image">
                <div><img src="{{asset('img/main/intro-lg.png')}}" alt=""></div>
                <a href="#videopopupper" class="btn-play">
                  <div class="sp-circle"></div>
                  <div class="sp-text">Смотреть видео</div>
                  <div id="videopopupper" class="overlay">
                    <div class="popup">
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        {!! isset($page->dunker_iframe) ? $page->dunker_iframe : '' !!}
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="intro__bottom"><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
              <div class="intro__card">
                <div class="card__image"><img src="{{asset('img/main/intro-sm.png')}}" alt=""></div>
                <div class="card__content">
                  <p>BG | EC Motors</p>
                  <p>GR/G | Brushed <br> DC Motors</p>
                  <p>KD/DR | AC motors</p>
                </div><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-intro">
                  <div class="sp-text">Смотреть все</div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="intro__content">
                <h2 class="heading">Конденсаторы Jianghai</h2>
                <p>Современные электролитические конденсаторы от крупнейшего китайского производителя</p>
                <div class="content__bottom"><a href="{{route('pages.page', 'jianghai')}}" class="btn btn-primary">Подробнее</a>
                  <a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
              </div>
              <div class="intro__image"><img src="{{asset('img/main/intro-1-lg.png')}}" alt="">
                <a href="#videopopupper2" class="btn-play">
                  <div class="sp-circle"></div>
                  <div class="sp-text">Смотреть видео</div>
                  <div id="videopopupper2" class="overlay">
                    <div class="popup">
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        {!! $page->jianghai_iframe !!}
                      </div>
                    </div>
                  </div>
                </a></div>
              <div class="intro__bottom"><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
              <div class="intro__card">
                <div class="card__image"><img src="{{asset('img/main/intro-1-sm.png')}}" alt=""></div>
                <div class="card__content">
                  <p>Polyimer</p>
                  <p>Radial</p>
                  <p>Snap-in</p>
                  <p>Screw</p>
                </div><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-intro">
                  <div class="sp-text">Смотреть все</div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <h2 class="heading">О компании</h2>
        <div class="about__content">
          <div class="about__block-text">
            <p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p>
            <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании.</p>
            <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификацию ISO 9001.</p><a href="{{route('pages.page', 'about')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее о компании</span></a>
          </div>
          <div class="about__cards">
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/deadline.svg')}}" alt=""></div>
              <p>Строгое <br> соблюдение<br> сроков поставки</p>
            </div>
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/help.svg')}}" alt=""></div>
              <p>Техническое сопровождение<br> и поддержка</p>
            </div>
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/warehouse.svg')}}" alt=""></div>
              <p>Склады <br> в Москве и <br> Санкт-Петербурге</p>
            </div>
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/wallet.svg')}}" alt=""></div>
              <p>Кредитование</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slider-about">
      <div class="swiper-about-cards">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/deadline.svg')}}" alt=""></div>
                <p>Строгое <br> соблюдение<br> сроков поставки</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/help.svg')}}" alt=""></div>
                <p>Техническое сопровождение<br> и поддержка</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/warehouse.svg')}}" alt=""></div>
                <p>Склады <br> в Москве и <br> Санкт-Петербурге</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/wallet.svg')}}" alt=""></div>
                <p>Кредитование</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-about-cards-pagination"></div>
      </div>
    </section>
    <section class="catalog">
      <div class="container">
        <h2 class="heading">Каталог</h2>
        <div class="catalog__content">
          <div class="catalog-card">
            <div class="card__image"><img src="{{asset('img/main/card-1.png')}}" alt=""></div>
            <div class="card__content">
              <p>Электродвигатели <span>Dunkermotoren</span></p>
            </div>
            <div class="card__bottom"><a href="{{route('pages.page', 'dunkermotoren')}}" class="btn btn-primary">Подробнее</a><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a></div>
          </div>
          <div class="catalog-card">
            <div class="card__image"><img src="{{asset('img/main/card-2.png')}}" alt=""></div>
            <div class="card__content">
              <p>Электролитические и пленочные конденсаторы <span>Jianghai</span></p>
            </div>
            <div class="card__bottom"><a href="{{route('pages.page', 'jianghai')}}" class="btn btn-primary">Подробнее</a><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a></div>
          </div>
        </div>
      </div>
    </section>
  </section>
  @include('front.pages.components.offer')
  <section class="info">
    <div class="container">
      <div class="info__heading">
        <h2 class="heading">Полезная информация</h2><a href="{{route('pages.posts.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Смотреть <br> всё</span></a>
      </div>
      <div class="info__cards">
        @php /** @var \App\Models\Blog\Post $post */ @endphp
        @foreach($posts as $post)
          <div class="info__card">
            <div class="card__image"><img src="{{$post->image}}" alt=""></div>
            <div class="card__bottom">
              <p>{{$post->title}}<a href="{{route('pages.posts.show', $post->slug)}}" class="btn btn-primary">Читать полностью</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="info__bottom"><a href="{{route('pages.posts.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Смотреть <br> всё</span></a></div>
    </div>
  </section>
  <section class="subscribe">
    <div class="container">
      <form method="POST" id="subscription" action="{{route('pages.subscription.store')}}">
        @csrf
        <div class="form__container">
          <h2>Подписаться на обновления</h2>
          <p>Вы будете получать уведомления о новых статьях, новостях компании и новых товарах на свой e-mail:</p>
          <input type="email" placeholder="E-mail" name="email">
          <div class="policy">
            <input type="checkbox" id="policy-subscribe" checked class="policy__input"><label for="policy-subscribe" class="policy__label"></label><label for="policy-subscribe" class="policy__label--text"><a href="#">Я даю свое согласие на обработку персональных данных</a></label></div>
          <button type="submit" class="btn btn-form">Получить</button>
        </div>
      </form>
    </div>
  </section>
@endsection