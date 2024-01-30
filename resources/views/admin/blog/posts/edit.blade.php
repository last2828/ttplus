@extends('admin.layouts.layout')
@section('content')

@php /** @var \App\Models\Blog\Post $post */@endphp

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Subheader -->

                     {{Breadcrumbs::render('edit-post', $post)}}

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
                                                Edit article
                                            </h3>
                                        </div>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="kt-form" method="POST" action="{{route('admin.blog.posts.update', $post->id)}}">
                                        @method('PATCH')
                                        @CSRF
                                        <div class="kt-portlet__body">
                                            <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Data</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label>Title</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Title" name="title" value="{{$post->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Content</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <div class="summernote" id="kt_summernote_1" title="content">
                                                                {!! $post->content !!}
                                                            </div>
                                                        </div>
                                                        <input type="hidden" id="content" name="content">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label >Meta Title</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Meta Title" name="meta_title" value="{{$post->meta_title}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Meta Description</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <textarea class="form-control" aria-describedby="" placeholder="Meta Description" rows="3" name="meta_description">{{$post->meta_description}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Meta Keywords</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Meta Keywords" name="meta_keywords" value="{{$post->meta_keywords}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Type</label>
                                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_2" name="type_id">
                                                                @php /** @var \App\Models\Blog\PostType $types */@endphp
                                                                @foreach($types as $type)
                                                                <option {{($type->id == $post->type->id) ? 'selected' : ''}} value="{{$type->id}}">{{$type->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label>Image</label>
                                                        <div class="input-group">
                                                            <input type="text" id="image_label" class="form-control" name="image"
                                                                   aria-label="Image" aria-describedby="button-image" value="{{$post->image}}">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label>Slug</label>
                                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                                            <input type="text" class="form-control" aria-describedby="" placeholder="Slug" name="slug" value="{{$post->slug}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-lg-3 col-sm-12">Status</label>
                                                        <div class=" col-lg-4 col-md-9 col-sm-12">
                                                            <select class="form-control kt-select2" id="kt_select2_10" name="status">
                                                                <option value="1">Enabled</option>
                                                                <option {{($post['status'] == 0 ? 'selected' : '')}} value="0">Disabled</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
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

        document.getElementById('button-image').addEventListener('click', (event) => {
          event.preventDefault();

          window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
      });

      // set file link
      function fmSetLink($url) {
        document.getElementById('image_label').value = $url;
      }
    </script>
@endsection
