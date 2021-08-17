@extends('admin.layouts.layout')
@section('content')

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                    {{Breadcrumbs::render('create-category')}}

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
                                                Добавить
                                            </h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="kt-form" method="POST" action="{{route('admin.catalog.product_categories.store')}}">
                                        @CSRF
                                        <div class="kt-portlet__body">
                                            <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Данные</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label>Название категории</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Название категории" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Название(ru)</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Название(ru)" name="name_ru">
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
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords" name="meta_keywords">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Родительская категория</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_2" name="parent_id">
                                                                <option value="" selected>Не выбрано</option>
                                                                @php /** @var \App\Models\Catalog\ProductCategory $item */@endphp
                                                                @foreach($selectCategories as $item)
                                                                    <option value="{{$item->id}}">{{($item->parent) ? '- ' . $item->name : $item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Каталог</label>
                                                        <div class="input-group">
                                                            <input type="text" id="image_label" class="form-control" name="catalog"
                                                                   aria-label="Image" aria-describedby="button-image">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Видео</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Video" name="video" value="{{$category->video}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Slug</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Адрес страницы" name="slug">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Статус</label>
                                                        <div class=" col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_10" name="status">
                                                                <option value="1">Включено</option>
                                                                <option value="0">Отключено</option>
                                                            </select>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-catalog').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('catalog_label').value = $url;
        }
    </script>
@endsection