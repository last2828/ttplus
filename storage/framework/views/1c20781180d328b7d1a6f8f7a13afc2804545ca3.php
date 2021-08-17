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
                                    <h3 class="kt-portlet__head-title">О компании</h3>
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form" method="POST" action="<?php echo e(route('admin.info_pages.update', $page->key)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <div class="kt-portlet__body">
                                    <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Преимущества</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Даты и события</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4" role="tab">Награды</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5" role="tab">Сертификаты и лицензии</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_6" role="tab">Выставки</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                            <label>Заголовок и описание</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок" name="title" value="<?php echo e((isset($page)) ? $page['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <?php echo $__env->make('admin.pages.components.meta-tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание" rows="3" name="description"><?php echo e((isset($page)) ? $page['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="about__image"><img src="<?php echo e($page->head_image); ?>" alt="" width="100%"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group">
                                                    <input type="text" id="image_label" class="form-control image_label" name="head_image"
                                                           aria-label="Image" aria-describedby="button-image" value="<?php echo e($page->head_image); ?>">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary button-image" type="button" id="button-image">Select</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                            <label>Партнеры</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Партнеры" name="partner_title" value="<?php echo e((isset($page)) ? $page['partner_title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Цитата" rows="3" name="partner_title_description"><?php echo e((isset($page)) ? $page['partner_title_description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Преимущества</label>
                                            <?php $__currentLoopData = $page->features_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <textarea class="form-control" aria-describedby="" placeholder="Преимущества" rows="3" name="features_content[]"><?php echo e($feature); ?></textarea>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <label>Цитата</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Цитата" rows="3" name="quote_title"><?php echo e((isset($page)) ? $page['quote_title'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                                            <label>Заголовок</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Даты" name="years_title" value="<?php echo e((isset($page)) ? $page['years_title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <label>Дата 1</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="years_1[title]" value="<?php echo e((isset($page)) ? $page->years_1['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="years_1[description]"><?php echo e((isset($page)) ? $page->years_1['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Дата 2</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 2" name="years_2[title]" value="<?php echo e((isset($page)) ? $page->years_2['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 2" rows="3" name="years_2[description]"><?php echo e((isset($page)) ? $page->years_2['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Дата 3</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 3" name="years_3[title]" value="<?php echo e((isset($page)) ? $page->years_3['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 3" rows="3" name="years_3[description]"><?php echo e((isset($page)) ? $page->years_3['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Событие 1</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_1[title]" value="<?php echo e((isset($page)) ? $page->blocks_1['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_1[description]"><?php echo e((isset($page)) ? $page->blocks_1['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Событие 2</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_2[title]" value="<?php echo e((isset($page)) ? $page->blocks_2['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_2[description]"><?php echo e((isset($page)) ? $page->blocks_2['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                            <label>Событие 3</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_3[title]" value="<?php echo e((isset($page)) ? $page->blocks_3['title'] : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_3[description]"><?php echo e((isset($page)) ? $page->blocks_3['description'] : ''); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
                                            <label>Награды</label>
                                            <input type="hidden" id="count" value="<?php echo e(count($awards) ? count($awards) : 0); ?>">
                                            <div class="col-lg-12">
                                                <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($award['image'] == null): ?>
                                                        <?php continue; ?>
                                                    <?php endif; ?>
                                                    <div class="form-group row align-items-center image_row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                            <div class="about__image"><img src="<?php echo e($award['image']); ?>" alt="" width="50%"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="custom-file">
                                                                <input type="text" class="custom-file-input" id="image_rewards_<?php echo e($key); ?>" name="old_rewards[<?php echo e($key); ?>]" value="<?php echo e($award['image']); ?>">
                                                                <label class="custom-file-label" for="image_rewards_<?php echo e($key); ?>"><?php echo e($award['image'] ? $award['image'] : "Выбирете файл"); ?></label>
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
                                            <div id="kt_repeater_1">
                                                <div data-repeater-list="awards" class="col-lg-12">
                                                    <div data-repeater-item class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                            <div class="about__image"><img src="" alt="" width="50%"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="image_label" class="custom-file-input form-control image_label" name="image"
                                                                           aria-label="Image" aria-describedby="button-image">
                                                                        <label class="custom-file-label" for="image_rewards">Выбирите файл</label>
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
                                                    <a href="javascript:;" data-repeater-create="" id="add" class="btn btn-bold btn-sm btn-label-brand">
                                                        <i class="la la-plus"></i> Добавить
                                                    </a>
                                                </div>
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
                    </div>
                </div>
            </div><!-- end:: Content -->
        </div>
    </div>
    <!-- end:: Page -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    

    <script src="<?php echo e(asset('assets/js/pages/crud/forms/widgets/form-repeater.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/pages/about.blade.php ENDPATH**/ ?>