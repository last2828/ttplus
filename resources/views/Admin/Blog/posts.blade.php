
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
                                    Local Sort </h3>
                                <span class="kt-subheader__separator kt-hidden"></span>
                                <div class="kt-subheader__breadcrumbs">
                                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Crud </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        KTDatatable </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Base </a>
                                    <span class="kt-subheader__breadcrumbs-separator"></span>
                                    <a href="" class="kt-subheader__breadcrumbs-link">
                                        Local Sort </a>

                                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                                    <h3 class="kt-portlet__head-title">
                                        Sorting
                                        <small>Sorting in local datasource</small>
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <a href="#" class="btn btn-clean btn-icon-sm">
                                            <i class="la la-long-arrow-left"></i>
                                            Back
                                        </a>
                                        &nbsp;
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon2-plus"></i> Add New
                                            </button>
                                        </div>
                                        <a href="{{route('posts.edit', 1)}}">
                                            <i class="flaticon2-plus"></i> Edit
                                        </a>
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
                                                        <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-form__group kt-form__group--inline">
                                                        <div class="kt-form__label">
                                                            <label>Status:</label>
                                                        </div>
                                                        <div class="kt-form__control">
                                                            <select class="form-control bootstrap-select" id="kt_form_status">
                                                                <option value="">All</option>
                                                                <option value="1">Pending</option>
                                                                <option value="2">Delivered</option>
                                                                <option value="3">Canceled</option>
                                                                <option value="4">Success</option>
                                                                <option value="5">Info</option>
                                                                <option value="6">Danger</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                    <div class="kt-form__group kt-form__group--inline">
                                                        <div class="kt-form__label">
                                                            <label>Type:</label>
                                                        </div>
                                                        <div class="kt-form__control">
                                                            <select class="form-control bootstrap-select" id="kt_form_type">
                                                                <option value="">All</option>
                                                                <option value="1">Online</option>
                                                                <option value="2">Retail</option>
                                                                <option value="3">Direct</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                            <a href="#" class="btn btn-default kt-hidden">
                                                <i class="la la-cart-plus"></i> New Order
                                            </a>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
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

    <!--begin::Page Scripts(used by this page) -->
    {{-- <script src="../assets/js/pages/crud/metronic-datatable/base/local-sort.js" type="text/javascript"></script> --}}

    <!--end::Page Scripts -->
    <script>
    
    var KTDatatableLocalSortDemo = function() {
      // Private functions
      // basic demo
      var demo = function() {
        var datatable = $('.kt-datatable').KTDatatable({
          // datasource definition
          data: {
            type: 'local',
            source: <?php echo $post ?>,
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
            field: 'RecordID',
            title: '#',
            sortable: 'asc',
            width: 30,
            type: 'number',
            selector: false,
            textAlign: 'center',
          }, {
            field: 'title',
            title: 'Название',
          }, {
            field: 'Country1',
            title: 'Country1',
            template: function(row) {
              return row.Country + ' ' + row.ShipCountry;
            },
          }, {
            field: 'ShipDate',
            title: 'Ship Date',
            type: 'date',
            format: 'MM/DD/YYYY',
          }, {
            field: 'TotalPayment',
            title: 'Payment',
            type: 'number',
            // custom sort callback for number
            sortCallback: function(data, sort, column) {
              var field = column['field'];
              return $(data).sort(function(a, b) {
                var aField = a[field];
                var bField = b[field];
                if (isNaN(parseFloat(aField)) && aField != null) {
                  aField = Number(aField.replace(/[^0-9\.-]+/g, ''));
                }
                if (isNaN(parseFloat(bField)) && aField != null) {
                  bField = Number(bField.replace(/[^0-9\.-]+/g, ''));
                }
                aField = parseFloat(aField);
                bField = parseFloat(bField);
                if (sort === 'asc') {
                  return aField > bField ? 1 : aField < bField ? -1 : 0;
                } else {
                  return aField < bField ? 1 : aField > bField ? -1 : 0;
                }
              });
            },
          },{
            field: 'Actions',
            title: 'Actions',
            sortable: false,
            width: 110,
            overflow: 'visible',
            autoHide: false,
            template: function(data) {
                var url = `admin/blog/posts/${data.id}/edit/`;
              return `\
                      <div class="dropdown">\
                          <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                              <i class="la la-cog"></i>\
                          </a>\
                            <div class="dropdown-menu dropdown-menu-right">\
                              <a class="dropdown-item" href=""><i class="la la-edit"></i> Edit Details</a>\
                              <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
                              <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
                            </div>\
                      </div>\
                      <a href="${url}" class="btn-edit btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
                          <i class="la la-edit"></i>\
                      </a>\
                      <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
                          <i class="la la-trash"></i>\
                      </a>\
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

