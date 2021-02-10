@extends('admin.layouts.layout')
@section('content')

    <!-- begin:: Page -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


                {{--{{Breadcrumbs::render('info-page', $page)}}--}}

                <!-- begin:: Content -->
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-indent-dots"></i></span>
                                    <h3 class="kt-portlet__head-title">О компании</h3>
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form" method="POST" action="{{route('admin.info_pages.update', $page->key)}}" enctype="multipart/form-data">
                                @CSRF
                                @method('PATCH')
                                <div class="kt-portlet__body">
                                    <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">Общие</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">Преимущества</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Даты и события</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4" role="tab">Награды</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5" role="tab">Сертификаты и лицензии</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_6" role="tab">Выставки</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                                            <label>Заголовок и описание</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок" name="title" value="{{(isset($page)) ? $page['title'] : ''}}">
                                                </div>
                                            </div>
                                            @include('admin.pages.components.meta-tags')
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание" rows="3" name="description">{{(isset($page)) ? $page['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="about__image"><img src="{{$page->head_image}}" alt="" width="100%"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="input-group">
                                                    <input type="text" id="image_label" class="form-control image_label" name="head_image"
                                                           aria-label="Image" aria-describedby="button-image" value="{{$page->head_image}}">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary button-image" type="button" id="button-image">Select</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                                            <label>Партнеры</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Партнеры" name="partner_title" value="{{(isset($page)) ? $page['partner_title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Цитата" rows="3" name="partner_title_description">{{(isset($page)) ? $page['partner_title_description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Преимущества</label>
                                            @foreach($page->features_content as $feature)
                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <textarea class="form-control" aria-describedby="" placeholder="Преимущества" rows="3" name="features_content[]">{{$feature}}</textarea>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <label>Цитата</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Цитата" rows="3" name="quote_title">{{(isset($page)) ? $page['quote_title'] : ''}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                                            <label>Заголовок</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Даты" name="years_title" value="{{(isset($page)) ? $page['years_title'] : ''}}">
                                                </div>
                                            </div>
                                            <label>Дата 1</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="years_1[title]" value="{{(isset($page)) ? $page->years_1['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="years_1[description]">{{(isset($page)) ? $page->years_1['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Дата 2</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 2" name="years_2[title]" value="{{(isset($page)) ? $page->years_2['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 2" rows="3" name="years_2[description]">{{(isset($page)) ? $page->years_2['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Дата 3</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 3" name="years_3[title]" value="{{(isset($page)) ? $page->years_3['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 3" rows="3" name="years_3[description]">{{(isset($page)) ? $page->years_3['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Событие 1</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_1[title]" value="{{(isset($page)) ? $page->blocks_1['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_1[description]">{{(isset($page)) ? $page->blocks_1['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Событие 2</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_2[title]" value="{{(isset($page)) ? $page->blocks_2['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_2[description]">{{(isset($page)) ? $page->blocks_2['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                            <label>Событие 3</label>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" role="alert" aria-describedby="" placeholder="Заголовок даты 1" name="blocks_3[title]" value="{{(isset($page)) ? $page->blocks_3['title'] : ''}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-md-9 col-sm-12">
                                                    <textarea class="form-control" aria-describedby="" placeholder="Описание даты 1" rows="3" name="blocks_3[description]">{{(isset($page)) ? $page->blocks_3['description'] : ''}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
                                            <label>Награды</label>
                                            <div id="kt_repeater_1">
                                                <div data-repeater-list="awards" class="col-lg-12">
                                                    @foreach($page->awards as $award)
                                                        <div data-repeater-item class="form-group row align-items-center">
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="about__image"><img src="{{$page['image']}}" alt="" width="50%"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <input type="text" id="image_label" class="form-control image_label" name="image"
                                                                           aria-label="Image" aria-describedby="button-image" value="{{$page['image']}}">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary button-image" type="button" id="button-image">Select</button>
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
                                                    @endforeach
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                                        <i class="la la-plus"></i> Добавить
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="kt_tabs_1_5" role="tabpanel">
                                            <label>Сертификаты и лицензии</label>
                                            <div id="kt_repeater_2">
                                                <div data-repeater-list="licenses" class="col-lg-12">
                                                    @foreach($page->licenses as $licens)
                                                        <div data-repeater-item class="form-group row align-items-center">
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="about__image"><img src="{{$page['image']}}" alt="" width="50%"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <input type="text" id="image_label" class="form-control image_label" name="image"
                                                                           aria-label="Image" aria-describedby="button-image" value="{{$page['image']}}">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary button-image" type="button" id="button-image">Select</button>
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
                                                    @endforeach
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                                        <i class="la la-plus"></i> Добавить
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="kt_tabs_1_6" role="tabpanel">
                                            <label>Выставки</label>
                                            <div id="kt_repeater_3">
                                                <div data-repeater-list="shows" class="col-lg-12">
                                                    @foreach($page->shows as $show)
                                                        <div data-repeater-item class="form-group row align-items-center">
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="about__image"><img src="{{$page['image']}}" alt="" width="50%"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <input type="text" id="image_label" class="form-control image_label" name="image"
                                                                           aria-label="Image" aria-describedby="button-image" value="{{$page['image']}}">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary button-image" type="button" id="button-image">Select</button>
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
                                                    @endforeach
                                                </div>
                                                <div class="col-md-12">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                                        <i class="la la-plus"></i> Добавить
                                                    </a>
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
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div><!-- end:: Content -->
        </div>
    </div>
    <!-- end:: Page -->
@endsection

@section('script')
    {{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}

    <script src="{{asset('assets/js/pages/crud/forms/widgets/form-repeater.js')}}" type="text/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelector('.button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.querySelector('.image_label').value = $url;
        }
    </script>
@endsection