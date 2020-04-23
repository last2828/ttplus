@extends('admin.layout')
@section('content')

<!-- begin:: Page -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- begin:: Subheader -->

                {{Breadcrumbs::render('create-product')}}

                <!-- end:: Subheader -->

                @include('admin.product.components.error')

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
                                <form class="kt-form" method="POST" action="{{route('products.store')}}">
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
                                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Связи</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4" role="tab">Характеристики</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5" role="tab">Изображения</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            @include('admin.product.components.general')
                                            @include('admin.product.components.information')
                                            @include('admin.product.components.relation')
                                            <div class="tab-pane " id="kt_tabs_1_4" role="tabpanel">
                                                <div id="kt_repeater_1" class="product-attributes">
                                                    <div class="form-group row" id="kt_repeater_1">
                                                        <label class="col-md-12 col-form-label">Характеристики</label>
                                                        <div data-repeater-list="attributes" class="col-lg-12">
                                                            <div data-repeater-item class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <div class="kt-form__group--inline">
                                                                        <div class="kt-form__control">
                                                                            <select name="attribute_id" class="form-control">
                                                                                @foreach($attributes as $attribute)
                                                                                    <option value="{{$attribute->id}}">{{$attribute->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="kt-form__group--inline">
                                                                        <div class="kt-form__control">
                                                                            <input type="text"
                                                                                   class="form-control {{($errors->has('attributes.*.value')) ? 'alert alert-outline-danger fade show' : ''}}"
                                                                                   role="alert"
                                                                                   placeholder="{{ ($errors->has('attributes.*.value')) ? $errors->first('attributes.*.value') : 'Введите значение характеристики'}}"
                                                                                   name="value">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                                                                        <i class="la la-trash-o"></i>
                                                                        Удалить
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                                                <i class="la la-plus"></i> Добавить
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="kt_tabs_1_5" role="tabpanel">
                                                <div class="form-group form-group-last row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Дополнительные изображения</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
                                                            <div class="dropzone-msg dz-message needsclick">
                                                                <h3 class="dropzone-msg-title">Перетащите файлы сюда или нажмите для загрузки</h3>
                                                                <span class="dropzone-msg-desc">Загрузка до 10 файлов</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

@section('script')

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
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