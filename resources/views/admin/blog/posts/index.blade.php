@extends('admin.layouts.layout')
@section('content')

@php /** @var \App\Models\Blog\Post $posts */@endphp

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Subheader -->

                    {{Breadcrumbs::render('blog')}}

                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-2"></i>
										</span>
                                    <h3 class="kt-portlet__head-title">
                                        Статьи
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        &nbsp;
                                        <div class="dropdown dropdown-inline">
                                            <a href="{{route('admin.blog.posts.create')}}">
                                                <button type="button" class="btn btn-brand btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                                                    <i class="flaticon2-plus"></i> Добавить
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="kt-portlet__body">

                                <!--begin: Search Form -->
                                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 order-2 order-xl-1">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-input-icon kt-input-icon--left">
                                                        <input type="text" class="form-control" placeholder="Поиск..." id="generalSearch">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
                                                    </div>
                                                </div>
                                                {{--<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">--}}
                                                    {{--<div class="kt-form__group kt-form__group--inline">--}}
                                                        {{--<div class="kt-form__label">--}}
                                                            {{--<label>Категория:</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="kt-form__control">--}}
                                                            {{--<select class="form-control bootstrap-select" id="kt_form_status">--}}
                                                                {{--<option value="">Все</option>--}}
                                                                {{--@foreach($posts as $post)--}}
                                                                {{--<option value="{{$post->category['id']}}">{{$post->category['name']}}</option>--}}
                                                                {{--@endforeach--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-form__group kt-form__group--inline">
                                                        <div class="kt-form__label">
                                                            <label>Статус:</label>
                                                        </div>
                                                        <div class="kt-form__control">
                                                            <select class="form-control bootstrap-select" id="kt_form_type">
                                                                <option value="">Все</option>
                                                                <option value="1">Включено</option>
                                                                <option value="0">Отключено</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Search Form -->
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit">

                                <!--begin: Datatable -->
                                <div class="kt-datatable" id="ajax_data"></div>

                                <!--end: Datatable -->
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

    <script>
    
    var KTDatatableLocalSortDemo = function() {
      // Private functions
      // basic demo
      var demo = function() {
        var datatable = $('.kt-datatable').KTDatatable({
          // datasource definition
          data: {
            type: 'local',
            source: <?php echo $posts; ?>,
            pageSize: 10,
          },
          // layout definition
          layout: {
            scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
            footer: false, // display/hide footer
          },
          // column sorting
          sortable: true,
          pagination: true,
          search: {
            input: $('#generalSearch'),
          },
          // columns definition
          columns: [{
            field: 'title',
            title: 'Название',
          },
          // {
          //   field: 'category_name',
          //   title: 'Категория',
          // },
          {
            field: 'status',
            title: 'Статус',
              template: function(data) {
                  return (data.status == 1) ? 'Включено' : 'Отключено';
              },
          },{
            field: 'Actions',
            title: 'Действия',
            sortable: false,
            width: 110,
            overflow: 'visible',
            autoHide: false,
            template: function(data) {
                var url = `admin/blog/posts/${data.id}/edit/`;
                var urls = `admin/blog/posts/${data.id}`;
              return `\
                      <a href="${url}" class="btn-edit btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                          <i class="la la-edit"></i>\
                      </a>\
                      <form method="POST" action="${urls}" style="display:inline-block">\
                      @method('DELETE')
                        @CSRF
                          <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
                              <i class="la la-trash"></i>\
                          </button>\
                      </form>\
                  `;
            },

          }],
        });
        $('#kt_form_status').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'Status');
        });
        $('#kt_form_type').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'Type');
        });
        $('#kt_form_status,#kt_form_type').selectpicker();
      };
      return {
        // public functions
        init: function() {
          demo();
        },
      };
    }();
    jQuery(document).ready(function() {
        KTDatatableLocalSortDemo.init();
    }); 
</script>

@endsection

