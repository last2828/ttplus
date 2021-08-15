<?php $__env->startSection('content'); ?>
<section class="catalog-page">
  <div class="container">
    <?php echo e(Breadcrumbs::render('front-catalog')); ?>

    <h2>Каталог</h2>

  </div>
  <div class="product-cards">
    <div class="catalog-card">
      <div class="card__image"><img src="img/main/card-1.png" alt=""></div>
      <div class="card__heading">
        <h3>Электродвигатели <span>Dunkermotoren</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          <?php /** @var array $category */?>
          <?php $__currentLoopData = array_slice($dunkermotorenSubCategories, 0, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><a href="<?php echo e(route('pages.catalog.category.subcategory', $category['slug'])); ?>"><?php echo e($category['name']); ?></a></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="content__column">
          <?php $__currentLoopData = array_slice($dunkermotorenSubCategories, 6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="<?php echo e(route('pages.catalog.category.subcategory', $category['slug'])); ?>"><?php echo e($category['name']); ?></a></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="card__bottom">
        <a href="<?php echo e(route('pages.catalog.maincategory', ['dunkermotoren'])); ?>" class="btn btn-primary">Подробнее</a>
        <a href="<?php echo e(route('pages.catalog.maincategory', ['dunkermotoren'])); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
    <div class="catalog-card">
      <div class="card__image"><img src="img/main/card-2.png" alt=""></div>
      <div class="card__heading">
        <h3>Электролитические и пленочные конденсаторы <span>Jianghai</span></h3>
      </div>
      <div class="card__content">
        <div class="content__column">
          <?php /** @var array $category */?>
          <?php $__currentLoopData = array_slice($jianghaiSubCategories, 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="<?php echo e(route('pages.catalog.category.subcategory', $category['slug'])); ?>"><?php echo e($category['name']); ?></a></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="content__column">
          <?php $__currentLoopData = array_slice($jianghaiSubCategories, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="<?php echo e(route('pages.catalog.category.subcategory', $category['slug'])); ?>"><?php echo e($category['name']); ?></a></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="card__bottom">
        <a href="<?php echo e(route('pages.catalog.maincategory', ['jianghai'])); ?>" class="btn btn-primary">Подробнее</a>
        <a href="<?php echo e(route('pages.catalog.maincategory', ['jianghai'])); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">В каталог</span></a>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/catalog/index.blade.php ENDPATH**/ ?>