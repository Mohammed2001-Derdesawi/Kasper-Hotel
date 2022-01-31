
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


							<div class="kt-login__forgot" style="display: block;">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Forgotten Password ?</h3>
									<div class="kt-login__desc">Enter your email to reset your password:</div>
								</div>
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                   {{ Session::get('message') }}
                               </div>
                           @endif
                           @if (Session::has('error'))
                           <div class="alert alert-warning" role="alert">
                              {{ Session::get('error') }}
                          </div>
                      @endif
                                @error('email')

                                <span class="invalid-feedback" role="alert" style="display: block">
                            <div class="alert alert-warning" role="alert">

                                {{$message}}
                              </div>
                        </span>
                            @enderror
								<form class="kt-form" method="POST" action="{{route('admin.resetpassword')}}">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email" name="email"  autocomplete="off">
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_forgot_submit" type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
										<a  href="{{route('admin.login')}}"class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</a>
									</div>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>







    @include('sweetalert::alert')

</body>
</html>

