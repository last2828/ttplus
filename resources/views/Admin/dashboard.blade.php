@extends('admin.layout')
@section('content')

<!-- begin:: Page -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    <!-- begin:: Header -->
    <div class="kt-header kt-grid__item kt-header--fixed" id="kt_header">
        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">
            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-offset="0px,0px" data-toggle="dropdown">
                    <div class="kt-header__topbar-user">
                        <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span> <span class="kt-header__topbar-username kt-hidden-mobile">Admin</span> <img alt="Pic" class="kt-hidden" src="assets/media/users/300_25.jpg"> <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">A</span>
                    </div>
                </div>
            </div>
            <!--end: User Bar -->
        </div>
        <!-- end:: Header Topbar -->
    </div>
    <!-- end:: Header -->
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