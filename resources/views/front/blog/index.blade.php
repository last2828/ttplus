@extends('front.layouts.layout')

@section('content')
    <section class="info-page">
        <div class="container">

            {{--{{Breadcrumbs::render('front-news')}}--}}

            <h2>Полезная информация</h2>
            <div class="tabs">
                <ul class="tabs__caption">
                    <li onclick="location.href='{{ route('pages.posts.index', ['type' => '2']) }}'" class="{{(Request::get('type') == '2' ? 'active' : '')}}"><a href="{{route('pages.posts.index', ['type' => '2'])}}" class="btn tab-button">Документы</a href="{{route('pages.posts.index', ['type' => '2'])}}"></li>
                    <li onclick="location.href='{{ route('pages.posts.index', ['type' => '1']) }}'" class="{{(Request::get('type') == '1' ? 'active' : '')}}"><a href="{{route('pages.posts.index', ['type' => '1'])}}" class="btn tab-button">Статьи</a></li>
                    <li onclick="location.href='{{ route('pages.posts.index', ['type' => '3']) }}'" class="{{(Request::get('type') == '3' ? 'active' : '')}}"><a href="{{route('pages.posts.index', ['type' => '3'])}}" class="btn tab-button">Видео</a></li>
                </ul>
                <div class="tabs__content-mobile">
                @php /** @var \App\Models\Blog\Post $post */@endphp
                    <div class="info__cards">
                        @foreach($posts as $post)
                            <div class="info__card">
                                <div class="card__image"><img src="{{$post->image}}" alt=""></div>
                                <div class="card__bottom">
                                    <p>{{$post->title}}<a href="{{route('pages.posts.show', $post->slug)}}" class="btn btn-primary">Читать полностью</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @include('front.layouts.pagination', ['paginator' => $posts])
                </div>
            </div>
        </div>
    </section>
@endsection