<?php /** @var \Illuminate\Support\ViewErrorBag $errors */ ?>
<?php if($errors->any()): ?>
  <div class="alert alert-outline-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">Проверьте форму на ошибки</div>
    <div class="alert-text">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  </div>
  <?php elseif(session()->has('success')): ?>
  <div class="alert alert-outline-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text"><?php echo e(session('success')); ?></div>
  </div>
<?php endif; ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/catalog/error.blade.php ENDPATH**/ ?>