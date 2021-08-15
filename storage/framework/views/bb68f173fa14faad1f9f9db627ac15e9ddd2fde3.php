<?php /** @var \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs $breadcrumbs  */?>
<?php if(count($breadcrumbs) && $breadcrumbs->first()->front == true): ?>

  <div class="breadcrumbs">
    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($breadcrumb->url && !$loop->last): ?>
        <a href="<?php echo e($breadcrumb->url); ?>" class="btn"> <?php echo e($breadcrumb->title); ?> /&nbsp;</a>
      <?php else: ?>
        <p class="breadcrumbs__current"> <?php echo e($breadcrumb->title); ?></p>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

<?php elseif(count($breadcrumbs) && $breadcrumbs->first()->front == false): ?>
  <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">

      <div class="kt-subheader__main">
        <div class="kt-subheader__breadcrumbs">
          <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($breadcrumb->url && !$loop->last): ?>
              <a href="<?php echo e($breadcrumb->url); ?>" class="kt-subheader__breadcrumbs-link">
                <?php echo e($breadcrumb->title); ?></a>
              <span class="kt-subheader__breadcrumbs-separator"></span>
            <?php else: ?>
              <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active"><?php echo e($breadcrumb->title); ?></span>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/layouts/breadcrumbs.blade.php ENDPATH**/ ?>