@extends('front.layouts.layout')
@section('content')
<section class="contacts">
  <div class="container">
    {{ Breadcrumbs::render('front-contact') }}
    <h2>{{$page->title}}</h2>
    <div class="contacts__content">
      <ul>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Address:</h3>
          </div>
          {!! $page->address !!}
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Phone:</h3>
          </div>
          <p>{{$page->phone}}</p>
        </li>
        <li>
          <div class="contacts-heading">
            <div class="dot"></div>
            <h3>Fax:</h3>
          </div>
          <p>{{$page->fax}}</p>
        </li>
      </ul>
      <div class="maps">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
@endsection
