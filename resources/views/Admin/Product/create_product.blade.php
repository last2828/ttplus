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
                                        <div class="form-group">
                                            <label>Название товара</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" aria-describedby="" placeholder="Название товара">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea">Описание</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <div class="summernote" id="kt_summernote_1"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>HTML-тег H1</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" aria-describedby="" placeholder="HTML-тег H1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >Мета-тег Title</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Мета-тег Description</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Мета-тег Keywords</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Код товара</label>
                                            <div class="col-lg-12 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" aria-describedby="" placeholder="Код товара">
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
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK" selected>Alaska</option>
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
                                                        <option value="MT" selected>Montana</option>
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
                                            <label class="col-form-label col-lg-3 col-sm-12">Группа товаров</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"><i class="flaticon2-sms"></i></span>
                                                    </div>
                                                    <select class="form-control kt-select2" id="kt_select2_group_1" name="param">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="kt_repeater_1">
                                            <div class="form-group row" id="kt_repeater_1">
                                                <label class="col-md-12 col-form-label">Характеристики</label>
                                                <div data-repeater-list="" class="col-lg-12">
                                                    <div data-repeater-item class="form-group row align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="kt-form__group--inline">
                                                                <div class="kt-form__control">
                                                                    <input type="email" class="form-control" placeholder="Введите название характеристики">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="kt-form__group--inline">
                                                                <div class="kt-form__control">
                                                                    <input type="text" class="form-control" placeholder="Введите значение характеристики">
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
                                            <div class="form-group row">
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
                                            <div class="form-group form-group-last row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Статус товара</label>
                                                <div class=" col-lg-4 col-md-9 col-sm-12">
                                                    <select class="form-control kt-select2" id="kt_select2_10" name="param">
                                                        <option>Включено</option>
                                                        <option>Отключено</option>
                                                    </select>
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
<script src="assets/js/pages/custom/projects/add-project.js" type="text/javascript"></script>
<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/crud/forms/editors/summernote.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>

<!--end::Page Scripts -->

@endsection