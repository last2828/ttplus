@extends('front.layouts.layout')

@section('content')
  <section class="bg">
    <div id="bg" class="bg_div"></div>
    <section class="intro">
      <div class="container">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="intro__content">
                <h2 class="heading" >Electric motors Dunkermotoren</h2>
                <p>German quality with more than half a century of history</p>
                <div class="content__bottom">
                  <div>
                    <a href="{{route('pages.page', 'dunkermotoren')}}" class="btn btn-primary">Read more</a>
                  </div>
                  <div>
                    <a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">Catalog<span class="span-arrow"></span></a>
                  </div>
                </div>
              </div>
              <div class="intro__image">
                <div><img src="{{asset('img/main/intro-lg.png')}}" alt=""></div>
                <a href="#videopopupper" class="btn-play">
                  <div class="sp-circle"></div>
                  <div class="sp-text">Watch video</div>
                  <div id="videopopupper" class="overlay">
                    <div class="popup">
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        {!! isset($page->dunker_iframe) ? $page->dunker_iframe : '' !!}
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="intro__bottom"><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-next--blue">Catalog<span class="span-arrow"></span></a></div>
              <div class="intro__card">
                <div class="card__image"><img src="{{asset('img/main/intro-sm.png')}}" alt=""></div>
                <div class="card__content">
                  <p>BG | EC Motors</p>
                  <p>GR/G | Brushed <br> DC Motors</p>
                  <p>KD/DR | AC motors</p>
                </div><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-intro">
                  <div class="sp-text">Show all</div>
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="intro__content">
                <h2 class="heading">Capacitors Jianghai</h2>
                <p>Modern electrolytic capacitors from the largest Chinese manufacturer</p>
                <div class="content__bottom"><a href="{{route('pages.page', 'jianghai')}}" class="btn btn-primary">Read more</a>
                  <a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue">Catalog<span class="span-arrow"></span></a></div>
              </div>
              <div class="intro__image"><img src="{{asset('img/main/intro-1-lg.png')}}" alt="">
                <a href="#videopopupper2" class="btn-play">
                  <div class="sp-circle"></div>
                  <div class="sp-text">Watch video</div>
                  <div id="videopopupper2" class="overlay">
                    <div class="popup">
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        {!! isset($page->jianghai_iframe) ? $page->jianghai_iframe : '' !!}
                      </div>
                    </div>
                  </div>
                </a></div>
              <div class="intro__bottom"><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-next--blue">Catalog<span class="span-arrow"></span></a></div>
              <div class="intro__card">
                <div class="card__image"><img src="{{asset('img/main/intro-1-sm.png')}}" alt=""></div>
                <div class="card__content">
                  <p>Polyimer</p>
                  <p>Radial</p>
                  <p>Snap-in</p>
                  <p>Screw</p>
                </div><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-intro">
                  <div class="sp-text">Show all</div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <h2 class="heading">About</h2>
        <div class="about__content">
          <div class="about__block-text">
            <p>Dunkermotoren GmbH is a German manufacturing company that has specialized in high-precision small motors and gearboxes since its foundation in 1950.
              <p>Quality, professionalism, high level of service, customer-oriented, responsiveness and high environmental standards are the hallmarks of the company's products.
              <p>In 1991, Dunkenmotoren became the first ISO 9001 certified small engine manufacturer in the world.</p><a href="{{route('pages.page', 'about')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Read more</span></a>
          </div>
          <div class="about__cards">
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/deadline.svg')}}" alt=""></div>
              <p>Strict <br> compliance<br> with<br> delivery deadlines</p>
            </div>
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/help.svg')}}" alt=""></div>
              <p>Technical support<br> and support</p>
            </div>
            <div class="about__card">
              <div class="card__image"><img src="{{asset('img/wallet.svg')}}" alt=""></div>
              <p>Lending</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="slider-about">
      <div class="swiper-about-cards">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/deadline.svg')}}" alt=""></div>
                  <p>Strict <br> compliance<br> with<br> delivery deadlines</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/help.svg')}}" alt=""></div>
                <p>Technical support<br> and support</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="about__card">
              <div class="card__content">
                <div class="card__image"><img src="{{asset('img/wallet.svg')}}" alt=""></div>
                <p>Lending</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-about-cards-pagination"></div>
      </div>
    </section>
    <section class="catalog">
      <div class="container">
        <h2 class="heading">Catalog</h2>
        <div class="catalog__content">
          <div class="catalog-card">
            <div class="card__image"><img src="{{asset('img/main/card-1.png')}}" alt=""></div>
            <div class="card__content">
              <p>Electric motors <span>Dunkermotoren</span></p>
            </div>
            <div class="card__bottom"><a href="{{route('pages.page', 'dunkermotoren')}}" class="btn btn-primary">Read more</a><a href="{{route('pages.catalog.maincategory', 'dunkermotoren')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Catalog</span></a></div>
          </div>
          <div class="catalog-card">
            <div class="card__image"><img src="{{asset('img/main/card-2.png')}}" alt=""></div>
            <div class="card__content">
              <p>Electrolytic and film capacitors <span>Jianghai</span></p>
            </div>
            <div class="card__bottom"><a href="{{route('pages.page', 'jianghai')}}" class="btn btn-primary">Read more</a><a href="{{route('pages.catalog.maincategory', 'jianghai')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Catalog</span></a></div>
          </div>
        </div>
      </div>
    </section>
  </section>
  @include('front.pages.components.offer')
  <section class="info">
    <div class="container">
      <div class="info__heading">
        <h2 class="heading">Useful information</h2><a href="{{route('pages.posts.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Show <br> more</span></a>
      </div>
      <div class="info__cards">
        @php /** @var \App\Models\Blog\Post $post */ @endphp
        @foreach($posts as $post)
          <div class="info__card">
            <div class="card__image"><img src="{{$post->image}}" alt=""></div>
            <div class="card__bottom">
              <p>{{$post->title}}<a href="{{route('pages.posts.show', $post->slug)}}" class="btn btn-primary">Read Full</a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="info__bottom"><a href="{{route('pages.posts.index')}}" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Show <br> all</span></a></div>
    </div>
  </section>
  <section class="subscribe">
    <div class="container">
      <form method="POST" id="subscription" action="{{route('pages.subscription.store')}}">
        @csrf
        <div class="form__container">
          <h2>Subscribe for updates</h2>
          <p>You will receive notifications about new articles, company news and new products to your e-mail:</p>
          <input type="email" placeholder="E-mail" name="email">
          <div class="policy">
            <input type="checkbox" id="policy-subscribe" checked class="policy__input"><label for="policy-subscribe" class="policy__label"></label><label for="policy-subscribe" class="policy__label--text"><a href="#">I give my consent to the processing of personal data</a></label></div>
          <button type="submit" class="btn btn-form">Subscribe</button>
        </div>
      </form>
    </div>
  </section>
@endsection
