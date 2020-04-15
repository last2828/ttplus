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
                                            <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                <div class="form-group row">
                                                    <label>Название товара</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" aria-describedby="" placeholder="Название товара" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleTextarea">Описание</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <div class="summernote" id="kt_summernote_1" title="content"></div>
                                                        </div>
                                                        <input type="hidden" id="content" name="content">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label >Мета-тег Title</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title" name="meta_title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label>Мета-тег Description</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3" name="meta_description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label>Мета-тег Keywords</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords" name="meta_keyword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                <div class="form-group row">
                                                    <label>Код товара</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" aria-describedby="" placeholder="Код товара" name="model">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Изображение товара</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                                            <div class="dropzone-msg dz-message needsclick">
                                                                <h3 class="dropzone-msg-title">Перетащите файл сюда или нажмите для загрузки</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label>Slug</label>
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <input type="text" class="form-control" aria-describedby="" placeholder="slug" name="slug">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Статус товара</label>
                                                    <div class=" col-lg-4 col-md-9 col-sm-12">
                                                        <select class="form-control kt-select2" id="kt_select2_10" name="status">
                                                            <option selected value="1">Включено</option>
                                                            <option value="0">Отключено</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Главная категория</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <select class="form-control kt-select2" id="kt_select2_2" name="category_id">
                                                            <option selected value="null">Не выбрано</option>
                                                            @foreach($categories as $category):
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-lg-3 col-sm-12">Группа товаров</label>
                                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                                        <div class="input-group flex-nowrap mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="flaticon2-graph-2"></i></span>
                                                            </div>
                                                            <select class="form-control kt-select2" id="kt_select2_group_1" name="group_id">
                                                                <option selected value="null">Не выбрано</option>
                                                                @foreach($groups as $group):
                                                                <option value="{{$group->id}}">{{$group->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="kt_tabs_1_4" role="tabpanel">
                                                <div id="kt_repeater_1" class="product-attributes">
                                                    <div class="form-group row" id="kt_repeater_1">
                                                        <label class="col-md-12 col-form-label">Характеристики</label>
                                                        <div data-repeater-list="list" class="col-lg-12">
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
                                                                            <input type="text" class="form-control" placeholder="Введите значение характеристики" name="value">
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