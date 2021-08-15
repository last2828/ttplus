<?php $__env->startSection('content'); ?>
<section class="contacts">
  <div class="container">
    <?php echo e(Breadcrumbs::render('front-contact')); ?>

    <h2><?php echo e($page->title); ?></h2>
    <div class="contacts__content">
      <ul>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Адрес:</h3>
          </div>
          <?php echo $page->address; ?>

        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Телефон:</h3>
          </div>
          <p><?php echo e($page->phone); ?></p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Факс:</h3>
          </div>
          <p><?php echo e($page->fax); ?></p>
        </li>
      </ul>
      <div class="maps">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/pages/contact.blade.php ENDPATH**/ ?>