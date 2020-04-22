
@extends('admin.layout')
<link rel="stylesheet" href="">
@section('content')

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
          <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <!-- begin:: Subheader -->
            {{Breadcrumbs::render('blog-categories')}} <!-- end:: Subheader -->
             <!-- begin:: Content -->
            <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
              <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                  <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                    <h3 class="kt-portlet__head-title">О компании</h3>
                  </div>
                  
                </div>
                <div class="kt-portlet__body">
                  <div id="gjs">
                    {!! $html->value !!}
                    <style>{{$css->value}}</style>
                  </div>
                  
                </div>
                
                <div class="kt-portlet__foot">
                  <div class="kt-form__actions">
                    <form class="html_form" action="{{route('about.update')}}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="html" class="html">
                      <input type="hidden" name="css" class="css">
                      <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div><!-- end:: Content -->
          </div>
        </div>
      </div>
    </div>

    <!-- end:: Page -->
@endsection

@section('script')

@endsection

