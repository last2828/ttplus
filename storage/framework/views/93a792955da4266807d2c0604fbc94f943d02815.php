<!--BEGIN header-->
<header class="header">
  <div class="container">
    <a href="tel:+8 812 303 98 63" class="btn btn-phone"></a>
    <a href="<?php echo e(route('pages.home')); ?>" class="btn logo__image">
      <img src="<?php echo e(asset('img/tt.svg')); ?>" alt="">
    </a>
    <div class="menu">
      <ul>
        <li><a href="<?php echo e(route('pages.catalog.index')); ?>" class="<?php echo e((Request::is('catalog*') ? 'active' : '')); ?>">Каталог</a></li>
        <li><a href="<?php echo e(route('pages.posts.index')); ?>" class="<?php echo e((Request::is('catalog"*') ? 'active' : '')); ?>">Статьи</a></li>
        <li><a href="<?php echo e(route('pages.page', 'about')); ?>" class="<?php echo e((Request::is('about*') ? 'active' : '')); ?>">О компании</a></li>
        <li><a href="<?php echo e(route('pages.page', 'contact')); ?>" class="<?php echo e((Request::is('contact*') ? 'active' : '')); ?>">Контакты</a></li>
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
<!--END header--><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/layouts/header.blade.php ENDPATH**/ ?>