@extends('front.layouts.layout')

@section('content')
<section class="articles">
  <div class="container">

    {{Breadcrumbs::render('front-post', $post)}}

    <h2>{{$post->title}}</h2>
    <div class="articles__content">
      <div class="article">
        <div class="article__image"><img src="{{$post->image}}" alt=""></div>
        <div class="article__text">
          {!! $post->description !!}
        </div>

        <div class="article__bottom">
{{--          @if(!empty($belowPost))--}}
            <a href="{{route('pages.news.article', $belowPost->slug)}}" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Предыдущая статья</span></a>
          {{--@endif()--}}
          {{--@if(!empty($abovePost))--}}
            <a href="{{route('pages.news.article', $abovePost->slug)}}" class="btn btn-next"><span class="span-text">Следующая статья</span><span class="span-arrow"></span></a>
          {{--@endif--}}
        </div>
      </div>
      <aside>
        @if(!empty($belowPost))
        <div class="aside-card">
          <div class="aside-card__image"><img src="{{$belowPost->image}}" alt=""></div>
          <div class="aside-card__content">
            <p>{{$belowPost->title}}</p>
          </div><a href="{{route('pages.news.article', $belowPost->slug)}}" class="btn btn-primary">Читать</a>
        </div>
        @endif
        @if(!empty($abovePost))
        <div class="aside-card">
          <div class="aside-card__image"><img src="{{$abovePost->image}}" alt=""></div>
          <div class="aside-card__content">
            <p>{{$abovePost->title}}</p>
          </div><a href="{{route('pages.news.article', $abovePost->slug)}}" class="btn btn-primary">Читать</a>
        </div>
        @endif
      </aside>
    </div>
  </div>
</section>
@endsection