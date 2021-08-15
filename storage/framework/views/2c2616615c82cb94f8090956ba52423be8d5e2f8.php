<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <?php echo Meta::toHtml(); ?>

    <link href="<?php echo e(asset('css/front.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/app_new.css')); ?>" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=05eeb1c1-2323-4f87-ab4b-4e54099c8c8b&amp;lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>

    <!--BEGIN out-->
    <div class="out">
      <?php echo $__env->make('front.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->make('admin.catalog.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('front.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!--END out-->

    <!--LOAD SCRIPTS-->
    <script type="text/javascript" src="<?php echo e(asset('js/front.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app_new.js')); ?>"></script>
  </body>
</html>
<?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/layouts/layout.blade.php ENDPATH**/ ?>