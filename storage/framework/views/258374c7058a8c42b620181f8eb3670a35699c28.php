<?php if(isset ($category) && empty ($category->parent)): ?>

    <h2><?php echo e($category->name_ru); ?></h2>
    <div class="heading__content">
        <div class="heading__text">
            <?php echo $category->content; ?>

        </div>
        <div class="heading__buttons"><a href="<?php echo e($category->catalog); ?>" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог (<?php echo e($category->name); ?>).pdf</div>
            </a><a href="<?php echo e($category->video); ?>" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="<?php echo e(route('pages.page', $category->slug)); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

<?php elseif(isset($group->category)): ?>

    <h2><?php echo e($group->category->name_ru); ?></h2>
    <div class="heading__content">
        <div class="heading__text">
            <?php echo $group->category->content; ?>

        </div>
        <div class="heading__buttons"><a href="<?php echo e($group->category->parent->catalog); ?>" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог (<?php echo e($group->category->parent->name); ?>).pdf</div>
            </a><a href="<?php echo e($group->category->parent->video); ?>" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="<?php echo e(route('pages.page', $group->category->parent->slug)); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

<?php elseif(isset($category->parent)): ?>

    <h2><?php echo e($category->name_ru); ?></h2>
    <div class="heading__content">
        <div class="heading__text">
            <?php echo $category->content; ?>

        </div>
        <div class="heading__buttons"><a href="<?php echo e($category->parent->catalog); ?>" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог (<?php echo e($category->parent->name); ?>).pdf</div>
            </a><a href="<?php echo e($category->parent->video); ?>" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="<?php echo e(route('pages.page', $category->parent->slug)); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>

<?php endif; ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/catalog/components/description-section.blade.php ENDPATH**/ ?>