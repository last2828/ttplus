@extends('front.layout')

@section('content')

<section class="bg">
  <div id="bg" class="bg_div"></div>
  <section class="intro">
    <div class="container">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="intro__content">
              <h2 class="heading" id="title">Электродвигатели Dunkermotoren</h2>
              <p id="text">Немецкое качество с более чем полувековой историей</p>
              <div class="content__bottom">
                <div id="button-1">
                  <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
                <div id="button-2">
                  <a href="#" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a>
                </div>
              </div>
            </div>
            <div class="intro__image">
              <div id="image"><img src="img/main/intro-lg.png" alt=""></div>
              <a href="#" id="video" class="btn-play">
                <div class="sp-circle"></div>
                <div class="sp-text">Смотреть видео</div>
              </a></div>
            <div class="intro__bottom"><a href="#" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
            <div class="intro__card" id="category">
              <div class="card__image"><img src="img/main/intro-sm.png" alt=""></div>
              <div class="card__content">
                <p>BG | EC Motors</p>
                <p>GR/G | Brushed <br> DC Motors</p>
                <p>KD/DR | AC motors</p>
              </div><a href="#" class="btn btn-intro">
                <div class="sp-text">Смотреть все</div>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="intro__content">
              <h2 class="heading">Конденсаторы Jianghai</h2>
              <p>Современные электролитические конденсаторы от крупнейшего китайского производителя</p>
              <div class="content__bottom"><a href="#" class="btn btn-primary">Подробнее</a><a href="#" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
            </div>
            <div class="intro__image"><img src="img/main/intro-1-lg.png" alt=""><a href="#" class="btn-play">
                <div class="sp-circle"></div>
                <div class="sp-text">Смотреть видео</div>
              </a></div>
            <div class="intro__bottom"><a href="#" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a></div>
            <div class="intro__card">
              <div class="card__image"><img src="img/main/intro-1-sm.png" alt=""></div>
              <div class="card__content">
                <p>Polyimer</p>
                <p>Radial</p>
                <p>Snap-in</p>
                <p>Screw</p>
              </div><a href="#" class="btn btn-intro">
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
      <h2 class="heading" id="about_heading">О компании</h2>
      <div class="about__content">
        <div class="about__block-text" id="about_text">
          <p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p>
          <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании.</p>
          <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификацию ISO 9001.</p><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее о компании</span></a>
        </div>
        <div class="about__cards">
          <div class="about__card card-1">
            <div class="card__image"><img src="img/deadline.svg" alt=""></div>
            <p>Строгое <br> соблюдение<br> сроков поставки</p>
          </div>
          <div class="about__card card-1">
            <div class="card__image"><img src="img/help.svg" alt=""></div>
            <p>Техническое сопровождение<br> и поддержка</p>
          </div>
          <div class="about__card card-2">
            <div class="card__image"><img src="img/warehouse.svg" alt=""></div>
            <p>Склады <br> в Москве и <br> Санкт-Петербурге</p>
          </div>
          <div class="about__card card-2">
            <div class="card__image"><img src="img/wallet.svg" alt=""></div>
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
              <div class="card__image"><img src="img/deadline.svg" alt=""></div>
              <p>Строгое <br> соблюдение<br> сроков поставки</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="about__card">
            <div class="card__content">
              <div class="card__image"><img src="img/help.svg" alt=""></div>
              <p>Техническое сопровождение<br> и поддержка</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="about__card">
            <div class="card__content">
              <div class="card__image"><img src="img/warehouse.svg" alt=""></div>
              <p>Склады <br> в Москве и <br> Санкт-Петербурге</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="about__card">
            <div class="card__content">
              <div class="card__image"><img src="img/wallet.svg" alt=""></div>
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
          <div class="card__image"><img src="img/main/card-1.png" alt=""></div>
          <div class="card__content">
            <p>Электродвигатели <span>Dunkermotoren</span></p>
          </div>
          <div class="card__bottom"><a href="#" class="btn btn-primary">Подробнее</a><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a></div>
        </div>
        <div class="catalog-card">
          <div class="card__image"><img src="img/main/card-2.png" alt=""></div>
          <div class="card__content">
            <p>Электролитические и пленочные конденсаторы <span>Jianghai</span></p>
          </div>
          <div class="card__bottom"><a href="#" class="btn btn-primary">Подробнее</a><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a></div>
        </div>
      </div>
    </div>
  </section>
</section>
<section class="offer">
  <div class="container">
    <form>
      <div class="form__container">
        <h2>Индивидуальное предложение</h2>
        <p>Кратко опишите задачу и мы подготовим для Вас индивидуальное предложение:</p>
        <div class="inputs__container"><input type="text" placeholder="Ваше имя"><input type="tel" placeholder="Ваш телефон" id="tel"><input type="email" placeholder="E-mail"><input type="text" placeholder="Комментарий"></div>
        <div class="form-bottom">
          <div class="policy"><input type="checkbox" id="policy-offer" checked class="policy__input"><label for="policy-offer" class="policy__label"></label><label for="policy-offer" class="policy__label--text"><a href="#">Я даю свое согласие на обработку персональных данных</a></label></div><a href="#" class="btn btn-form">Получить</a>
        </div>
      </div>
    </form>
  </div>
</section>
<section class="info">
  <div class="container">
    <div class="info__heading">
      <h2 class="heading">Полезная информация</h2><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Смотреть <br> всё</span></a>
    </div>
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
      <div class="info__card">
        <div class="card__image"><img src="img/main/bitmap.png" alt=""></div>
        <div class="card__bottom">
          <p><span> Электрическая прочность </span> электролитических конденсаторов</p><a href="#" class="btn btn-primary">Читать полностью</a>
        </div>
      </div>
    </div>
    <div class="info__bottom"><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Смотреть <br> всё</span></a></div>
  </div>
</section>
<section class="subscribe">
  <div class="container">
    <form>
      <div class="form__container">
        <h2>Подписаться на обновления</h2>
        <p>Вы будете получать уведомления о новых статьях, новостях компании и новых товарах на свой e-mail:</p><input type="email" placeholder="E-mail">
        <div class="policy"><input type="checkbox" id="policy-subscribe" checked class="policy__input"><label for="policy-subscribe" class="policy__label"></label><label for="policy-subscribe" class="policy__label--text"><a href="#">Я даю свое согласие на обработку персональных данных</a></label></div><a href="#" class="btn btn-form">Получить</a>
      </div>
    </form>
  </div>
</section>

@endsection