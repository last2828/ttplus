@extends('admin.layout')
@section('content')

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                    {{Breadcrumbs::render('create-group')}}

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
                                    <form class="kt-form" method="POST" action="{{route('groups.store')}}">
                                        @CSRF
                                        <div class="kt-portlet__body">
                                            <div class="form-group row">
                                                <label>Название группы</label>
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" aria-describedby="" placeholder="Название группы" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">Категория</label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <select class="form-control kt-select2" id="kt_select2_2" name="category_id">
                                                        @foreach($categories as $category)
                                                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-last row">
                                                <label>Slug</label>
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" aria-describedby="" placeholder="slug" name="slug">
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