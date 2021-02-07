<section class="offer">
    <div class="container">
        <form method="POST" action="{{route('pages.offers.store')}}">
            @csrf
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
                    <button type="submit" class="btn btn-form">Получить</button>
                </div>
            </div>
        </form>
    </div>
</section>