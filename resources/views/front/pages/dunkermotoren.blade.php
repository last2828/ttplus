@extends('front.layouts.layout')

@section('content')

<section class="intro">
    <div class="container container_small">
        <div class="intro__wrap">
            <div class="n-intro">
                <div class="n-intro__info">
                    <div class="n-intro__label">
                        <span>Dunkermotoren</span>
                    </div>
                    <h2 class="heading">Производство Электродвигателей</h2>
                    <p>Немецкое качество с более чем полувековой историей</p>
                    <div class="n-intro__row">
                        <a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">В каталог<span class="span-arrow"></span></a>
                        <a href="#" class="btn-play">
                            <div class="sp-circle"></div>
                            <div class="sp-text">Смотреть видео</div>
                        </a>
                    </div>
                </div>
                <div class="n-intro__image">
                    <div class="n-intro__image-wrap">
                        <img src="{{asset('/img/product/n-intro_image1.png')}}" alt="">
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
            <div class="n-about__row">
                <div class="n-about__info">
                    <div class="n-about__descr"><p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p></div>
                </div>
                <div class="n-about__image">
                    <div class="n-about__image-wrap">
                        <img src="{{asset('/img/product/about_image1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="n-about__row">
                <div class="n-about__info">
                    <div class="n-about__descr">
                        <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании. </p>
                        <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификация ISO 9001.</p>
                    </div>
                </div>
                <div class="n-about__image">
                    <div class="n-about__image-wrap">
                        <img src="{{asset('/img/product/about_image2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="n-about__row">
                <div class="n-about__info">
                    <div class="n-about__descr">
                        <p>Продукция компании широко используется в медицинском и лабораторном оборудовании, промышленности, автомобилестроении, при изготовлении дверных систем, жалюзи и общей автоматизации процессов. </p>
                        <p>Большая часть продукции, выпускаемая компанией, является кастомизированной, то есть спроектированной и изготовленной под запросы определённого клиента.</p>
                    </div>
                </div>
                <div class="n-about__image">
                    <div class="n-about__image-wrap">
                        <img src="{{asset('/img/product/about_image3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contents">
    <div class="container container_small">
        <div class="contents__title">
            <h2 class="heading">Сферы применения</h2>
        </div>
        <div class="contents__wrap js-contents-wrap">
            <div class="contents__tabs">
                <div class="contents__tab js-contents-tab active" data-contents="1">Промышленная автоматизация</div>
                <div class="contents__tab js-contents-tab" data-contents="2">Медицинская инженерия</div>
                <div class="contents__tab js-contents-tab" data-contents="3">Автоматические двери</div>
                <div class="contents__tab js-contents-tab" data-contents="4">Солнцезащитное оборудование</div>
                <div class="contents__tab js-contents-tab" data-contents="5">Motive</div>
                <div class="contents__tab js-contents-tab" data-contents="6">Базовая автоматизация</div>
            </div>
            <div class="custom-select contents__select">
                <select id="tab-select" class="contents__select-item">
                    <option value="1">Промышленная автоматизация</option>
                    <option value="2">Медицинская инженерия</option>
                    <option value="3">Автоматические двери</option>
                    <option value="4">Солнцезащитное оборудование</option>
                    <option value="5">Motive</option>
                    <option value="6">Базовая автоматизация</option>
                </select>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile active" id="1" data-contents="1">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">G 30.1, 12V</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <div class="steps">
                            <div class="steps__wrap">
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon1.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_1">task/<br/>specification</div>
                                </div>
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon2.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_2">development/<br/>construction</div>
                                </div>
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon3.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_3">first samples/<br/>prototypes</div>
                                </div>
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon4.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_4 steps__descr_rev">testing/<br/>qualification</div>
                                </div>
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon5.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_5 steps__descr_rev">production/<br/>assembly</div>
                                </div>
                                <div class="steps__item">
                                    <div class="steps__icon">
                                        <img src="{{asset('/img/product/steps_icon6.svg')}}" alt="">
                                    </div>
                                    <div class="steps__descr steps__descr_6 steps__descr_rev">system test/<br/>inspection</div>
                                </div>
                            </div>
                            <div class="steps__circle">
                                <img src="{{asset('/img/product/steps_circle.svg')}}" alt="">
                            </div>
                            <div class="steps__label">customer</div>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile" id="2" data-contents="2">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">2</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile" id="3" data-contents="3">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">3</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile" id="4" data-contents="4">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">4</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile" id="5" data-contents="5">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">5</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents__container js-contents-container tabs__content-mobile" id="6" data-contents="6">
                <div class="contents__inner">
                    <div class="contents__group">
                        <h3 class="contents__h3">6</h3>
                        <div class="contents__descr">Dunkermotoren is a leading manufacturer of complete drive solutions for applications in industrial automation in the power range 1 – 4000 Watt. Offering a large number of application and customer-specific solutions at competitive prices, Dunkermotoren provides you with the best possible drive unit – targeted, innovative and application-oriented. Our smart motors with Ethernet interfaces will perfectly embed into your smart factory machinery.</div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">WHAT ARE WE ABLE TO PERFORM IN INDUSTRIAL AUTOMATION?</h3>
                        <div class="contents__list">
                            <ul>
                                <li>Complete rotary and linear solutions from one single source.</li>
                                <li>We offer intelligent drives with integrated electronics, sensors and bus interfaces.</li>
                                <li>Our solutions are notable for easy integration into customers systems.</li>
                                <li>Relief of the central controller due to local motion profiles.</li>
                                <li>Condition Monitoring und Predictive Maintenance.</li>
                                <li>Reduced cabling effort, protection against dust and humidity.</li>
                                <li>Permanent lubricated bearings and maintenance-free gearboxes.</li>
                                <li>Innovative and energy saving DC concepts.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contents__group">
                        <h3 class="contents__h3">TYPICAL SECTORS FOR THE USE OF DUNKERMOTOREN SOLUTIONS IN THE AREA OF INDUSTRIAL AUTOMATION ARE:</h3>
                        <div class="contents__list contents__list_3">
                            <ul>
                                <li>Wood machinery</li>
                                <li>Printing machinery</li>
                                <li>Paper machinery</li>
                                <li>Textile machinery</li>
                                <li>Food and beverage machinery</li>
                                <li>Packaging machinery</li>
                                <li>Semiconductor machinery</li>
                                <li>Plastic industry</li>
                                <li>Material handling</li>
                                <li>Storage and conveying technologies</li>
                                <li>Format adjustment</li>
                                <li>Flying saw</li>
                                <li>Strapping machinery</li>
                                <li>Labeling machinery</li>
                                <li>Measuring- and inspection machinery</li>
                            </ul>
                        </div>
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
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image1.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>BG | EC Motors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'bg-brushless-dc-motors')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image2.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>GR/G | Brushed <br/>DC Motors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'grg-brushed-dc-motors')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image3.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>KD/DR | AC motors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href={{route('pages.catalog.category.subcategory', 'kddr-ac-motors')}} class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image4.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>D/DCD | Venetian <br/>blind drives</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'ddcd-venetian-blind-drives')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image5.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>PLG/SG/STG | <br/>Gearboxes</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'plgsgstg-gearboxes')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image6.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>BGE | Controllers</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'bge-controllers')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image7.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Brakes and <br/>Encoders</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'e-brakes')}}" class="btn btn-next--blue">
                            <span class="sp-text">В каталог</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image8.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>Linear Systems</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'stcasmlsm-linear-systems')}}" class="btn btn-next--blue">
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