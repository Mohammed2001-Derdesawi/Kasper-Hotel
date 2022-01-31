
<!DOCTYPE html>

<html lang="en">
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--begin::Fonts -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Vendors Styles(used by this page) -->

        <!--end::Page Vendors Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->

        <!--begin:: Vendor Plugins -->
        <link href="{{ asset('admindashboard/css/pages/login/login-3.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('admindashboard/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet') }}" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/quill/dist/quill.snow.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/@yaireo/tagify/dist/tagify.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/animate.css/animate.css" rel="stylesheet') }}" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/dual-listbox/dist/dual-listbox.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/plugins/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/plugins/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/plugins/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
            type="text/css" />

        <!--end:: Vendor Plugins -->
        <link href="{{ asset('admindashboard/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        <!--begin:: Vendor Plugins for custom pages -->
        <link href="{{ asset('admindashboard/plugins/custom/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/@fullcalendar/core/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/@fullcalendar/daygrid/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/@fullcalendar/list/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/@fullcalendar/timegrid/main.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/jstree/dist/themes/default/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/jqvmap/dist/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/plugins/custom/uppy/dist/uppy.min.css') }}" rel="stylesheet" type="text/css" />

        <!--end:: Vendor Plugins for custom pages -->

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{ asset('admindashboard/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admindashboard/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{ asset('admindashboard/media/logos/favicon.ico') }}" />

        <!-- begin:: My Style css -->
        <link rel="stylesheet" href="{{ asset('admindashboard/css/mystyle.css') }}">

        <!-- end:: My Style css -->
    </head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('admindashboard/media/bg/bg-3.jpg')}});">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img src="{{ asset('admindashboard/media/logos/logo-5.png')}}">
								</a>
							</div>

							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign In To Admin</h3>
								</div>
                                @if (Session::get('error'))
                                <span class="invalid-feedback" role="alert" style="display: block">
                                    <div class="alert alert-danger" role="alert">
                                        {{Session::get('error')}}
                                      </div>
                                </span>
                                @endif
								<form class="kt-form" method="POST" action="{{route('admin.loginadmin')}}">
									@csrf
                                    <div class="input-group">
										<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off" required>
									</div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Password" name="password" required>
									</div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert"  style="display: block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									<div class="row kt-login__extra">
										<div class="col">
											<label class="kt-checkbox">
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
												<span></span>
											</label>
										</div>
										<div class="col kt-align-right">
                                            <a class="" href="{{route('admin.showresetpassword')}}">Forgotten Password ?</a>
										</div>
									</div>
									<div class="kt-login__actions">
										<button  class="btn btn-brand btn-elevate" type="submit">Sign In</button>
									</div>
								</form>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>

    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>



	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
    @include('sweetalert::alert')
	<!--begin:: Vendor Plugins -->
	 {{-- <script src="{{ asset('admindashboard/plugins/general/jquery/dist/jquery.js') }}" type="text/javascript"></script> --}}
	{{-- <script src="{{ asset('admindashboard/plugins/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/dropzone.init.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/quill/dist/quill.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/@yaireo/tagify/dist/tagify.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/jquery-validation.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/dual-listbox/dist/dual-listbox.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/raphael/raphael.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/morris.js/morris.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/plugins/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/js/global/integration/plugins/sweetalert2.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

	<!--end:: Vendor Plugins -->
	<script src="{{ asset('admindashboard/js/scripts.bundle.js') }}" type="text/javascript"></script>

	<!--begin:: Vendor Plugins for custom pages -->
	<script src="{{ asset('admindashboard/plugins/custom/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/core/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/daygrid/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/google-calendar/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/interaction/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/list/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/@fullcalendar/timegrid/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/dist/es5/jquery.flot.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.resize.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.categories.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.pie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.stack.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.crosshair.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/flot/source/jquery.flot.axislabels.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/js/global/integration/plugins/datatables.init.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jszip/dist/jszip.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/pdfmake/build/pdfmake.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/pdfmake/build/vfs_fonts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons/js/buttons.colVis.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons/js/buttons.flash.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons/js/buttons.html5.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-buttons/js/buttons.print.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/datatables.net-select/js/dataTables.select.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jstree/dist/jstree.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/jquery.vmap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/uppy/dist/uppy.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/tinymce/tinymce.min.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/tinymce/themes/silver/theme.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/custom/tinymce/themes/mobile/theme.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admindashboard/js/pages/crud/forms/widgets/select2.min.js') }} " type="text/javascript"></script> --}}

	<!--end:: Vendor Plugins -->

	<!--begin:: Vendor Plugins for custom pages -->
	{{-- <script src="{{ asset('admindashboard/plugins/custom/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script> --}}

      <script>
        $.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        </script>

    {{-- <script src="{{ asset('admindashboard/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>    <!--end::Page Scripts--> --}}

<!--end::Body-->
</body>
</html>

