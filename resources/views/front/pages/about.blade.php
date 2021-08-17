
@extends('front.layouts.layout')
@section('content')
<section class="about-page">
    <div class="container">

        {{ Breadcrumbs::render('front-about') }}

        <h2>{{$page->title}}</h2>
        <p>{!! $page->description !!}</p>
        <div class="about__image"><img src="{{$page->head_image}}" alt=""></div>
        <h2>{{$page->partner_title}}</h2>
        <p class="partners">{{$page->partner_title_description}}</p>
        <ul>
            @foreach($page->features_content as $feature)
            <li>
                <div class="dot"></div>
                <p>{{$feature}}</p>
            </li>
            @endforeach
        </ul>
        <div class="about__quote">
            <div class="quotes"></div>
            <p>{{$page->quote_title}}</p>
        </div>
        <h2>{{$page->years_title}}</h2>
        <div class="about__years">
            <div class="about__year">
                <div class="year">{{$page->years_1['title']}}</div>
                <p>{{$page->years_1['description']}}</p>
            </div>
            <div class="about__year">
                <div class="year">{{$page->years_2['title']}}</div>
                <p>{{$page->years_2['description']}}</p>
            </div>
            <div class="about__year">
                <div class="year">{{$page->years_3['title']}}</div>
                <p>{{$page->years_3['description']}}</p>
            </div>
        </div>
        <div class="about__blocks">
            <div class="about__block">
                <h4>{{$page->blocks_1['title']}}</h4>
                <p>{{$page->blocks_1['description']}}</p>
            </div>
            <div class="about__block">
                <h4>{{$page->blocks_2['title']}}</h4>
                <p>{{$page->blocks_2['description']}}</p>
            </div>
            <div class="about__block">
                <h4>{{$page->blocks_3['title']}}</h4>
                <p>{{$page->blocks_3['description']}}</p>
            </div>
        </div>
    </div>
</section>
    @if (isset($awards) & isset($licenses) & isset($shows))
    <section class="about__documents">
    <div class="tabs">
        <ul class="tabs__caption">
            <li class="active"><a class="btn tab-button">Награды</a></li>
            <li><a class="btn tab-button">Сертификаты и лицензии</a></li>
            <li><a class="btn tab-button">Выставки</a></li>
        </ul>
        <div class="tabs__content about__documents-tab active">
            @foreach($awards as $award)
            <div class="document"><img src="{{asset('storage/' . $award['image'])}}" alt=""></div>
            @endforeach
        </div>
        <div class="tabs__content about__documents-tab">
            @foreach($licenses as $license)
                <div class="document"><img src="{{asset('storage/' . $license['image'])}}" alt=""></div>
            @endforeach
        </div>
        <div class="tabs__content about__documents-tab">
            @foreach($shows as $show)
                <div class="document"><img src="{{asset('storage/' . $show['image'])}}" alt=""></div>
            @endforeach
        </div>
    </div><a href="{{route('pages.page', 'about?limit=all')}}" class="btn btn-form">Показать все</a>
    @endif
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
