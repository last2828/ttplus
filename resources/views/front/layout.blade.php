<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  @if($route == 'pages.catalog.jianghai.category' or $route == 'pages.catalog.dunkermotoren.category')
    <title>{{($categories->first()['meta_title']) ? $categories->first()['meta_title'] : 'Категория TTplus'}}</title>
    <meta name="description" content="{{($categories->first()['meta_description']) ? $categories->first()['meta_description'] : 'Категория TTplus'}}">
    <meta name="keywords" content="{{($categories->first()['meta_keywords']) ? $categories->first()['meta_keywords'] : 'Категория TTplus'}}">
  @elseif($route == 'pages.catalog.jianghai.product' or $route == 'pages.catalog.dunker.product')
    <title>{{($product->meta_title) ? $product->meta_title : 'Продукт'}}</title>
    <meta name="description" content="{{($product->meta_description) ? $product->meta_description : 'Продукт'}}">
    <meta name="keywords" content="{{($product->meta_keywords) ? $product->meta_keywords : 'Продукт'}}">
  @endif
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
