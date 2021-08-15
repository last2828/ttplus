<div class="tab-pane " id="kt_tabs_1_3" role="tabpanel">
    <label class="col-md-12 col-form-label">Характеристики</label>
    <?php
        /** @var \App\Models\Catalog\Product $product */
        /** @var \Illuminate\Support\ViewErrorBag $errors */
    ?>

    <?php if(isset($product) && !($product->attributes->isEmpty())): ?>
    <div id="kt_repeater_2">
            <div data-repeater-list="attributes_old" class="col-lg-12">
                <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div data-repeater-item class="form-group row align-items-center">
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <p><?php echo e($attribute->name); ?></p><input type="hidden" value="<?php echo e($attribute->id); ?>" name="attribute_id">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <input type="text"
                                       class="form-control <?php echo e(($errors->has('attributes_old.*.value')) ? 'alert alert-outline-danger fade show' : ''); ?>"
                                       role="alert"
                                       placeholder="<?php echo e(($errors->has('attributes_old.*.value')) ? $errors->first('attributes_old.*.value') : 'Введите значение характеристики'); ?>"
                                       name="value" value="<?php echo e($attribute->pivot->value); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                            <i class="la la-trash-o"></i>
                            Удалить
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
    <?php endif; ?>
    <div id="kt_repeater_1">
        <div class="form-group row" id="kt_repeater_1">
            <div data-repeater-list="attributes" class="col-lg-12">
                <div data-repeater-item class="form-group row align-items-center">
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <select name="attribute_id" class="form-control">
                                    <?php echo e(($errors->has('attributes.*.attribute_id')) ? $errors->first('attributes.*.attribute_id') : ''); ?>

                                    <?php /** @var \App\Models\Catalog\ProductAttribute $attribute */ ?>
                                    <?php $__currentLoopData = $selectAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($attribute->id); ?>"><?php echo e($attribute->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kt-form__group--inline">
                            <div class="kt-form__control">
                                <input type="text"
                                       class="form-control <?php echo e(($errors->has('attributes.*.value')) ? 'alert alert-outline-danger fade show' : ''); ?>"
                                       role="alert"
                                       placeholder="<?php echo e(($errors->has('attributes.*.value')) ? $errors->first('attributes.*.value') : 'Введите значение характеристики'); ?>"
                                       name="value">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                            <i class="la la-trash-o"></i>
                            Удалить
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                    <i class="la la-plus"></i> Добавить
                </a>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/catalog/products/components/attributes.blade.php ENDPATH**/ ?>