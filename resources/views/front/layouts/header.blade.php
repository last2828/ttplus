<!--BEGIN header-->
<header class="header">
  <div class="container">
    <a href="tel:+44 1632 960953" class="btn btn-phone"></a>
    <a href="{{route('pages.home')}}" class="btn logo__image">
      <img src="{{asset('img/tt.svg')}}" alt="">
    </a>
    <div class="menu">
      <ul>
        <li><a href="{{route('pages.catalog.index')}}" class="{{(Request::is('catalog*') ? 'active' : '')}}">Catalog</a></li>
        <li><a href="{{route('pages.page', 'about')}}" class="{{(Request::is('about*') ? 'active' : '')}}">About us</a></li>
        <li><a href="{{route('pages.page', 'contact')}}" class="{{(Request::is('contact*') ? 'active' : '')}}">Contacts</a></li>
      </ul>
    </div><a href="#" class="btn btn-menu"><span></span><span></span></a>
    <div class="search">
      <form>
        <div class="input"><input type="text" placeholder="Search"><a href="#" class="input__icon-search"></a></div>
      </form>
    </div>
    <div class="contact-info">
      <a href="mailto:ttplus@assisthero.online" class="contact-info__email">ttplus@assisthero.online</a>
    </div>
  </div>
</header>
<!--END header-->
