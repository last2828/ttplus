<?php $__env->startSection('content'); ?>
  <section class="articles">
    <div class="container">

      <?php echo e(Breadcrumbs::render('front-post', $post)); ?>


      <?php
        /**
        * @var \App\Models\Blog\Post $post
        * @var \App\Models\Blog\Post $belowPost
        * @var \App\Models\Blog\Post $abovePost
        */
      ?>

      <h2><?php echo e($post->title); ?></h2>
      <div class="articles__content">
        <div class="article">
          <div class="article__image"><img src="<?php echo e($post->image); ?>" alt=""></div>
          <div class="article__text">
            <?php echo $post->content; ?>

          </div>
          <div class="article__bottom">
            <?php if(isset($belowPost)): ?>
            <a href="<?php echo e(route('pages.posts.show', $belowPost->slug)); ?>" class="btn btn-prev"><span class="span-arrow"></span><span class="span-text">Предыдущая статья</span></a>
            <?php endif; ?>
            <?php if(isset($abovePost)): ?>
            <a href="<?php echo e(route('pages.posts.show', $abovePost->slug)); ?>" class="btn btn-next"><span class="span-text">Следующая статья</span><span class="span-arrow"></span></a>
            <?php endif; ?>
          </div>
        </div>
        <aside>
          <?php if(isset($belowPost)): ?>
            <div class="aside-card">
              <div class="aside-card__image"><img src="<?php echo e($belowPost->image); ?>" alt=""></div>
              <div class="aside-card__content">
                <p><?php echo e($belowPost->title); ?></p>
              </div><a href="<?php echo e(route('pages.posts.show', $belowPost->slug)); ?>" class="btn btn-primary">Читать</a>
            </div>
          <?php endif; ?>
          <?php if(isset($abovePost)): ?>
            <div class="aside-card">
              <div class="aside-card__image"><img src="<?php echo e($abovePost->image); ?>" alt=""></div>
              <div class="aside-card__content">
                <p><?php echo e($abovePost->title); ?></p>
              </div><a href="<?php echo e(route('pages.posts.show', $abovePost->slug)); ?>" class="btn btn-primary">Читать</a>
            </div>
          <?php endif; ?>
        </aside>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/blog/post.blade.php ENDPATH**/ ?>