@extends('admin.layouts.layout')
@section('content')

<!-- begin:: Page -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- begin:: Subheader -->

                {{Breadcrumbs::render('create-product')}}

                <!-- end:: Subheader -->

                @include('admin.catalog.error')

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <!--begin::Portlet-->

                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Новый товар
                                        </h3>
                                    </div>
                                </div>
                                <!--begin::Form-->
                                <form class="kt-form" method="POST" action="{{route('admin.catalog.products.store')}}" enctype="multipart/form-data">
                                    @CSRF
                                    <div class="kt-portlet__body">
                                        <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Данные</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Характеристики</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            @include('admin.catalog.products.components.general')
                                            @include('admin.catalog.products.components.information')
                                            @include('admin.catalog.products.components.attributes')
                                        </div>
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

                            <!--end::Portlet-->

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

<script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/crud/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<script>
    $('#kt_summernote_1').summernote({
        callbacks: {
            onInit: function() {
                $('#content').val($('#kt_summernote_1').summernote('code'))
            },
            onChange: function(contents, $editable) {
                $('#content').val(contents)
            }
        }
    });
</script>

@endsection