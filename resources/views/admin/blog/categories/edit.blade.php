{{--@extends('admin.layouts.layout')--}}
{{--@section('content')--}}

    {{--<!-- begin:: Page -->--}}
    {{--<div class="kt-grid kt-grid--hor kt-grid--root">--}}
        {{--<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">--}}
            {{--<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">--}}
                {{--<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">--}}
                    {{--<!-- begin:: Subheader -->--}}

                    {{--{{Breadcrumbs::render('edit-blog-category', $category)}}--}}

                    {{--<!-- end:: Subheader -->--}}

                    {{--<!-- begin:: Content -->--}}
                    {{--<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12">--}}

                                {{--<!--begin::Portlet-->--}}

                                {{--<div class="kt-portlet">--}}
                                    {{--<div class="kt-portlet__head">--}}
                                        {{--<div class="kt-portlet__head-label">--}}
                                            {{--<h3 class="kt-portlet__head-title">--}}
                                                {{--Изменить категорию--}}
                                            {{--</h3>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--begin::Form-->--}}
                                    {{--<form class="kt-form" method="POST" action="{{route('admin.blog.categories.update', $category->id)}}">--}}
                                        {{--@method('PUT')--}}
                                        {{--@CSRF--}}
                                        {{--<div class="kt-portlet__body">--}}
                                            {{--<ul class="nav nav-tabs  nav-tabs-line" role="tablist">--}}
                                                {{--<li class="nav-item">--}}
                                                    {{--<a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="nav-item">--}}
                                                    {{--<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Данные</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="tab-content">--}}
                                                {{--<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label>Название категории</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<input type="text" class="form-control" aria-describedby="" placeholder="Название категории" name="name" value="{{$category->name}}">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label for="exampleTextarea">Описание</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                                {{--<div class="summernote" id="kt_summernote_1" title="content">{!! $category->content !!}</div>--}}
                                                            {{--</div>--}}
                                                            {{--<input type="hidden" id="content" name="content">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label >Мета-тег Title</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Title" name="meta_title" value="{{$category->meta_title}}">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label>Мета-тег Description</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<textarea class="form-control" aria-describedby="" placeholder="Мета-тег Description" rows="3" name="meta_description">{{$category->meta_description}}</textarea>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label>Мета-тег Keywords</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<input type="text" class="form-control" aria-describedby="" placeholder="Мета-тег Keywords" name="meta_keywords" value="{{$category->meta_keywords}}">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label class="col-form-label col-lg-3 col-sm-12">Родительская категория</label>--}}
                                                        {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
                                                            {{--<select class="form-control kt-select2" id="kt_select2_2" name="parent_id">--}}
                                                                {{--<option value="null">Не выбрано</option>--}}
                                                                {{--@foreach($categories as $cat)--}}
                                                                    {{--@if(!($cat['id'] == $category->id))--}}
                                                                    {{--<option {{($cat['id'] == $category->parent_id) ? 'selected' : ''}} value="{{$cat['id']}}">{{$cat['name']}}</option>--}}
                                                                    {{--@endif--}}
                                                                {{--@endforeach--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label class="col-form-label col-lg-3 col-sm-12">Изображение категории</label>--}}
                                                        {{--<div class="col-lg-4 col-md-9 col-sm-12">--}}
                                                            {{--<div class="dropzone dropzone-default" id="kt_dropzone_1">--}}
                                                                {{--<div class="dropzone-msg dz-message needsclick">--}}
                                                                    {{--<h3 class="dropzone-msg-title">Перетащите файл сюда или нажмите для загрузки</h3>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group row">--}}
                                                        {{--<label>Slug</label>--}}
                                                        {{--<div class="col-lg-12 col-md-9 col-sm-12">--}}
                                                            {{--<input type="text" class="form-control" aria-describedby="" placeholder="Адрес страницы" name="slug" value="{{$category->slug}}">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group form-group-last row">--}}
                                                        {{--<label class="col-form-label col-lg-3 col-sm-12">Статус</label>--}}
                                                        {{--<div class=" col-lg-4 col-md-9 col-sm-12">--}}
                                                            {{--<select class="form-control kt-select2" id="kt_select2_10" name="status">--}}
                                                                {{--<option value="1">Включено</option>--}}
                                                                {{--<option {{($category['status'] == 0 ? 'selected' : '')}} value="0">Отключено</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="kt-portlet__foot">--}}
                                            {{--<div class="kt-form__actions">--}}
                                                {{--<button type="submit" class="btn btn-primary">Сохранить</button>--}}
                                                {{--<button type="reset" class="btn btn-secondary">Отмена</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}

                                    {{--<!--end::Form-->--}}
                                {{--</div>--}}

                                {{--<!--end::Portlet-->--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- end:: Content -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- end:: Page -->--}}

{{--@endsection--}}

{{--@section('script')--}}

    {{--<!--begin::Page Scripts(used by this page) -->--}}
    {{--<script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js')}}" type="text/javascript"></script>--}}

    {{--<!--end::Page Scripts -->--}}

    {{--<!--begin::Page Scripts(used by this page) -->--}}
    {{--<script src="{{asset('assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>--}}

    {{--<!--end::Page Scripts -->--}}

    {{--<script>--}}
        {{--$('#kt_summernote_1').summernote({--}}
            {{--callbacks: {--}}
                {{--onInit: function() {--}}
                    {{--$('#content').val($('#kt_summernote_1').summernote('code'))--}}
                {{--},--}}
                {{--onChange: function(contents, $editable) {--}}
                    {{--$('#content').val(contents)--}}
                {{--}--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}