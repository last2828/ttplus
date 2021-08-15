<?php /** @var \Illuminate\Pagination\Paginator $paginator */?>
<?php if($paginator->lastPage() > 1): ?>
<div class="info__bottom">
    <?php if(!($paginator->onFirstPage())): ?>
    <a href="<?php echo e($paginator->url($paginator->currentPage()-1)); ?>" class="btn btn-prev">
        <span class="span-arrow disabled"></span>
        <span class="span-text disabled">Предыдущая страница</span>
    </a>
    <?php endif; ?>
    <?php if(($paginator->currentPage() !== $paginator->lastPage())): ?>
    <a href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" class="btn btn-next">
        <span class="span-text">Следующая страница</span>
        <span class="span-arrow"></span>
    </a>
    <?php endif; ?>
</div>
<?php endif; ?><?php /**PATH /home/d/dmitryty/test.palmeri.us/resources/views/front/layouts/pagination.blade.php ENDPATH**/ ?>