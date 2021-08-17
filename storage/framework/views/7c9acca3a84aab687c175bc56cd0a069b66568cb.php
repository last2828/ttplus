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
  <div id="feedbackpopupper" class="overlay">
    <div class="popup">
      <a class="close" href="#">&times;</a>
      <p><strong>Спасибо!</strong> Наш менеджер скоро свяжется с вами!</p>
    </div>
  </div>
<?php endif; ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/admin/catalog/error.blade.php ENDPATH**/ ?>