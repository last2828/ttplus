<h2><input type="text" name="about" value="{{$about->title}}"></h2>
  <p><input type="text" name="description" value="{{$about->description}}"></p>
  <div class="about__image"><img src="img/about/about-main.png" alt=""></div>
  <h2><input type="text" name="partner_title" value="{{$about->partner_title}}"></h2>
  <p class="partners"><input type="text" name="partner_title_description" value="{{$about->partner_title_description}}"></p>
  <ul>
    @foreach($about->features_content as $feature)
    <li>
      <div class="dot"></div>
      <p><input type="text" name="about" value="{{$feature}}"></p>
    </li>
    @endforeach
  </ul>