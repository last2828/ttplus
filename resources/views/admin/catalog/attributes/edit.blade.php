@extends('admin.layouts.layout')
@section('content')

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                    {{Breadcrumbs::render('edit-attribute', $attribute)}}

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
                                                Изменить
                                            </h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="kt-form" method="POST" action="{{route('admin.catalog.attributes.update', $attribute->id)}}">
                                        @method('PUT')
                                        @CSRF
                                        <div class="kt-portlet__body">
                                            <div class="form-group form-group row">
                                                <label>Название характеристики</label>
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text"
                                                           class="form-control {{($errors->has('name')) ? 'alert alert-outline-danger fade show' : ''}}"
                                                           aria-describedby=""
                                                           placeholder="{{ ($errors->has('name')) ? $errors->first('name') : 'Название характеристики' }}"
                                                           name="name"
                                                           value="{{($errors->has('name')) ? old('name') : $attribute['name']}}">
                                                </div>
                                            </div>
                                            <div class="form-group form-group-last row">
                                                <label>Еденицы измерения</label>
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text"
                                                           class="form-control {{($errors->has('units')) ? 'alert alert-outline-danger fade show' : ''}}"
                                                           aria-describedby=""
                                                           placeholder="{{ ($errors->has('units')) ? $errors->first('units') : 'Еденицы измерения' }}"
                                                           name="units"
                                                           value="{{($errors->has('name')) ? old('name') : $attribute['units']}}">
                                                </div>
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