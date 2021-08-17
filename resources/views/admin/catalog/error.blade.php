@php /** @var \Illuminate\Support\ViewErrorBag $errors */ @endphp
@if ($errors->any())
  <div class="alert alert-outline-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">Проверьте форму на ошибки</div>
    <div class="alert-text">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @elseif (session()->has('success'))
  <div id="feedbackpopupper" class="overlay">
    <div class="popup">
      <a class="close" href="#">&times;</a>
      <p><strong>Спасибо!</strong> Наш менеджер скоро свяжется с вами!</p>
    </div>
  </div>
@endif