<?php $__env->startSection('content'); ?>
  <section class="main-catalog__heading">
    <div class="container">
      <?php if(isset($group)): ?>
        <?php echo e(Breadcrumbs::render('catalog-category-group', $group)); ?>

      <?php else: ?>
        <?php echo e(Breadcrumbs::render('catalog-brand-category', $category)); ?>

      <?php endif; ?>
      <?php echo $__env->make('front.catalog.components.description-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </section>
  <section class="main-catalog__content">
    <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Фильтры</span><span class="span-arrow"></span></a>

      <aside>
        <?php echo $__env->make('front.catalog.components.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php if(isset($attributes)): ?>
	        <?php echo $__env->make('front.catalog.components.filter',['attributes'=>$attributes], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php else: ?>
	        <?php echo $__env->make('front.catalog.components.nofilter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>
      </aside>

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

        <?php
          /**
          * @var \App\Models\Catalog\ProductCategory $category
          * @var \App\Models\Catalog\ProductGroup $group
          */
        ?>

        
        <?php if(isset($group)): ?>
          <div class="product__block">
            <?php echo $__env->make('front.catalog.components.products-list', ['list' => $group, 'products' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('front.layouts.pagination', ['paginator' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>

          
        <?php elseif(isset($category) and $category->groups->isEmpty()): ?>
          <div class="product__block">
            <?php echo $__env->make('front.catalog.components.products-list', ['list' => $category, 'products' => $category->products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>

          
        <?php elseif(isset($category) and !$category->groups->isEmpty()): ?>
          <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product__block">
              <?php echo $__env->make('front.catalog.components.products-list', ['list' => $group, 'products' => $group->products->take(3)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="block__bottom"><a href="<?php echo e(route('pages.catalog.category.group', $group->slug)); ?>" class="btn btn-primary">Показать все позиции</a><a href="#" class="btn btn-next--blue">Индивидуальный заказ<span class="span-arrow"></span></a></div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php echo $__env->make('front.layouts.pagination', ['paginator' => $groups], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/catalog/subcategory.blade.php ENDPATH**/ ?>