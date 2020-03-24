@extends('admin.layout')
@section('content')

    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <!-- begin:: Header -->
        <div class="kt-header kt-grid__item kt-header--fixed" id="kt_header">
            <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- begin:: Content Head -->
                <div class="kt-subheader kt-grid__item" id="kt_subheader">
                    <div class="kt-container kt-container--fluid">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Projects</h3><span class="kt-subheader__separator kt-subheader__separator--v"></span>
                            <div class="kt-subheader__group" id="kt_subheader_search">
                                <span class="kt-subheader__desc" id="kt_subheader_total">1240 Total</span>
                                <form class="kt-margin-l-20" id="kt_subheader_search_form" name="kt_subheader_search_form">
                                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                                        <input class="form-control" id="generalSearch" placeholder="Search..." type="text"> <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><svg class="kt-svg-icon" height="24px" version="1.1" viewbox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
									<g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
										<rect height="24" width="24" x="0" y="0"></rect>
										<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
										<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
									</g></svg> <!--<i class="flaticon2-search-1"></i>--></span></span>
                                    </div>
                                </form>
                            </div>
                            <div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
                                <div class="kt-subheader__desc">
                                    <span id="kt_subheader_group_selected_rows"></span> Selected:
                                </div>
                                <div class="btn-toolbar kt-margin-l-20">
                                    <div class="dropdown" id="kt_subheader_group_actions_status_change">
                                        <button class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown" type="button">Update Status</button>
                                        <div class="dropdown-menu">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first"><span class="kt-nav__section-text">Change status to:</span></li>
                                                <li class="kt-nav__item">
                                                    <a class="kt-nav__link" data-status="1" data-toggle="status-change" href="#"><span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span></a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a class="kt-nav__link" data-status="2" data-toggle="status-change" href="#"><span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span></a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a class="kt-nav__link" data-status="3" data-toggle="status-change" href="#"><span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span></a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a class="kt-nav__link" data-status="4" data-toggle="status-change" href="#"><span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><button class="btn btn-label-success btn-bold btn-sm btn-icon-h" data-target="#kt_datatable_records_fetch_modal" data-toggle="modal" id="kt_subheader_group_actions_fetch">Fetch Selected</button> <button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">Delete All</button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-subheader__toolbar">
                            <a class="" href="#"></a> <a class="btn btn-label-brand btn-bold" href="custom/apps/projects/add-project.html">Add Project</a>
                            <div class="kt-subheader__wrapper">
                                <div class="dropdown dropdown-inline" data-placement="left" data-toggle="kt-tooltip-" title="Quick actions">
                                    <a aria-expanded="false" aria-haspopup="true" class="btn btn-icon" data-toggle="dropdown" href="#"><svg class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md" height="24px" version="1.1" viewbox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg">
                                            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                                            </g></svg> <!--<i class="flaticon2-plus"></i>--></a>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">Add New: <i class="flaticon2-information" data-placement="right" data-toggle="kt-tooltip" title="Click to learn more..."></i></li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-drop"></i> <span class="kt-nav__link-text">Orders</span></a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-new-email"></i> <span class="kt-nav__link-text">Members</span> <span class="kt-nav__link-badge"><span class="kt-badge kt-badge--brand kt-badge--rounded">15</span></span></a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-calendar-8"></i> <span class="kt-nav__link-text">Reports</span></a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a class="kt-nav__link" href="#"><i class="kt-nav__link-icon flaticon2-link"></i> <span class="kt-nav__link-text">Finance</span></a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a> <a class="btn btn-clean btn-bold btn-sm kt-hidden" data-placement="right" data-toggle="kt-tooltip" href="#" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->
                <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                    <!--begin::Portlet-->
                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <!--begin: Datatable -->
                            <div class="kt-datatable" id="kt_apps_user_list_datatable"></div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--begin::Modal-->
                    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="kt_datatable_records_fetch_modal" role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"></span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="kt-scroll" data-height="200" data-scroll="true">
                                        <ul id="kt_apps_user_fetch_records_selected"></ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-brand" data-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal-->
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>

@endsection

@section('script')

    <!--begin::Page Scripts(used by this page) -->

    <script src="assets/js/pages/custom/projects/list-datatable.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

@endsection

