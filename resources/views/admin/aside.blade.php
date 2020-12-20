<div class="kt-aside kt-aside--fixed kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item" id="kt_aside_brand">
      <div class="kt-aside__brand-logo">
        <a href="index.html">
        <h1 style="color: #ffffff">T&T</h1></a>
      </div>
      <div class="kt-aside__brand-tools">
        <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span><svg class="kt-svg-icon" height="24px" version="1.1" viewbox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
        <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
          <polygon points="0 0 24 0 24 24 0 24"></polygon>
          <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"></path>
          <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"></path>
        </g></svg></span> <span><svg class="kt-svg-icon" height="24px" version="1.1" viewbox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
        <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
          <polygon points="0 0 24 0 24 24 0 24"></polygon>
          <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
          <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
        </g></svg></span></button>
      </div>
    </div><!-- end:: Aside -->
    <!-- begin:: Aside Menu -->
    <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
      <div class="kt-aside-menu" data-ktmenu-dropdown-timeout="500" data-ktmenu-scroll="1" data-ktmenu-vertical="1" id="kt_aside_menu">
        <ul class="kt-menu__nav">
          <li aria-haspopup="true" class="kt-menu__item">
            <a class="kt-menu__link" href="{{route('dashboard')}}"><i class="kt-menu__link-icon flaticon-home"></i><span class="kt-menu__link-text">Главная</span></a>
          </li>
          <li class="kt-menu__section">
            <h4 class="kt-menu__section-text">Меню</h4><i class="kt-menu__section-icon flaticon-more-v2"></i>
          </li>
          <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/catalog/*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
            <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-icon flaticon-web"></i><span class="kt-menu__link-text">Каталог</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
            <div class="kt-menu__submenu">
              <span class="kt-menu__arrow"></span>
              <ul class="kt-menu__subnav">
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--parent"><span class="kt-menu__link"><span class="kt-menu__link-text">Каталог</span></span></li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/catalog/products*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Товары</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('products.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Каталог товаров</span></a>
                      </li>
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('products.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Создать</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/catalog/groups*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Группы товаров</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('groups.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Список групп</span></a>
                      </li>
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('groups.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Новая группа</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/catalog/product_categories*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Категории</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('product_categories.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Список категорий</span></a>
                      </li>
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('product_categories.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Создать</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/catalog/attributes*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Характеристики</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('attributes.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Все характеристики</span></a>
                      </li>
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('attributes.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Создать</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/blog/*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
            <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-icon flaticon-web"></i><span class="kt-menu__link-text">Блог</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
            <div class="kt-menu__submenu">
              <span class="kt-menu__arrow"></span>
              <ul class="kt-menu__subnav">
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--parent"><span class="kt-menu__link"><span class="kt-menu__link-text">Блог</span></span></li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="{{route('posts.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Статьи</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                </li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="{{route('posts.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Добавить статью</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                </li>
                <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu {{(Request::is('admin/blog/categories*') ? 'kt-menu__item--open' : '')}}" data-ktmenu-submenu-toggle="hover">
                  <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Категории блога</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="kt-menu__submenu">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('categories.index')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Список категорий</span></a>
                      </li>
                      <li aria-haspopup="true" class="kt-menu__item">
                        <a class="kt-menu__link" href="{{route('categories.create')}}"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Создать</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu">
            <a class="kt-menu__link" href="{{route('about.index')}}"><i class="kt-menu__link-icon flaticon-tabs"></i><span class="kt-menu__link-text">О компании</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
          </li>
          <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover">
            <a class="kt-menu__link" href="{{route('contact.index')}}"><i class="kt-menu__link-icon flaticon-tabs"></i><span class="kt-menu__link-text">Контакты</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
          </li>
        </ul>
      </div>
    </div><!-- end:: Aside Menu -->
  </div><!-- end:: Aside -->
  <!-- begin:: Header -->
  <div class="kt-header kt-grid__item kt-header--fixed" id="kt_header">
    <!-- begin:: Header Menu -->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
      <div class="kt-header-menu kt-header-menu-mobile kt-header-menu--layout-default" id="kt_header_menu">
        <ul class="kt-menu__nav">
          <li aria-haspopup="true" class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel kt-menu__item--active" data-ktmenu-submenu-toggle="click">
            <a class="kt-menu__link kt-menu__toggle" href="javascript:;"><span class="kt-menu__link-text">Перейти на сайт</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
          </li>
        </ul>
      </div>
    </div><!-- end:: Header Menu -->
    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
      <!--begin: User Bar -->
      <div class="kt-header__topbar-item kt-header__topbar-item--user">
        <div class="kt-header__topbar-wrapper" data-offset="0px,0px" data-toggle="dropdown">
          <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Привет,</span> <span class="kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->name}}</span>
          </div>
        </div>
        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
          <!--begin: Navigation -->
          <div class="kt-notification">
            <div class="kt-notification__custom kt-space-between">
              <form action="{{route('logout')}}" method="POST">
                @CSRF
                <button type="submit" class="btn btn-label btn-label-brand btn-sm btn-bold">Выйти</button>
              </form>
            </div>
          </div><!--end: Navigation -->
        </div>
      </div><!--end: User Bar -->
    </div><!-- end:: Header Topbar -->
  </div><!-- end:: Header -->
