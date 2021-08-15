<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="#" class="btn btn-single-param__heading"><span class="span-text"><?php echo e($attribute->name); ?></span><span class="span-arrow"></span></a>
<div class="single-param__content checkboxes">
    <form>
        <?php $__currentLoopData = $attribute->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="checkbox">
            <input type="checkbox" id="param-2" class="checkbox__input">
            <label for="param-2" class="checkbox__label"></label>
            <label for="param-2" class="checkbox__label--text">
                <p><?php echo e($product->pivot->value); ?></p>
            </label>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
</div>
<div id="type__content" class="single-param__content"></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="btn btn-underline">Очистить фильтр</div><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/catalog/components/filter.blade.php ENDPATH**/ ?>