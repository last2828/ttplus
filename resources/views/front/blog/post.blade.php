@extends('front.layouts.layout')

@section('content')
  <section class="articles">
    <div class="container">

      {{Breadcrumbs::render('front-post', $post)}}

      @php
        /**
        * @var \App\Models\Blog\Post $post
        * @var \App\Models\Blog\Post $belowPost
        * @var \App\Models\Blog\Post $abovePost
        */
      @endphp

      <h2>{{$post->title}}</h2>
      <div class="articles__content">
        <div class="article">
          <div class="article__image"><img src="{{$post->image}}" alt=""></div>
          <div class="article__text">
            {!! $post->content !!}
          </div>
          <div class="article__bottom">
            @if(isset($belowPost))
            <a href="{{route('pages.posts.show', $belowPost->slug)}}" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Previous article</span></a>
            @endif
            @if(isset($abovePost))
            <a href="{{route('pages.posts.show', $abovePost->slug)}}" class="btn btn-next"><span class="span-text">Next article</span><span class="span-arrow"></span></a>
            @endif
          </div>
        </div>
        <aside>
          @if(isset($belowPost))
            <div class="aside-card">
              <div class="aside-card__image"><img src="{{$belowPost->image}}" alt=""></div>
              <div class="aside-card__content">
                <p>{{$belowPost->title}}</p>
              </div><a href="{{route('pages.posts.show', $belowPost->slug)}}" class="btn btn-primary">Read</a>
            </div>
          @endif
          @if(isset($abovePost))
            <div class="aside-card">
              <div class="aside-card__image"><img src="{{$abovePost->image}}" alt=""></div>
              <div class="aside-card__content">
                <p>{{$abovePost->title}}</p>
              </div><a href="{{route('pages.posts.show', $abovePost->slug)}}" class="btn btn-primary">Read</a>
            </div>
          @endif
        </aside>
      </div>
    </div>
  </section>
@endsection
