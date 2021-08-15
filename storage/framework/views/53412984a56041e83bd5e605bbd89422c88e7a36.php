<?php /** @var \App\Models\Catalog\Product $product */?>
<h3><?php echo e($list->name); ?></h3>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product__series">
        <div class="param series">
            <div class="prod__img"><img src="<?php echo e($product->image); ?>" alt=""></div>
            <div class="prod__name">
                <p><span>Серия</span> <br> <?php echo e($product->name); ?></p>
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
        <a href="<?php echo e(route('pages.catalog.product', ['product' => $product->slug])); ?>" class="btn btn-next">
            <div class="span-arrow"></div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/catalog/components/products-list.blade.php ENDPATH**/ ?>