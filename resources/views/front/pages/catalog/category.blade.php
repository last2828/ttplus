@extends('front.layout')

@section('content')
<section class="main-catalog__heading">
  <div class="container">
    <div class="breadcrumbs"><a href="#" class="btn">Главная</a>
      <p>/ Электродвигатели Dunkermotoren</p>
    </div>
    <h2>Электродвигатели Dunkermotoren</h2>
    <div class="heading__content">
      <div class="heading__text">
        <p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p>
        <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании.</p>
        <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификация ISO 9001.</p>
      </div>
      <div class="heading__buttons"><a href="#" class="btn btn-pdf">
          <div class="btn-pdf__img"></div>
          <div class="btn-pdf__text">Общий каталог (Dunkermotoren).pdf</div>
        </a><a href="#" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="#" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>
  </div>
</section>
<section class="main-catalog__content">
  <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Фильтры</span><span class="span-arrow"></span></a>
    @include('front.pages.catalog.components.aside')
    <div class="products">
      <div class="parameter__names">
        <div class="param series">
          <p>Серия</p>
        </div>
        <div class="param diameter">
          <p>Внешний диаметр,<br> мм</p>
        </div>
        <div class="param length">
          <p>Длина, <br> мм</p>
        </div>
        <div class="param voltage">
          <p>Номинальное напряжение, В</p>
        </div>
        <div class="param speed">
          <p>Номинальная скорость,<br> об/мин</p>
        </div>
        <div class="param moment">
          <p>Номинальный момент,<br> Нcм</p>
        </div>
        <div class="param power">
          <p>Номинальная мощность, <br> Вт</p>
        </div>
      </div>
      @if ($route == 'pages.catalog.dunker.group')
          <div class="product__block">
            <h3>{{$group['name']}}</h3>
            @foreach ($products as $product)
              <div class="product__series">
                <div class="param series">
                  <div class="prod__img"><img src="img/catalog/product.jpg" alt=""></div>
                  <div class="prod__name">
                    <p><span>Серия</span> <br> {{$product['name']}}</p>
                  </div>
                </div>
                <div class="param diameter">
                  <p>23</p>
                </div>
                <div class="param length">
                  <p>50</p>
                </div>
                <div class="param voltage">
                  <p>12/24</p>
                </div>
                <div class="param speed">
                  <p>3 950 <br> 450</p>
                </div>
                <div class="param moment">
                  <p>1.0 <br> 1.1</p>
                </div>
                <div class="param power">
                  <p>4</p>
                </div>
                <a href="{{route('pages.catalog.dunker.product', [
                  'category' => $product->group->category['slug'],
                  'group' => $product->group['slug'],
                  'product' => $product['slug']
                ])}}" class="btn btn-next">
                  <div class="span-arrow"></div>
                </a>
              </div>
            @endforeach 
            <div class="block__bottom"><a href="#" class="btn btn-primary">Показать все позиции</a><a href="#" class="btn btn-next--blue">Индивидуальный заказ<span class="span-arrow"></span></a></div>
          </div>
      @else
        @foreach ($categories as $category)
          <div class="product__block">
            <h3>{{$category['name']}}</h3>
            @foreach ($category['group'] as $group)
              <div class="product__series">
                <div class="param series">
                  <div class="prod__img"><img src="img/catalog/product.jpg" alt=""></div>
                  <div class="prod__name">
                    <p><span>Серия</span> <br> {{$group['name']}}</p>
                  </div>
                </div>
                <div class="param diameter">
                  <p>23</p>
                </div>
                <div class="param length">
                  <p>50</p>
                </div>
                <div class="param voltage">
                  <p>12/24</p>
                </div>
                <div class="param speed">
                  <p>3 950 <br> 450</p>
                </div>
                <div class="param moment">
                  <p>1.0 <br> 1.1</p>
                </div>
                <div class="param power">
                  <p>4</p>
                </div>
                <a href="{{route('pages.catalog.dunker.group', [
                  'category' => $category['slug'],
                  'group' => $group['slug']
                ])}}" class="btn btn-next">
                  <div class="span-arrow"></div>
                </a>
              </div>
            @endforeach 
            <div class="block__bottom"><a href="#" class="btn btn-primary">Показать все позиции</a><a href="#" class="btn btn-next--blue">Индивидуальный заказ<span class="span-arrow"></span></a></div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
@endsection