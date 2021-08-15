<?php
    /** @var \App\Models\Catalog\ProductCategory $category */
    /** @var \App\Models\Catalog\ProductCategory $child */
?>

<?php $__currentLoopData = $categoriesAside; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!$category->children->isEmpty()): ?>
        <div class="parameters__card">
            <div class="card__heading">
                <h4><?php echo e($category->name_ru); ?></h4>
            </div>
            <div class="card__content">
                <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('pages.catalog.category.subcategory', $child->slug)); ?>" class="btn btn-simple"><?php echo e($child->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/catalog/components/aside.blade.php ENDPATH**/ ?>