
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
@endsection
