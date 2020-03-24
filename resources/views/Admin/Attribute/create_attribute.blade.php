@extends('admin.layout')
@section('content')

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div class="kt-header-mobile kt-header-mobile--fixed" id="kt_header_mobile">
        <div class="kt-header-mobile__logo">
            <a href="index.html"><img alt="Logo" src="assets/media/logos/logo-light.png"></a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button> <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                <div class="kt-header kt-grid__item kt-header--fixed" id="kt_header">
                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: User Bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-offset="0px,0px" data-toggle="dropdown">
                                <div class="kt-header__topbar-user">
                                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span> <span class="kt-header__topbar-username kt-hidden-mobile">Sean</span> <img alt="Pic" class="kt-hidden" src="assets/media/users/300_25.jpg"> <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
                                </div>
                            </div>
                        </div>
                        <!--end: User Bar -->
                    </div>
                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Content Head -->
                    <div class="kt-subheader kt-grid__item" id="kt_subheader">
                        <div class="kt-container kt-container--fluid">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">Add Project</h3><span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">Enter project details and submit</span>
                                </div>
                            </div>
                            <div class="kt-subheader__toolbar">
                                <a class="btn btn-default btn-bold" href="#">Back</a>
                                <div class="btn-group">
                                    <button class="btn btn-brand btn-bold" type="button">Submit</button> <button aria-expanded="false" aria-haspopup="true" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-writing"></i> <span class="kt-nav__link-text">Save &amp; continue</span></a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-medical-records"></i> <span class="kt-nav__link-text">Save &amp; add new</span></a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-hourglass-1"></i> <span class="kt-nav__link-text">Save &amp; exit</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Content Head -->
                    <!-- begin:: Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet">
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" data-ktwizard-state="step-first" id="kt_projects_add">
                                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                                        <!--begin: Form Wizard Form-->
                                        <form class="kt-form" id="kt_projects_add_form" name="kt_projects_add_form">
                                            <!--begin: Form Wizard Step 1-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-state="current" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">
                                                    Project Details:
                                                </div>
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Project Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text" value="Loop CRM">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Project Owner</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text" value="Krox">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Customer Name</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <input class="form-control" type="text" value="Loop Inc."> <span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="la la-phone"></i></span>
                                                                                </div><input aria-describedby="basic-addon1" class="form-control" placeholder="Phone" type="text" value="+45678967456">
                                                                            </div><span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="la la-at"></i></span>
                                                                                </div><input aria-describedby="basic-addon1" class="form-control" placeholder="Email" type="text" value="anna.krox@loop.com">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-group-last row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <input class="form-control" placeholder="Username" type="text" value="loop">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">.com</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end: Form Wizard Step 1-->
                                            <!--begin: Form Wizard Step 2-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <h3 class="kt-section__title kt-section__title-md">Project Settings</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="la la-at"></i></span>
                                                                                </div><input aria-describedby="basic-addon1" class="form-control" placeholder="Email" type="text" value="nick.watson@loop.com">
                                                                            </div><span class="form-text text-muted">Email will not be publicly displayed. <a class="kt-link" href="#">Learn more</a>.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Language</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <select class="form-control">
                                                                                <option>
                                                                                    Select Language...
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Time Zone</label>
                                                                        <div class="col-lg-9 col-xl-9">
                                                                            <select class="form-control">
                                                                                <option data-offset="-39600" value="International Date Line West">
                                                                                    Select time zone...
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group form-group-last row">
                                                                        <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <div class="kt-checkbox-inline">
                                                                                <label class="kt-checkbox"><input checked type="checkbox"> Email <span></span></label> <label class="kt-checkbox"><input checked type="checkbox"> SMS <span></span></label> <label class="kt-checkbox"><input type="checkbox"> Phone <span></span></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 2-->
                                            <!--begin: Form Wizard Step 3-->
                                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">
                                                    Setup Your Address
                                                </div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v1__form">
                                                        <div class="form-group">
                                                            <label>Address Line 1</label> <input class="form-control" name="address1" placeholder="Address Line 1" type="text" value="Address Line 1"> <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address Line 2</label> <input class="form-control" name="address2" placeholder="Address Line 2" type="text" value="Address Line 2"> <span class="form-text text-muted">Please enter your Address.</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Postcode</label> <input class="form-control" name="postcode" placeholder="Postcode" type="text" value="2000"> <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>City</label> <input class="form-control" name="state" placeholder="City" type="text" value="London"> <span class="form-text text-muted">Please enter your City.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>State</label> <input class="form-control" name="state" placeholder="State" type="text" value="VIC"> <span class="form-text text-muted">Please enter your Postcode.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Country:</label> <select class="form-control" name="country">
                                                                        <option value="">
                                                                            Select
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 3-->
                                            <!--begin: Form Actions -->
                                            <div class="kt-form__actions">
                                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                    Previous
                                                </div>
                                                <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                                    Submit
                                                </div>
                                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                                    Next Step
                                                </div>
                                            </div>
                                            <!--end: Form Actions -->
                                        </form>
                                        <!--end: Form Wizard Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Page -->

@endsection

@section('script')

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/projects/add-project.js" type="text/javascript"></script>
    <!--end::Page Scripts -->

@endsection