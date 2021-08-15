<?php /** @var \App\Models\Catalog\ProductCategory $subCategory */?>
<h3><?php echo e($list->name); ?></h3>

<?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product__series">
        <div class="param series">
            <div class="prod__img"><img src="<?php echo e($subCategory->image); ?>" alt=""></div>
            <div class="prod__name">
                <p><span>Категория</span> <br> <?php echo e($subCategory->name); ?></p>
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
        <a href="<?php echo e(route('pages.catalog.category.subcategory', ['category' => $subCategory->slug])); ?>" class="btn btn-next">
            <div class="span-arrow"></div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('front.layouts.pagination', ['paginator' => $subCategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/catalog/components/subcategories-list.blade.php ENDPATH**/ ?>