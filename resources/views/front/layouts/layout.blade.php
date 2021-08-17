<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    {!! Meta::toHtml() !!}
    <link href="{{asset('css/front.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app_new.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=05eeb1c1-2323-4f87-ab4b-4e54099c8c8b&amp;lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>

    <!--BEGIN out-->
    <div class="out">
      @include('front.layouts.header')

      @include('admin.catalog.error')

      @yield('content')

      @include('front.layouts.footer')
    </div>
    <!--END out-->
    <div id="feedbackpopupper" class="overlay">
      <div class="popup">
        <a class="close" href="#">&times;</a>
        <p><strong>Спасибо!</strong> Наш менеджер скоро свяжется с вами!</p>
      </div>
    </div>
    <!--LOAD SCRIPTS-->
    <script>
        $('.submit__form__btn').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/offers-store',
                data: $('.offer_form').serialize() ,
                dataType : 'json',
                success: function (data) {
                    console.log(data);
                    $("#feedbackpopupper").modal('show');
                }
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('js/front.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app_new.js')}}"></script>
  </body>
</html>
