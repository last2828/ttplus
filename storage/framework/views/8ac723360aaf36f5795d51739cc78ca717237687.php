<?php $__env->startSection('content'); ?>
<section class="about-page">
    <div class="container">

        <?php echo e(Breadcrumbs::render('front-about')); ?>


        <h2><?php echo e($page->title); ?></h2>
        <p><?php echo $page->description; ?></p>
        <div class="about__image"><img src="<?php echo e($page->head_image); ?>" alt=""></div>
        <h2><?php echo e($page->partner_title); ?></h2>
        <p class="partners"><?php echo e($page->partner_title_description); ?></p>
        <ul>
            <?php $__currentLoopData = $page->features_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="dot"></div>
                <p><?php echo e($feature); ?></p>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div class="about__quote">
            <div class="quotes"></div>
            <p><?php echo e($page->quote_title); ?></p>
        </div>
        <h2><?php echo e($page->years_title); ?></h2>
        <div class="about__years">
            <div class="about__year">
                <div class="year"><?php echo e($page->years_1['title']); ?></div>
                <p><?php echo e($page->years_1['description']); ?></p>
            </div>
            <div class="about__year">
                <div class="year"><?php echo e($page->years_2['title']); ?></div>
                <p><?php echo e($page->years_2['description']); ?></p>
            </div>
            <div class="about__year">
                <div class="year"><?php echo e($page->years_3['title']); ?></div>
                <p><?php echo e($page->years_3['description']); ?></p>
            </div>
        </div>
        <div class="about__blocks">
            <div class="about__block">
                <h4><?php echo e($page->blocks_1['title']); ?></h4>
                <p><?php echo e($page->blocks_1['description']); ?></p>
            </div>
            <div class="about__block">
                <h4><?php echo e($page->blocks_2['title']); ?></h4>
                <p><?php echo e($page->blocks_2['description']); ?></p>
            </div>
            <div class="about__block">
                <h4><?php echo e($page->blocks_3['title']); ?></h4>
                <p><?php echo e($page->blocks_3['description']); ?></p>
            </div>
        </div>
    </div>
</section>
    <?php if(isset($awards) & isset($licenses) & isset($shows)): ?>
    <section class="about__documents">
    <div class="tabs">
        <ul class="tabs__caption">
            <li class="active"><a class="btn tab-button">Награды</a></li>
            <li><a class="btn tab-button">Сертификаты и лицензии</a></li>
            <li><a class="btn tab-button">Выставки</a></li>
        </ul>
        <div class="tabs__content about__documents-tab active">
            <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="document"><img src="<?php echo e(asset('storage/' . $award['image'])); ?>" alt=""></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="tabs__content about__documents-tab">
            <?php $__currentLoopData = $licenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="document"><img src="<?php echo e(asset('storage/' . $license['image'])); ?>" alt=""></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="tabs__content about__documents-tab">
            <?php $__currentLoopData = $shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="document"><img src="<?php echo e(asset('storage/' . $show['image'])); ?>" alt=""></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div><a href="<?php echo e(route('pages.page', 'about?limit=all')); ?>" class="btn btn-form">Показать все</a>
    <?php endif; ?>
    <div class="custom-select"><select id="tab-select">
            <option value="awards">Награды</option>
            <option value="certificates">Сертификаты и лицензии</option>
            <option value="exhibitions">Выставки</option>
        </select></div>
    <div id="awards" class="tabs__content-mobile">
        <div class="swiper-mobile">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
            </div>
            <div class="swiper-mobile-pagination"></div>
        </div>
    </div>
    <div id="certificates" class="tabs__content-mobile">
        <div class="swiper-mobile">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
            </div>
            <div class="swiper-mobile-pagination"></div>
        </div>
    </div>
    <div id="exhibitions" class="tabs__content-mobile">
        <div class="swiper-mobile">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
                <div class="swiper-slide">
                    <div class="document__img"><img src="img/about/certificate.png" alt=""></div>
                </div>
            </div>
            <div class="swiper-mobile-pagination"></div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/pages/about.blade.php ENDPATH**/ ?>