<div class="about__quote">
  <div class="quotes"></div>
  <p><input type="text" name="partner_title" value="{{$about->quote_title}}"></p>
</div>
<h2><input type="text" name="partner_title" value="{{$about->years_title}}"></h2>
<div class="about__years">
  @foreach($about->years_content as $k => $year)
  <div class="about__year">
    <div class="year"><input type="text" name="partner_title" value="{{$year['title']}}"></div>
    <p><input type="text" name="partner_title" value="{{$year['description']}}"></p>
  </div>
  @endforeach
</div>
<div class="about__blocks">
  @foreach($about->blocks_content as $k => $block)
  <div class="about__block">
    <h4><input type="text" name="partner_title" value="{{$block['title']}}"></h4>
    <p><input type="text" name="partner_title" value="{{$block['description']}}"></p>
  </div>
  @endforeach
</div>