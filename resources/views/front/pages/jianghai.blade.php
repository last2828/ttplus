@extends('front.layouts.layout')

@section('content')
    <section class="intro">
        <div class="container container_small">
            <div class="intro__wrap">
                <div class="n-intro">
                    <div class="n-intro__info">
                        <div class="n-intro__label">
                            <span>Jianghai</span>
                        </div>
                        <h2 class="heading">Производство конденсаторов </h2>
                        <p>Для промышленного использования, где требуется стабильность параметров в течение длительного срока эксплуатации</p>
                        <div class="n-intro__row">
                            <a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue" data-fancybox data-src="#modal1">В каталог<span class="span-arrow"></span></a>
                            <a href="#" class="btn-play">
                                <div class="sp-circle"></div>
                                <div class="sp-text">Смотреть видео</div>
                            </a>
                        </div>
                    </div>
                    <div class="n-intro__image">
                        <div class="n-intro__image-wrap">
                            <img src="{{asset('/img/product/n-intro_image2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="n-intro__bg">
                        <img src="{{asset('/img/product/n-intro_bg2.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="n-about">
        <div class="container container_small">
            <div class="n-about__wrap">
                <div class="n-about__title">
                    <h2 class="heading">О компании</h2>
                </div>
                <div class="n-about__descr">
                    <p>Техника и Технология официально представляет продукцию Jianghai с 2003г.</p>
                    <p>Компания JIANGHAI производит электролитические конденсаторы с 1958г. и на текущий момент является самым крупным предприятием этого профиля на территории Китая.</p>
                    <p>Jianghai имеет свое собственное производство алюминиевой фольги, что безусловно делает предприятие более независимым от внешних факторов и сокращает сроки поставок, особенно в период кризиса.</p>
                    <p>Ассортимент Jianghai включает алюминиевые электролитические конденсаторы с винтовым зажимом, радиальные, snap-in и полимерные конденсаторы.</p>
                    <p>Многие российские производители по достоинству оценили качество, ценовые параметры и сроки поставок этих конденсаторов.</p>
                </div>
                <div class="n-advantages">
                    <h3 class="n-advantages__title">Основными преимущества использования <br/>конденсаторов Jianghai:</h3>
                    <div class="n-advantages__wrap">
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image1.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">Высокое качество, которое находится на уровне с Epcos, Evox-Rifa  и других ведущих мировых производителей.</div>
                        </div>
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image2.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">Существенно более низкая цена и сроки поставок.</div>
                        </div>
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image3.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">Гибкий подход к производству конденсаторов с параметрами, заточенными под конкретное изделие предприятия-потребителя.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contents">
        <div class="container container_small">
            <div class="contents__title">
                <h2 class="heading">Мировые лидеры</h2>
                <h3 class="contents__h3">которые используют продукцию Jianghai в производстве</h3>
            </div>
            <div class="contents__wrap js-contents-wrap">
                <div class="contents__tabs contents__tabs_maw">
                    <div class="contents__tab js-contents-tab active" data-contents="1">Europe & USA</div>
                    <div class="contents__tab js-contents-tab" data-contents="2">Asia</div>
                </div>
                <div class="contents__container js-contents-container active" data-contents="1">
                    <div class="contents__group">
                        <div class="contents__list contents__list_4">
                            <ul>
                                <li>ABB</li>
                                <li>ACD</li>
                                <li>AMK</li>
                                <li>Askoll</li>
                                <li>ASML</li>
                                <li>Baumüller</li>
                                <li>Benning</li>
                                <li>Bitron</li>
                                <li>Bonfiglioli / Vectron </li>
                                <li>Borets</li>
                                <li>Bosch Rexroth</li>
                                <li>Bowens</li>
                                <li>BSH</li>
                                <li>Carel</li>
                                <li>Cyden</li>
                                <li>Dematik</li>
                                <li>Deutronik</li>
                                <li>Diehl Ako</li>
                                <li>EA</li>
                                <li>Eaton</li>
                                <li>EBM Papst</li>
                                <li>El Santerno</li>
                                <li>Emergilite</li>
                                <li>Emerson/Vertiv</li>
                                <li>Festool</li>
                                <li>Flextronics</li>
                                <li>Frabil</li>
                                <li>Gamatronic </li>
                                <li>GE</li>
                                <li>Gefran (SIEI) </li>
                                <li>Harvard</li>
                                <li>Heartsine</li>
                                <li>Heidenhain</li>
                                <li>Hilti</li>
                                <li>Holip-Danfoss</li>
                                <li>Invertech</li>
                                <li>ITT/Laing/Yxlem </li>
                                <li>KEB</li>
                                <li>Kemppi</li>
                                <li>Kone</li>
                                <li>LTi</li>
                                <li>Lincoln</li>
                                <li>Montelec</li>
                                <li>Murrelektronik</li>
                                <li>Note</li>
                                <li>Otis</li>
                                <li>Panasonic</li>
                                <li>Powernet</li>
                                <li>Prodrive</li>
                                <li>Riello / RPS</li>
                                <li>Rockwell</li>
                                <li>RRC Power</li>
                                <li>Sanmina</li>
                                <li>Schindler</li>
                                <li>Schneider Electric </li>
                                <li>Sem Suhner</li>
                                <li>Siemens</li>
                                <li>Sigmatek</li>
                                <li>SMS Elotherm</li>
                                <li>Stamer</li>
                                <li>Studer Innotec</li>
                                <li>TAE</li>
                                <li>TDE</li>
                                <li>TDK Lambda</li>
                                <li>Tectron</li>
                                <li>Trützschler</li>
                                <li>Upset</li>
                                <li>Wilo</li>
                                <li>Wincor Nixdorf</li>
                                <li>Wiehl Abegg</li>
                                <li>Zollner</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contents__container js-contents-container" data-contents="2">
                    <div class="contents__group">
                        <div class="contents__list contents__list_4">
                            <ul>
                                <li>ABB2</li>
                                <li>ACD2</li>
                                <li>AMK</li>
                                <li>Askoll</li>
                                <li>ASML</li>
                                <li>Baumüller</li>
                                <li>Benning</li>
                                <li>Bitron</li>
                                <li>Bonfiglioli / Vectron </li>
                                <li>Borets</li>
                                <li>Bosch Rexroth</li>
                                <li>Bowens</li>
                                <li>BSH</li>
                                <li>Carel</li>
                                <li>Cyden</li>
                                <li>Dematik</li>
                                <li>Deutronik</li>
                                <li>Diehl Ako</li>
                                <li>EA</li>
                                <li>Eaton</li>
                                <li>EBM Papst</li>
                                <li>El Santerno</li>
                                <li>Emergilite</li>
                                <li>Emerson/Vertiv</li>
                                <li>Festool</li>
                                <li>Flextronics</li>
                                <li>Frabil</li>
                                <li>Gamatronic </li>
                                <li>GE</li>
                                <li>Gefran (SIEI) </li>
                                <li>Harvard</li>
                                <li>Heartsine</li>
                                <li>Heidenhain</li>
                                <li>Hilti</li>
                                <li>Holip-Danfoss</li>
                                <li>Invertech</li>
                                <li>ITT/Laing/Yxlem </li>
                                <li>KEB</li>
                                <li>Kemppi</li>
                                <li>Kone</li>
                                <li>LTi</li>
                                <li>Lincoln</li>
                                <li>Montelec</li>
                                <li>Murrelektronik</li>
                                <li>Note</li>
                                <li>Otis</li>
                                <li>Panasonic</li>
                                <li>Powernet</li>
                                <li>Prodrive</li>
                                <li>Riello / RPS</li>
                                <li>Rockwell</li>
                                <li>RRC Power</li>
                                <li>Sanmina</li>
                                <li>Schindler</li>
                                <li>Schneider Electric </li>
                                <li>Sem Suhner</li>
                                <li>Siemens</li>
                                <li>Sigmatek</li>
                                <li>SMS Elotherm</li>
                                <li>Stamer</li>
                                <li>Studer Innotec</li>
                                <li>TAE</li>
                                <li>TDE</li>
                                <li>TDK Lambda</li>
                                <li>Tectron</li>
                                <li>Trützschler</li>
                                <li>Upset</li>
                                <li>Wilo</li>
                                <li>Wincor Nixdorf</li>
                                <li>Wiehl Abegg</li>
                                <li>Zollner</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog n-catalog">
        <div class="container container_small">
            <h2 class="heading">Каталог</h2>
            <div class="catalog__wrap">
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image9.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Radial <br/>capacitors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'radial')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image10.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Snap-in <br/>capacitors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'snapin')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image11.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Screw <br/>capacitors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'screw')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image12.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Polyimer <br/>capacitors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'polymer')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image13.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Film <br/>capacitors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'film-capacitors')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('front.pages.components.offer')
@endsection