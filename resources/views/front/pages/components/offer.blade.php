<section class="offer">
    <div class="container">
        <form class="offer_form" method="POST" action="{{route('pages.offers.store')}}">
            @csrf
            <div class="form__container">
                <h2>Customized offer</h2>
                <p>Briefly describe the task and we will prepare a customized proposal for you:</p>
                <div class="inputs__container">
                    <input type="text" placeholder="Full name" name="name">
                    <input type="tel" placeholder="Phone" id="tel" name="phone">
                    <input type="email" placeholder="E-mail" name="email">
                    <input type="text" placeholder="Comment" name="comment">
                </div>
                <div class="form-bottom">
                    <div class="policy"><input type="checkbox" id="policy-offer" checked class="policy__input"><label for="policy-offer" class="policy__label"></label><label for="policy-offer" class="policy__label--text"><a href="#">I give my consent to the processing of personal data</a></label></div>
                    <button type="submit" class="btn btn-form mobilehidden">Receive</button>
                    <div class="intro__bottom desktophidden">
                            <a href="#feedbackpopupper" class="btn btn-form submit__form__btn">Receive</a>
                            <div id="feedbackpopupper" class="overlay">
                                <div class="popup">
                                    <a class="close" href="#">&times;</a>
                                    <p><strong>Thanks!</strong> Our manager will be in touch with you shortly!</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
