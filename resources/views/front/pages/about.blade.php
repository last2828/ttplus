
@extends('front.layouts.layout')
@section('content')
<section class="about-page">
    <div class="container">

        {{ Breadcrumbs::render('front-about') }}

        <h2>{{$data->title}}</h2>
        <p>{!! $data->description !!}</p>
        <div class="about__image"><img src="{{$data->head_image}}" alt=""></div>
        <h2>{{$data->partner_title}}</h2>
        <p class="partners">{{$data->partner_title_description}}</p>
        <ul>
            @foreach($data->features_content as $feature)
            <li>
                <div class="dot"></div>
                <p>{{$feature}}</p>
            </li>
            @endforeach
        </ul>
        <div class="about__quote">
            <div class="quotes"></div>
            <p>{{$data->quote_title}}</p>
        </div>
        <h2>{{$data->years_title}}</h2>
        <div class="about__years">
            <div class="about__year">
                <div class="year">{{$data->years_1['title']}}</div>
                <p>{{$data->years_1['description']}}</p>
            </div>
            <div class="about__year">
                <div class="year">{{$data->years_2['title']}}</div>
                <p>{{$data->years_2['description']}}</p>
            </div>
            <div class="about__year">
                <div class="year">{{$data->years_3['title']}}</div>
                <p>{{$data->years_3['description']}}</p>
            </div>
        </div>
        <div class="about__blocks">
            <div class="about__block">
                <h4>{{$data->blocks_1['title']}}</h4>
                <p>{{$data->blocks_1['description']}}</p>
            </div>
            <div class="about__block">
                <h4>{{$data->blocks_2['title']}}</h4>
                <p>{{$data->blocks_2['description']}}</p>
            </div>
            <div class="about__block">
                <h4>{{$data->blocks_3['title']}}</h4>
                <p>{{$data->blocks_3['description']}}</p>
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
            @foreach($data->awards as $award)
            <div class="document"><img src="img/about/certificate.png" alt=""></div>
            @endforeach
        </div>
        <div class="tabs__content about__documents-tab">
            @foreach($data->licenses as $licens)
            <div class="document"><img src="img/about/certificate.png" alt=""></div>
            @endforeach
        </div>
        <div class="tabs__content about__documents-tab">
            @foreach($data->shows as $show)
            <div class="document"><img src="img/about/certificate.png" alt=""></div>
            @endforeach
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
@endsection
