<!--BEGIN header-->
<header class="header">
  <div class="container">
    <a href="#" class="btn btn-phone"></a>
    <a href="{{route('pages.home')}}" class="btn logo__image">
      <img src="{{asset('img/tt.svg')}}" alt="">
    </a>
    <div class="menu">
      <ul>
        <li><a href="{{route('pages.catalog.index')}}" class="{{(Request::is('catalog*') ? 'active' : '')}}">Каталог</a></li>
        <li><a href="{{route('pages.news.index')}}" class="{{(Request::is('catalog"*') ? 'active' : '')}}">Статьи</a></li>
        <li><a href="{{route('pages.about')}}" class="{{(Request::is('about*') ? 'active' : '')}}">О компании</a></li>
        <li><a href="{{route('pages.contact')}}" class="{{(Request::is('contact*') ? 'active' : '')}}">Контакты</a></li>
      </ul>
    </div><a href="#" class="btn btn-menu"><span></span><span></span></a>
    <div class="search">
      <form>
        <div class="input"><input type="text" placeholder="Поиск"><a href="#" class="input__icon-search"></a></div>
      </form>
    </div>
    <div class="contact-info">
      <a href="tel:+8 812 303 98 63" class="contact-info__phone">8 812 303 98 63</a>
      <a href="mailto:info@ttplus.spb.ru" class="contact-info__email">info@ttplus.spb.ru</a>
    </div>
  </div>
</header>
<!--END header-->