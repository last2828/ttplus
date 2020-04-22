<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link href="{{asset('css/front.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=05eeb1c1-2323-4f87-ab4b-4e54099c8c8b&amp;lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>

    <!--BEGIN out-->
    <div class="out">
      @include('front.header')

      @yield('content')

      @include('front.footer')
    </div>
    <!--END out-->

    <!--LOAD SCRIPTS-->
    <script type="text/javascript" src="{{asset('js/front.js')}}"></script>
  </body>
</html>
