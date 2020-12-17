@extends('admin.layout')
<link rel="stylesheet" href="">
@section('content')

  <!-- begin:: Page -->

  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
          <!-- begin:: Subheader -->
        {{Breadcrumbs::render('about')}} <!-- end:: Subheader -->
          <!-- begin:: Content -->
          <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
              <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                  <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                  <h3 class="kt-portlet__head-title">О компании</h3>
                </div>
              </div>

              <form class="html_form" action="{{route('about.update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="out">
                  <section class="about-page">
                    <div class="container">
                      <h2><input type="text" name="title" value="{{$about->title}}"></h2>
                      <p><input type="text" name="description" value="{{$about->description}}"></p>
                      <div class="about__image"><img src="{{$about->head_image}}" alt="" width="100%"></div>
                      <div class="input-group">
                        <input type="text" id="image_label" class="form-control" name="head_image"
                               aria-label="Image" aria-describedby="button-image">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                        </div>
                      </div>
                      <h2><input type="text" name="partner_title" value="{{$about->partner_title}}"></h2>
                        <p class="partners"><input type="text" name="partner_title_description" value="{{$about->partner_title_description}}"></p>
                      <ul>
                        @foreach($about->features_content as $feature)
                          <li>
                            <div class="dot"></div>
                            <p><input type="text" name="features_content[]" value="{{$feature}}"></p>
                          </li>
                        @endforeach
                      </ul>

                      <div class="about__quote">
                        <div class="quotes"></div>
                        <p><input type="text" name="quote_title" value="{{$about->quote_title}}"></p>
                      </div>
                      <h2><input type="text" name="years_title" value="{{$about->years_title}}"></h2>
                      <div class="about__years">
                        <div class="about__year">
                          <div class="year"><input type="text" name="year_1['title']" value="{{$about->years_1['title']}}"></div>
                          <p><input type="text" name="year_1['description']" value="{{$about->years_1['description']}}"></p>
                        </div>
                        <div class="about__year">
                          <div class="year"><input type="text" name="year_2['title']" value="{{$about->years_2['title']}}"></div>
                          <p><input type="text" name="year_2['description']" value="{{$about->years_2['description']}}"></p>
                        </div>
                        <div class="about__year">
                          <div class="year"><input type="text" name="year_3['title']" value="{{$about->years_3['title']}}"></div>
                          <p><input type="text" name="year_3['description']" value="{{$about->years_3['description']}}"></p>
                        </div>
                      </div>
                      <div class="about__blocks">
                        <div class="about__block">
                          <h4><input type="text" name="block_1['title']" value="{{$about->blocks_1['title']}}"></h4>
                          <p><input type="text" name="block_1['description']" value="{{$about->blocks_1['description']}}"></p>
                        </div>
                        <div class="about__block">
                          <h4><input type="text" name="block_2['title']" value="{{$about->blocks_2['title']}}"></h4>
                          <p><input type="text" name="block_2['description']" value="{{$about->blocks_2['description']}}"></p>
                        </div>
                        <div class="about__block">
                          <h4><input type="text" name="block_3['title']" value="{{$about->blocks_3['title']}}"></h4>
                          <p><input type="text" name="block_3['description']" value="{{$about->blocks_3['description']}}"></p>
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
                        @foreach($about->awards as $award)
                        <div class="document"><img src="{{$award}}" alt="" width="15%"></div>
                        <div class="input-group">
                          <input type="text" id="image_label" class="form-control" name="image"
                                 aria-label="Image" aria-describedby="button-image">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      {{--<div class="tabs__content about__documents-tab">--}}
                        {{--<div class="document"><img src="img/about/certificate.png" alt=""></div>--}}
                      {{--</div>--}}
                      {{--<div class="tabs__content about__documents-tab">--}}
                        {{--<div class="document"><img src="img/about/certificate.png" alt=""></div>--}}
                        {{--<div class="document"><img src="img/about/certificate.png" alt=""></div>--}}
                      {{--</div>--}}
                    </div><a href="#" class="btn btn-form">Показать все</a>
                    {{--<div class="custom-select"><select id="tab-select">--}}
                        {{--<option value="awards">Награды</option>--}}
                        {{--<option value="certificates">Сертификаты и лицензии</option>--}}
                        {{--<option value="exhibitions">Выставки</option>--}}
                      {{--</select></div>--}}
                    {{--<div id="awards" class="tabs__content-mobile">--}}
                      {{--<div class="swiper-mobile">--}}
                        {{--<div class="swiper-wrapper">--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="swiper-mobile-pagination"></div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="certificates" class="tabs__content-mobile">--}}
                      {{--<div class="swiper-mobile">--}}
                        {{--<div class="swiper-wrapper">--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="swiper-mobile-pagination"></div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="exhibitions" class="tabs__content-mobile">--}}
                      {{--<div class="swiper-mobile">--}}
                        {{--<div class="swiper-wrapper">--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                          {{--<div class="swiper-slide">--}}
                            {{--<div class="document__img"><img src="img/about/certificate.png" alt=""></div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="swiper-mobile-pagination"></div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  </section>
                </div>
                <div class="kt-portlet__foot">
                  <div class="kt-form__actions">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- end:: Content -->
    </div>
  </div>

  <!-- end:: Page -->
@endsection

@section('script')
  {{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}
  <script>
    document.addEventListener("DOMContentLoaded", function() {

      document.getElementById('button-image').addEventListener('click', (event) => {
        event.preventDefault();

        window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
      });
    });

    // set file link
    function fmSetLink($url) {
      document.getElementById('image_label').value = $url;
    }
  </script>
@endsection