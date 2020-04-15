
@extends('admin.layout')
@section('content')

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
          <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <!-- begin:: Subheader -->
            {{Breadcrumbs::render('blog-categories')}} <!-- end:: Subheader -->
             <!-- begin:: Content -->
            <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
              <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                  <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                    <h3 class="kt-portlet__head-title">О компании</h3>
                  </div>
                  
                </div>
                <div class="kt-portlet__body">
                  <div id="gjs">
                    <section class="about-page">
                      <div class="container">
                        <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
                          <p class="breadcrumbs__current">/ О компании</p>
                        </div>
                        <h2>О Компании</h2>
                        <p><span> Компания "Техника и Технология" - </span> это коллектив высококвалифицированных специалистов в области обеспечения производства необходимыми комплектующими.</p>
                        <div class="about__image"><img src="img/about/about-main.png" alt=""></div>
                        <h2>Надежный партнер</h2>
                        <p class="partners">Производство при наличии надежного поставщика комплектующих не вызывает никаких затруднений.</p>
                        <ul>
                          <li>
                            <div class="dot"></div>
                            <p>Гарантируем 100% качество поставляемых комплектующих;</p>
                          </li>
                          <li>
                            <div class="dot"></div>
                            <p>Цены - одни из самых низких на рынке;</p>
                          </li>
                          <li>
                            <div class="dot"></div>
                            <p>Предлагаем гибкие условия оплаты с учетом специфики реализации продукции нашего потребителя(работа без предоплаты, отсрочка платежа);</p>
                          </li>
                          <li>
                            <div class="dot"></div>
                            <p>Предлагаем удобные условия поставки(поддержка продукции на складе согласно производственному плану и в ряде случаев хранение более чем квартальной потребности, особенно в отраслях с плохо прогнозируемым сбытом, когда может быть выигран тендер и времени на комплектацию не хватает);</p>
                          </li>
                          <li>
                            <div class="dot"></div>
                            <p>Благодаря многолетней работе и прямыми связями с представленными производителями мы обеспечиваем качественную техническую поддержку(согласование технических характеристик, помощь в подборе изделия из стандартной линейки продуктов или с доработками);</p>
                          </li>
                          <li>
                            <div class="dot"></div>
                            <p>Предлагаем удобную логистику: заказанную продукцию можно забрать у нас со склада в Москве или Санкт-Петербурге, а также мы можем доставить его до дверей вашего предприятия.</p>
                          </li>
                        </ul>
                        <div class="about__quote">
                          <div class="quotes"></div>
                          <p>Мы понимаем, что сроки поставки для производства - один из наиважнейших параметров, поэтому уделяем им особенное внимание.</p>
                        </div>
                        <h2>Компания основана в 1994 году</h2>
                        <div class="about__years">
                          <div class="about__year">
                            <div class="year">c 1998 г.</div>
                            <p>компании принадлежит завод ОАО "Вектор" в г.Острове Псковской области, который выпускает военную и гражданскую продукцию.</p>
                          </div>
                          <div class="about__year">
                            <div class="year">c 1999 г.</div>
                            <p>был получен сертификат Второго поставщика на отечественные и импортные электронные компоненты, который ежегодно продлевается.</p>
                          </div>
                          <div class="about__year">
                            <div class="year">c 2012 г.</div>
                            <p>решение задач по специфике заказчиков и обеспечивает потребности материально-технического снабжения продукцией, соответствующей мировым стандартам качества.</p>
                          </div>
                        </div>
                        <div class="about__blocks">
                          <div class="about__block">
                            <h4>Поставка электродвигателей малой мощности, систем управления и оборудования на их основе</h4>
                            <p> «Техника и Технология» становится официальным представителем производителя  электродвигателей высокого класса и сопутствующей электроники - Dunkermotoren (Германия), а также профессионального производителя стандартных и заказных электрических двигателей, вентиляционного оборудования на их базе - компании Nostop (Китай).</p>
                          </div>
                          <div class="about__block">
                            <h4>Поставка комплектующих для приборов учета</h4>
                            <p> Начинаем поставлять комплектующие для приборов учета электроэнергии, такие как: отсчетные механизмы, шунты, ЖК-дисплеи, трансформаторы тока и напряжения.</p>
                            <p>Для производства приборов учета воды, тепла и газа в дополнение к перечисленной продукции мы предлагаем интеграторы, крыльчатки, магниты, герконы и датчики на их основе, а также пластиковые и металлические элементы конструкций.</p>
                          </div>
                          <div class="about__block">
                            <h4>Поставка керамических изоляторов</h4>
                            <p> Начинаем поставлять керамические изоляторы для высоковольтных контакторов и линий электропередачи. Помимо стандартных решений мы предлагаем варианты специального исполнения согласно техническому заданию заказчика.</p>
                          </div>
                        </div>
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
                  </div>
                  
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                  <!--begin: Datatable -->
                  <div class="kt-datatable" id="ajax_data"></div><!--end: Datatable -->
                </div>
              </div>
            </div><!-- end:: Content -->
          </div>
        </div>
      </div>
    </div>

    <!-- end:: Page -->
@endsection

@section('script')

@endsection

