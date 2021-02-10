@extends('admin.layouts.layout')
@section('content')

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


                {{--{{Breadcrumbs::render('info-page', $page)}}--}}

                <!-- begin:: Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                                    <h3 class="kt-portlet__head-title">Главная страница</h3>
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form" method="POST" action="{{route('admin.info_pages.update', $page->key)}}" enctype="multipart/form-data">
                                @CSRF
                                @method('PATCH')
                                <div class="kt-portlet__body">
                                    @include('admin.pages.components.meta-tags')
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                        <button type="reset" class="btn btn-secondary">Отмена</button>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div><!-- end:: Content -->
        </div>
    </div>
    <!-- end:: Page -->
@endsection