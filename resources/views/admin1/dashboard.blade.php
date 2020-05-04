@extends('admin.layout')
@section('content')

<!-- begin:: Page -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-container kt-container--fluid">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">Empty Page</h3><span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a class="kt-subheader__breadcrumbs-home" href="#"><i class="flaticon2-shelter"></i></a> <span class="kt-subheader__breadcrumbs-separator"></span> <a class="kt-subheader__breadcrumbs-link" href="">General</a> <span class="kt-subheader__breadcrumbs-separator"></span> <a class="kt-subheader__breadcrumbs-link" href="">Empty Page</a> <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link==active">Active link</span> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->
    </div>
</div>
<!-- end:: Page -->

@endsection

@section('script')

    <!--begin::Page Vendors(used by this page) -->
    <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{asset('assets/js/pages/dashboard.js')}}" type="text/javascript"></script>

    <!--end::Page Scripts -->

@endsection