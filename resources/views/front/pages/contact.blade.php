
@extends('front.layout')
@section('content')
<section class="contacts">
  <div class="container">
    {{ Breadcrumbs::render('front-contact') }}
    <h2>{{$contact->title}}</h2>
    <div class="contacts__content">
      <ul>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Адрес:</h3>
          </div>
          {!! $contact->address !!}
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Телефон:</h3>
          </div>
          <p>{{$contact->phone}}</p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Факс:</h3>
          </div>
          <p>{{$contact->fax}}</p>
        </li>
      </ul>
      <div class="maps">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
@endsection
