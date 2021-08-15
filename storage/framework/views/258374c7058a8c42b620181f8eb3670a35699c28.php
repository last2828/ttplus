<?php if(Route::current()->parameter('category') == 'dunkermotoren'): ?>
    <h2>Электродвигатели Dunkermotoren</h2>
    <div class="heading__content">
        <div class="heading__text">
            <p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p>
            <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании.</p>
            <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификация ISO 9001.</p>
        </div>
        <div class="heading__buttons"><a href="#" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог (Dunkermotoren).pdf</div>
            </a><a href="#" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="<?php echo e(route('pages.page', 'dunkermotoren')); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>
<?php elseif(Route::current()->parameter('category') == 'jianghai'): ?>
    <h2>Конденсаторы Jianghai</h2>
    <div class="heading__content">
        <div class="heading__text">
            <p>Dunkermotoren GmbH - немецкая производственная компания, которая с момента основания в 1950 году специализируется на высокоточных малогабаритных моторах и редукторах.</p>
            <p>Качество, профессионализм, высокий уровень сервиса, ориентированность на потребности клиента, оперативность и высокие экологические стандарты - отличительные черты продукции компании.</p>
            <p>В 1991 Дункенмоторен стал первым производителем в малых моторов в мире прошедших сертификация ISO 9001.</p>
        </div>
        <div class="heading__buttons"><a href="#" class="btn btn-pdf">
                <div class="btn-pdf__img"></div>
                <div class="btn-pdf__text">Общий каталог (Dunkermotoren).pdf</div>
            </a><a href="#" class="btn btn-watch">Смотреть видео</a></div>
    </div><a href="<?php echo e(route('pages.page', 'jianghai')); ?>" class="btn btn-secondary"><span class="sp-arrow"></span><span class="sp-text">Подробнее</span></a>
<?php endif; ?><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/catalog/components/description-section.blade.php ENDPATH**/ ?>