<?php $__env->startSection('content'); ?>
<section class="product">
  <div class="container">

    <?php echo e(Breadcrumbs::render('catalog-brand-category-product', $product)); ?>


    <?php /** @var \App\Models\Catalog\Product $product */ ?>
    <div class="product-container">
      <h2><?php echo e($product->name); ?></h2>
      <div class="product__content">
        <?php echo $product->content; ?>

        <div class="product__image-container">
          <div class="product__image"><img src="<?php echo e($product->image); ?>" alt="product"></div>
        </div>
      </div><a href="#" class="btn btn-pdf">
        <div class="btn-pdf__img"></div>
        <div class="btn-pdf__text">Общий каталог (Dunkermotoren).pdf</div>
      </a>
    </div>
  </div>
</section>
<section class="product__characteristics">
  <div class="tabs-blue">
    <div class="tabs__caption__bg">
      <ul class="tabs__caption">
        <li class="active"><a class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Характеристики</span></a></li>
        <li><a class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Размеры</span></a></li>
        <li><a class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Вариации</span></a></li>
        <li><a class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Контакты</span></a></li>
      </ul>
    </div>
    <div class="tabs__content active">
      <table>
        <?php /** @var \App\Models\Catalog\ProductAttribute $attribute */ ?>
        <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column"><?php echo e($attribute->name); ?></td>
          <td><?php echo e($attribute->units); ?></td>
          <td><?php echo e($attribute->pivot->value); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
    <div class="tabs__content">
      <table>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Friction torque at no load</td>
          <td>Ncm</td>
          <td>0.3</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Peak stall torque</td>
          <td>Ncm</td>
          <td>5.4</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">No load speed</td>
          <td>rpm</td>
          <td>4650</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Maximum output power</td>
          <td>W</td>
          <td>6.5</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Nominal power</td>
          <td>W</td>
          <td>5.7</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Torque constant</td>
          <td>Ncm/A</td>
          <td>2.32</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Terminal resistance</td>
          <td>Ohm</td>
          <td>4.9</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Terminal inductance</td>
          <td>mH</td>
          <td>3.64</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Starting current</td>
          <td>A</td>
          <td>2.4</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">No load current</td>
          <td>A</td>
          <td>0.17</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Rotor inertia</td>
          <td>gcm^2</td>
          <td>18.15</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Weight</td>
          <td>kg</td>
          <td>0.11</td>
        </tr>
      </table>
    </div>
    <div class="tabs__content">
      <table>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Terminal inductance</td>
          <td>mH</td>
          <td>3.64</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Starting current</td>
          <td>A</td>
          <td>2.4</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">No load current</td>
          <td>A</td>
          <td>0.17</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Rotor inertia</td>
          <td>gcm^2</td>
          <td>18.15</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Weight</td>
          <td>kg</td>
          <td>0.11</td>
        </tr>
      </table>
    </div>
    <div class="tabs__content">
      <table>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Starting current</td>
          <td>A</td>
          <td>2.4</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">No load current</td>
          <td>A</td>
          <td>0.17</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Rotor inertia</td>
          <td>gcm^2</td>
          <td>18.15</td>
        </tr>
        <tr>
          <td class="zero-column"></td>
          <td class="first-column">Weight</td>
          <td>kg</td>
          <td>0.11</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="mobile-details">
    <p>Характеристики, размеры и вариации<span> электродвигателя G 30.1, 12V</span> Вы можете посмотреть в ПК-версии сайта</p><a class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Перейти в ПК-версию</span></a>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/catalog/product.blade.php ENDPATH**/ ?>