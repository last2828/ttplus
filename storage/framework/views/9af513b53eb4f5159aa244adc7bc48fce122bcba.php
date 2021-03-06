<section class="offer">
    <div class="container">
        <form class="offer_form" method="POST" action="<?php echo e(route('pages.offers.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form__container">
                <h2>Индивидуальное предложение</h2>
                <p>Кратко опишите задачу и мы подготовим для Вас индивидуальное предложение:</p>
                <div class="inputs__container">
                    <input type="text" placeholder="Ваше имя" name="name">
                    <input type="tel" placeholder="Ваш телефон" id="tel" name="phone">
                    <input type="email" placeholder="E-mail" name="email">
                    <input type="text" placeholder="Комментарий" name="comment">
                </div>
                <div class="form-bottom">
                    <div class="policy"><input type="checkbox" id="policy-offer" checked class="policy__input"><label for="policy-offer" class="policy__label"></label><label for="policy-offer" class="policy__label--text"><a href="#">Я даю свое согласие на обработку персональных данных</a></label></div>
                    <button type="submit" class="btn btn-form mobilehidden">Получить</button>
                    <div class="intro__bottom desktophidden">
                            <a href="#feedbackpopupper" class="btn btn-form submit__form__btn">Получить</a>
                            <div id="feedbackpopupper" class="overlay">
                                <div class="popup">
                                    <a class="close" href="#">&times;</a>
                                    <p><strong>Спасибо!</strong> Наш менеджер скоро свяжется с вами!</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><?php /**PATH /Users/cyrill/Documents/GitHub/ttplus/resources/views/front/pages/components/offer.blade.php ENDPATH**/ ?>