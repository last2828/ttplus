<?php $__env->startSection('content'); ?>

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


                

                <!-- begin:: Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                                    <h3 class="kt-portlet__head-title">Главная страница</h3>
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form" method="POST" action="<?php echo e(route('admin.info_pages.update', $page->key)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <div class="kt-portlet__body">
                                    <?php echo $__env->make('admin.pages.components.meta-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="form-group row">
                                        <label>Video</label>
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Video" name="head_image" value="<?php echo e((isset($page)) ? $page['head_image'] : ''); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                        <button type="reset" class="btn btn-secondary">Отмена</button>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div><!-- end:: Content -->
        </div>
    </div>
    <!-- end:: Page -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/pages/dunkermotoren.blade.php ENDPATH**/ ?>