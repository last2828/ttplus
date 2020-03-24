<!-- begin:: Header Mobile -->
<div class="kt-header-mobile kt-header-mobile--fixed" id="kt_header_mobile">
    <div class="kt-header-mobile__logo">
        <a href="index.html"><img alt="Logo" src="assets/media/logos/logo-light.png"></a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button> <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        @yield('aside', \Illuminate\Support\Facades\View::make('admin/aside')) @yield('content')
    </div>
</div>
<!-- begin:: Footer -->
<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container kt-container--fluid">
        <div class="kt-footer__copyright">
            2020&nbsp;&copy;&nbsp;<a class="kt-link" href="http://keenthemes.com/metronic" target="_blank">Keenthemes</a>
        </div>
        <div class="kt-footer__menu">
            <a class="kt-footer__menu-link kt-link" href="http://keenthemes.com/metronic" target="_blank">About</a> <a class="kt-footer__menu-link kt-link" href="http://keenthemes.com/metronic" target="_blank">Team</a> <a class="kt-footer__menu-link kt-link" href="http://keenthemes.com/metronic" target="_blank">Contact</a>
        </div>
    </div>
</div>
<!-- end:: Footer -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript">
</script>
<script src="assets/js/scripts.bundle.js" type="text/javascript">
</script>
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors(used by this page) -->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
</script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
</script>
<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript">
</script>
<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/dashboard.js" type="text/javascript">
</script>
<!--end::Page Scripts -->
<!-- end::Body -->