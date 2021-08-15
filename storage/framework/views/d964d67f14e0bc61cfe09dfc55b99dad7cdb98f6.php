<?php $__env->startSection('content'); ?>
    <section class="main-catalog__heading">
        <div class="container">
            <?php echo e(Breadcrumbs::render('catalog-brand', $category)); ?>

            <?php echo $__env->make('front.catalog.components.description-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
    <section class="main-catalog__content">
        <div class="container"><a href="#" class="btn btn-single-param__heading btn-filter"><span class="span-text">Фильтры</span><span class="span-arrow"></span></a>

            <aside>
                <?php echo $__env->make('front.catalog.components.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </aside>
            <?php if(Route::current()->parameter('category') == 'dunkermotoren'): ?>
            <div class="products">
                <div class="parameter__names">
                    <div class="param series">
                        <p>Категория</p>
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
            <?php elseif(Route::current()->parameter('category') == 'jianghai'): ?>
            <div class="products">
                <div class="parameter__names">
                    <div class="param series">
                        <p>Категория</p>
                    </div>
                    <div class="param diameter">
                        <p>Capacitance,<br> (µF)</p>
                    </div>
                    <div class="param length">
                        <p>Voltage, <br> (V DC)</p>
                    </div>
                    <div class="param speed">
                        <p>Temperature,<br> (°C)</p>
                    </div>
                    <div class="param moment">
                        <p>Useful Life,<br> (hours)</p>
                    </div>
                </div>
            <?php endif; ?>
                <?php /** @var \App\Models\Catalog\ProductCategory $category */ ?>
                <div class="product__block">
                    <?php echo $__env->make('front.catalog.components.subcategories-list', ['list' => $category, 'categories' => $subCategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/catalog/maincategory.blade.php ENDPATH**/ ?>