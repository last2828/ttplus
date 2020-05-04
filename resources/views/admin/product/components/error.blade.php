@if($errors->any())
  <div class="alert alert-outline-danger fade show" role="alert">
    <div class="alert-icon"><i class="flaticon-warning"></i></div>
    <div class="alert-text">Проверьте форму на ошибки</div>
    <div class="alert-text">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif