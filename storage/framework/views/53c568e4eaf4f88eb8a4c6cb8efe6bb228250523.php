<?php $__env->startSection('content'); ?>
    <section class="info-page">
        <div class="container">

            <?php echo e(Breadcrumbs::render('front-news')); ?>


            <h2>Полезная информация</h2>
            <div class="tabs">
                <ul class="tabs__caption">
                    <li onclick="location.href='<?php echo e(route('pages.posts.index', ['type' => '2'])); ?>'" class="<?php echo e((Request::get('type') == '2' ? 'active' : '')); ?>"><a href="<?php echo e(route('pages.posts.index', ['type' => '2'])); ?>" class="btn tab-button">Документы</a href="<?php echo e(route('pages.posts.index', ['type' => '2'])); ?>"></li>
                    <li onclick="location.href='<?php echo e(route('pages.posts.index', ['type' => '1'])); ?>'" class="<?php echo e((Request::get('type') == '1' ? 'active' : '')); ?>"><a href="<?php echo e(route('pages.posts.index', ['type' => '1'])); ?>" class="btn tab-button">Статьи</a></li>
                    <li onclick="location.href='<?php echo e(route('pages.posts.index', ['type' => '3'])); ?>'" class="<?php echo e((Request::get('type') == '3' ? 'active' : '')); ?>"><a href="<?php echo e(route('pages.posts.index', ['type' => '3'])); ?>" class="btn tab-button">Видео</a></li>
                </ul>
                <div class="tabs__content-mobile">
                <?php /** @var \App\Models\Blog\Post $post */?>
                    <div class="info__cards">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="info__card">
                                <div class="card__image"><img src="<?php echo e($post->image); ?>" alt=""></div>
                                <div class="card__bottom">
                                    <p><?php echo e($post->title); ?><a href="<?php echo e(route('pages.posts.show', $post->slug)); ?>" class="btn btn-primary">Читать полностью</a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo $__env->make('front.layouts.pagination', ['paginator' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/blog/index.blade.php ENDPATH**/ ?>