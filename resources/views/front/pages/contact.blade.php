
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
            <h3>{{$contact->address_title}}</h3>
          </div>
          {!! $contact->address_description !!}
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>{{$contact->phone_title}}</h3>
          </div>
          <p>{{$contact->phone_description}}</p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>{{$contact->fax_title}}</h3>
          </div>
          <p>{{$contact->fax_description}}</p>
        </li>
      </ul>
      <div class="maps">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
@endsection
