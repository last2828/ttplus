<?php $__env->startSection('content'); ?>

<?php /** @var \App\Models\Blog\Post $post */?>

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                     <?php echo e(Breadcrumbs::render('edit-post', $post)); ?>


                    <!-- end:: Subheader -->

                    <?php echo $__env->make('admin.catalog.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <!--begin::Portlet-->

                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Изменить статью
                                            </h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="kt-form" method="POST" action="<?php echo e(route('admin.blog.posts.update', $post->id)); ?>">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <div class="kt-portlet__body">
                                            <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Данные</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label>Название статьи</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Название статьи" name="title" value="<?php echo e($post->title); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Описание</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <div class="summernote" id="kt_summernote_1" title="content">
                                                                <?php echo $post->content; ?>

                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="content" name="content">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label >Мета-тег Title</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title" name="meta_title" value="<?php echo e($post->meta_title); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Мета-тег Description</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3" name="meta_description"><?php echo e($post->meta_description); ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Мета-тег Keywords</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords" name="meta_keywords" value="<?php echo e($post->meta_keywords); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Тип записи</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_2" name="type_id">
                                                                <?php /** @var \App\Models\Blog\PostType $types */?>
                                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php echo e(($type->id == $post->type->id) ? 'selected' : ''); ?> value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Изображение статьи</label>
                                                        <div class="input-group">
                                                            <input type="text" id="image_label" class="form-control" name="image"
                                                                   aria-label="Image" aria-describedby="button-image" value="<?php echo e($post->image); ?>">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label>Slug</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Адрес страницы" name="slug" value="<?php echo e($post->slug); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Статус</label>
                                                        <div class=" col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_10" name="status">
                                                                <option value="1">Включено</option>
                                                                <option <?php echo e(($post['status'] == 0 ? 'selected' : '')); ?> value="0">Отключено</option>
                                                            </select>
                                                        </div>
                                                    </div>
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

                                <!--end::Portlet-->

                            </div>
                        </div>
                    </div>
                    <!-- end:: Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Page -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('assets/js/pages/crud/forms/editors/summernote.js')); ?>" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo e(asset('assets/js/pages/crud/forms/widgets/select2.js')); ?>" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <script>
        $('#kt_summernote_1').summernote({
            callbacks: {
                onInit: function() {
                    $('#content').val($('#kt_summernote_1').summernote('code'))
                },
                onChange: function(contents, $editable) {
                    $('#content').val(contents)
                }
            }
        });
    </script>
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/blog/posts/edit.blade.php ENDPATH**/ ?>