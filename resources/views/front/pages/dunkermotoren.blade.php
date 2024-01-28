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
                    <h2 class="heading">Manufacture of Electric Motors</h2>
                    <p>German quality with more than half a century of history</p>
                    <div class="n-intro__row">
                        <a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">Catalog<span class="span-arrow"></span></a>
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
                <h2 class="heading">About</h2>
            </div>
            <div class="n-about__row">
                <div class="n-about__info">
                    <div class="n-about__descr"><p>Dunkermotoren GmbH is a German manufacturing company that has specialized in high-precision small motors and gearboxes since its founding in 1950.</p></div>
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
                        <p>Quality, professionalism, high level of service, customer focus, efficiency and high environmental standards are the hallmarks of the company's products. </p>
                        <p>In 1991, Dunkenmotoren became the first ISO 9001 certified small engine manufacturer in the world.
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
                        <p>The company's products are widely used in medical and laboratory equipment, industrial, automotive, door systems, blinds and general process automation. </p>
                        <p>Most of the products manufactured by the company are customizable, i.e. designed and manufactured to meet the needs of a specific customer.
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
            <h2 class="heading">Areas of application</h2>
        </div>
        <div class="contents__wrap js-contents-wrap">
            <div class="contents__tabs">
                <div class="contents__tab js-contents-tab active" data-contents="1">Industrial automation</div>
                <div class="contents__tab js-contents-tab" data-contents="2">Medical Engineering</div>
                <div class="contents__tab js-contents-tab" data-contents="3">Automatic doors</div>
                <div class="contents__tab js-contents-tab" data-contents="4">Sun protection equipment</div>
                <div class="contents__tab js-contents-tab" data-contents="5">Motive</div>
                <div class="contents__tab js-contents-tab" data-contents="6">Basic automation</div>
            </div>
            <div class="custom-select contents__select">
                <select id="tab-select" class="contents__select-item">
                    <option value="1">Industrial automation</option>
                    <option value="2">Medical Engineering</option>
                    <option value="3">Automatic doors</option>
                    <option value="4">Sun protection equipment</option>
                    <option value="5">Motive</option>
                    <option value="6">Basic automation</option>
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
            <h2 class="heading">Catalog</h2>
            <div class="catalog__wrap">
                <div class="catalog-card">
                    <div class="card__image"><img src="{{asset('/img/product/catalog_image1.png')}}" alt=""></div>
                    <div class="card__content">
                        <p><span>BG | EC Motors</span></p>
                    </div>
                    <div class="card__bottom n-intro__row">
                        <a href="{{route('pages.catalog.category.subcategory', 'bg-brushless-dc-motors')}}" class="btn btn-next--blue">
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
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
                            <span class="sp-text">More</span>
                            <span class="span-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.pages.components.offer')
    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '315',
                width: '560',
                videoId: 'l-gQLqv9f4o',
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }


        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                //player is playing
            } else {
                //player is paused
            }
        }

        function stopVideo() {
            player.stopVideo();
        }

        function playVideo() {
            player.playVideo();
        }

        function pauseVideo() {
            player.pauseVideo();
        }


        $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
            playVideo();
        });

        $(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
            pauseVideo();
        });

    </script>

@endsection
