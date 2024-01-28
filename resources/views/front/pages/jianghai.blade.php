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
                        <h2 class="heading">Capacitor manufacturing</h2>
                        <p>For industrial applications where parameter stability is required over a long service life</p>
                        <div class="n-intro__row">
                            <a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue" data-fancybox data-src="#modal1">Catalog<span class="span-arrow"></span></a>
                            <a href="#videopopupper" class="btn-play">
                                <div class="sp-circle"></div>
                                <div class="sp-text">Watch video</div>

                                <div id="videopopupper" class="overlay" style="padding-top: 100px">
                                    <div class="popup">
                                        <a class="close" href="#">&times;</a>
                                        <div class="content">
                                            {!! $page->head_image !!}
                                        </div>
                                    </div>
                                </div>
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
                    <h2 class="heading">About</h2>
                </div>
                <div class="n-about__descr">
                    <p>Technique & Technology has been officially representing Jianghai products since 2003.
                    <p>JIANGHAI has been manufacturing electrolytic capacitors since 1958 and is currently the largest electrolytic capacitor manufacturer in China.
                    <p>Jianghai has its own aluminum foil production, which certainly makes the company more independent of external factors and shortens the delivery time, especially during the crisis.
                    <p>Jianghai's product range includes aluminum electrolytic screw capacitors, radial capacitors, snap-in capacitors and polymer capacitors.
                    <p>Many Russian manufacturers have appreciated the quality, price and delivery time of these capacitors.
                </div>
                <div class="n-advantages">
                    <h3 class="n-advantages__title">The main advantages of using <br/>Jianghai capacitors:</h3>
                    <div class="n-advantages__wrap">
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image1.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">High quality that is on par with Epcos, Evox-Rifa and other leading world manufacturers.</div>
                        </div>
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image2.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">Significantly lower price and delivery times.</div>
                        </div>
                        <div class="n-advantages__item">
                            <div class="n-advantages__image">
                                <img src="{{asset('/img/product/n-advantage_image3.svg')}}" alt="">
                            </div>
                            <div class="n-advantages__descr">Flexible approach to the production of capacitors with parameters tailored to the specific product of the consumer company.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contents">
        <div class="container container_small">
            <div class="contents__title">
                <h2 class="heading">World leaders</h2>
                <h3 class="contents__h3">who use Jianghai products in their production</h3>
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
                            <span class="sp-text">Catalog</span>
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
                            <span class="sp-text">Catalog</span>
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
                            <span class="sp-text">Catalog</span>
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
                            <span class="sp-text">Catalog</span>
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
                            <span class="sp-text">Catalog</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('front.pages.components.offer')
@endsection
