@extends('admin.layout')
@section('content')

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-subheader__main">
                                <h3 class="kt-subheader__title">
                                    Base Controls </h3>
                                <span class="kt-subheader__separator kt-hidden"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Crud </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Forms & Controls </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Form Controls </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Base Inputs </a>

                                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                Добавить
                                            </h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="kt-form">
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
                                                        <label>Название статьи</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Название статьи">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleTextarea">Описание</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <div class="summernote" id="kt_summernote_1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>HTML-тег H1</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="HTML-тег H1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label >Мета-тег Title</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Мета-тег Description</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Мета-тег Keywords</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Главная категория</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_2" name="param">
                                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                    <option value="AK">Alaska</option>
                                                                    <option value="HI">Hawaii</option>
                                                                </optgroup>
                                                                <optgroup label="Pacific Time Zone">
                                                                    <option value="CA">California</option>
                                                                    <option value="NV" selected>Nevada</option>
                                                                    <option value="OR">Oregon</option>
                                                                    <option value="WA">Washington</option>
                                                                </optgroup>
                                                                <optgroup label="Mountain Time Zone">
                                                                    <option value="AZ">Arizona</option>
                                                                    <option value="CO">Colorado</option>
                                                                    <option value="ID">Idaho</option>
                                                                    <option value="MT">Montana</option>
                                                                    <option value="NE">Nebraska</option>
                                                                    <option value="NM">New Mexico</option>
                                                                    <option value="ND">North Dakota</option>
                                                                    <option value="UT">Utah</option>
                                                                    <option value="WY">Wyoming</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Показывать в категориях</label>
                                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
                                                                <option value="AK" selected>Главная категория</option>
                                                                <option value="HI">Категория 2</option>
                                                                <option value="HI">Категория 3</option>
                                                                <option value="HI">Категория 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Изображение статьи</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                                                <div class="dropzone-msg dz-message needsclick">
                                                                    <h3 class="dropzone-msg-title">Перетащите файл сюда или нажмите для загрузки</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label>URL</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="url" class="form-control" aria-describedby="" placeholder="URL">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Статус</label>
                                                        <div class=" col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_10" name="param">
                                                                <option>Включено</option>
                                                                <option>Отключено</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <button type="reset" class="btn btn-primary">Сохранить</button>
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
    <script src="assets/js/pages/crud/forms/editors/summernote.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

@endsection