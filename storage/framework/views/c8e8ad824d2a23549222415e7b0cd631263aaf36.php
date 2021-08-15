<?php $__env->startSection('content'); ?>

  <!-- begin:: Page -->
  <div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
          <!-- begin:: Subheader -->

        

        <!-- end:: Subheader -->

          <!-- begin:: Content -->
          <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
              <div class="col-md-12">

                <!--begin::Portlet-->

                <div class="kt-portlet">
                  <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                      <h3 class="kt-portlet__head-title">
                        Контакты
                      </h3>
                    </div>
                  </div>
                  <!--begin::Form-->
                  <form class="kt-form" method="POST" action="<?php echo e(route('admin.info_pages.update', $page->key)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="kt-portlet__body">
                      <div class="form-group row">
                        <label>Заголовок</label>
                        <div class="col-lg-12 col-md-9 col-sm-12">
                          <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок" name="title" value="<?php echo e((isset($page)) ? $page['title'] : ''); ?>">
                        </div>
                      </div>
                      <?php echo $__env->make('admin.pages.components.meta-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <div class="form-group row">
                        <label>Адрес</label>
                        <div class="col-lg-12 col-md-9 col-sm-12">
                          <textarea class="form-control" aria-describedby="" placeholder="Адрес" rows="5" name="address"><?php echo e((isset($page)) ? $page['address'] : ''); ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label>Телефон</label>
                        <div class="col-lg-12 col-md-9 col-sm-12">
                          <input type="text" class="form-control" aria-describedby="" placeholder="Телефон" name="phone" value="<?php echo e((isset($page)) ? $page['phone'] : ''); ?>">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label>Факс</label>
                        <div class="col-lg-12 col-md-9 col-sm-12">
                          <input type="text" class="form-control" aria-describedby="" placeholder="Факс" name="fax" value="<?php echo e((isset($page)) ? $page['fax'] : ''); ?>">
                        </div>
                      </div>
                      <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                          <button type="submit" class="btn btn-primary">Сохранить</button>
                          <button type="reset" class="btn btn-secondary">Отмена</button>
                        </div>
                      </div>
                    </div>
                  </form>

                  <!--end::Form-->
                </div>

                <!--end::Portlet-->

              </div>
            </div>
          </div>
          <!-- end:: Content -->
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/pages/contact.blade.php ENDPATH**/ ?>