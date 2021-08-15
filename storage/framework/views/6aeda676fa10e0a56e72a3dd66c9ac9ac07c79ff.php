<?php /** @var \App\Models\Catalog\Product $product */ ?>
<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
    <div class="form-group row">
        <label>Код товара</label>
        <div class="col-lg-12 col-md-9 col-sm-12">
            <input type="text" class="form-control" aria-describedby="" placeholder="Код товара" name="model" value="<?php echo e((isset($product)) ? $product->model : ''); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Категория</label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
                </div>
                <select class="form-control kt-select2 category-select" id="" name="category_id">
                    <option value="">Не выбрано</option>
                    <?php /** @var \App\Models\Catalog\ProductCategory $category */ ?>
                    <?php $__currentLoopData = $selectCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                    <option id="option-category-<?php echo e($category->id); ?>" <?php echo e((isset($product) && $product->category->id == $category->id) ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e(($category->parent) ? '- ' . $category->name : $category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row" id="product_groups">
        <label class="col-form-label col-lg-3 col-sm-12">Группа товаров</label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <div class="input-group flex-nowrap mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
                </div>
                <select class="form-control kt-select2 group-select" id="" name="group_id">
                    
                    <option value="">Не выбрано</option>
                    <?php /** @var \App\Models\Catalog\ProductGroup $group */ ?>
                    <?php $__currentLoopData = $selectGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                    <option id="option-<?php echo e($group->id); ?>" <?php echo e((isset($product->group_id) && $product->group->id == $group->id) ? 'selected' : ''); ?> value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label>Изображение</label>
        <div class="input-group">
            <input type="text" id="image_label" class="form-control" name="image"
                   aria-label="Image" aria-describedby="button-image">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label>Slug</label>
        <div class="col-lg-12 col-md-9 col-sm-12">
            <input type="text" class="form-control" aria-describedby="" placeholder="Адрес страницы" name="slug" value="<?php echo e((isset($product)) ? $product->slug : ''); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-lg-3 col-sm-12">Статус товара</label>
        <div class=" col-lg-4 col-md-9 col-sm-12">
            <select class="form-control kt-select2" id="kt_select2_10" name="status">
                <option value="1">Включено</option>
                <option
                    <?php if(isset($product)): ?>
                    <?php echo e(($product->status == 0 ? 'selected' : '')); ?>

                    <?php endif; ?>
                    value="0">Отключено
                </option>
            </select>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
    }
</script><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/catalog/products/components/information.blade.php ENDPATH**/ ?>