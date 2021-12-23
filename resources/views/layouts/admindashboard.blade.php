<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Metronic | Dashboard</title>
	<meta name="description" content="Updates and statistics">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->

	<!--begin::Page Vendors Styles(used by this page) -->

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->

	<!--begin:: Vendor Plugins -->
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

<!-- end::Head -->

<!-- begin::Body -->

<body
	class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="{{route('admin')}}">
				<img alt="Logo" src="{{ asset('admindashboard/media/logos/logo-light.png') }}" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
				id="kt_aside_mobile_toggler"><span></span></button>
			<!-- <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> -->
			<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
					class="flaticon-more"></i></button>
		</div>
	</div>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->

			<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
				id="kt_aside">

				<!-- begin:: Aside -->
				<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
					<div class="kt-aside__brand-logo">
						<a href="{{route('admin')}}">
							<img alt="Logo" src="{{ asset('admindashboard/media/logos/logo-light.png') }}" />
						</a>
					</div>
					<div class="kt-aside__brand-tools">
						<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
							<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path
											d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
											fill="#000000" fill-rule="nonzero"
											transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
										<path
											d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
											fill="#000000" fill-rule="nonzero" opacity="0.3"
											transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
									</g>
								</svg></span>
							<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path
											d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
											fill="#000000" fill-rule="nonzero" />
										<path
											d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
											fill="#000000" fill-rule="nonzero" opacity="0.3"
											transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
									</g>
								</svg></span>
						</button>

						<!--
			<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
			-->
					</div>
				</div>

				<!-- end:: Aside -->

				<!-- begin:: Aside Menu -->
				<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
					<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
						data-ktmenu-dropdown-timeout="500">
						<ul class="kt-menu__nav ">
							<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="{{route('admin')}}"
									class="kt-menu__link "><span class="kt-menu__link-icon"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
													fill="#000000" opacity="0.3" />
											</g>
										</svg></span><span class="kt-menu__link-text">Dashboard</span></a></li>

							<li class="kt-menu__section ">
								<h4 class="kt-menu__section-text">Layout</h4>
								<i class="kt-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
								data-ktmenu-submenu-toggle="hover"><a href="{{route('admin')}}"
									class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
													fill="#000000" />
											</g>
										</svg></span><span class="kt-menu__link-text">Home</span><i
										class="kt-menu__ver-arrow"></i></a>
							</li>

							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
								data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
									class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z"
													fill="#000000" />
												<rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1" />
												<path
													d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z"
													fill="#000000" opacity="0.3" />
											</g>
										</svg></span><span class="kt-menu__link-text">Hotel</span><i
										class="kt-menu__ver-arrow la la-angle-right"></i></a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true"><a
												href="{{route('admin')}}" class="kt-menu__link "><i
													class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
													class="kt-menu__link-text">Add Hotel</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a
												href="{{route('admin') }}" class="kt-menu__link "><i
													class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
													class="kt-menu__link-text">Edit Hotel</span></a></li>
									</ul>
								</div>
							</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
									<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg></span><span class="kt-menu__link-text">Edit Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
					<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">

							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
								<a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Edit Main Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">

										<li class="kt-menu__item " aria-haspopup="true"><a href="{{route('admin') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Main Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Read More Page</span></a></li>
									</ul>
								</div>
							</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Edit Dashboard Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit The Main Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit All Hotel Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Hotel Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit View Hotel Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Profile Page</span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Information Profile </span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Help Profile </span></a></li>
										<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Edit Contact Us Page</span></a></li>
									</ul>
								</div>

						</ul>
					</div>
				</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
								data-ktmenu-submenu-toggle="hover">
								<a href="allusers.html"
									class="kt-menu__link kt-menu__toggle">
									<span class="kt-menu__link-icon"><svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path
													d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
													fill="#000000" fill-rule="nonzero" />
											</g>
										</svg></span><span class="kt-menu__link-text">All Users</span><i
										class="kt-menu__ver-arrow"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<!-- end:: Aside Menu -->
			</div>

			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

					<!-- begin:: Header Menu -->

					<!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
					<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
						<!-- other content in header -->
					</div>

					<!-- end:: Header Menu -->

					<!-- begin:: Header Topbar -->
					<div class="kt-header__topbar">

						<!--begin: Search -->

						<!--begin: Search -->
						<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
							id="kt_quick_search_toggle">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
								<span class="kt-header__topbar-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
										class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
												fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path
												d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
												fill="#000000" fill-rule="nonzero" />
										</g>
									</svg> </span>
							</div>
							<div
								class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
								<div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
									id="kt_quick_search_dropdown">
									<form method="get" class="kt-quick-search__form">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i
														class="flaticon2-search-1"></i></span></div>
											<input type="text" class="form-control kt-quick-search__input"
												placeholder="Search...">
											<div class="input-group-append"><span class="input-group-text"><i
														class="la la-close kt-quick-search__close"></i></span></div>
										</div>
									</form>
									<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
										data-mobile-height="200">
									</div>
								</div>
							</div>
						</div>

						<!--end: Search -->

						<!--end: Search -->

						<!--begin: My Cart -->
						<div class="kt-header__topbar-item dropdown">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px"
								aria-expanded="true">
								<span class="kt-header__topbar-icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
										class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
												fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path
												d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
												fill="#000000" />
										</g>
									</svg> </span>
							</div>
							<div
								class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
								<form>

									<!-- begin:: Mycart -->
									<div class="kt-mycart">
										<div class="kt-mycart__head kt-head"
											style="background-image: url(admindashboard/media/misc/bg-1.jpg);">
											<div class="kt-mycart__info">
												<span class="kt-mycart__icon"><i
														class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
												<h3 class="kt-mycart__title">My Cart</h3>
											</div>
											<div class="kt-mycart__button">
												<button type="button" class="btn btn-success btn-sm" style=" ">2
													Items</button>
											</div>
										</div>
										<div class="kt-mycart__body kt-scroll" data-scroll="true" data-height="245"
											data-mobile-height="200">
											<div class="kt-mycart__item">
												<div class="kt-mycart__container">
													<div class="kt-mycart__info">
														<a href="#" class="kt-mycart__title">
															Samsung
														</a>
														<span class="kt-mycart__desc">
															Profile info, Timeline etc
														</span>
														<div class="kt-mycart__action">
															<span class="kt-mycart__price">$ 450</span>
															<span class="kt-mycart__text">for</span>
															<span class="kt-mycart__quantity">7</span>
															<a href="#"
																class="btn btn-label-success btn-icon">&minus;</a>
															<a href="#"
																class="btn btn-label-success btn-icon">&plus;</a>
														</div>
													</div>
													<a href="#" class="kt-mycart__pic">
														<img src="{{ asset('admindashboard/media/products/product9.jpg') }}" title="">
													</a>
												</div>
											</div>
											<div class="kt-mycart__item">
												<div class="kt-mycart__container">
													<div class="kt-mycart__info">
														<a href="#" class="kt-mycart__title">
															Panasonic
														</a>
														<span class="kt-mycart__desc">
															For PHoto & Others
														</span>
														<div class="kt-mycart__action">
															<span class="kt-mycart__price">$ 329</span>
															<span class="kt-mycart__text">for</span>
															<span class="kt-mycart__quantity">1</span>
															<a href="#"
																class="btn btn-label-success btn-icon">&minus;</a>
															<a href="#"
																class="btn btn-label-success btn-icon">&plus;</a>
														</div>
													</div>
													<a href="#" class="kt-mycart__pic">
														<img src="{{ asset('admindashboard/media/products/product13.jpg') }}" title="">
													</a>
												</div>
											</div>
											<div class="kt-mycart__item">
												<div class="kt-mycart__container">
													<div class="kt-mycart__info">
														<a href="#" class="kt-mycart__title">
															Fujifilm
														</a>
														<span class="kt-mycart__desc">
															Profile info, Timeline etc
														</span>
														<div class="kt-mycart__action">
															<span class="kt-mycart__price">$ 520</span>
															<span class="kt-mycart__text">for</span>
															<span class="kt-mycart__quantity">6</span>
															<a href="#"
																class="btn btn-label-success btn-icon">&minus;</a>
															<a href="#"
																class="btn btn-label-success btn-icon">&plus;</a>
														</div>
													</div>
													<a href="#" class="kt-mycart__pic">
														<img src="{{ asset('admindashboard/media/products/product16.jpg') }}" title="">
													</a>
												</div>
											</div>
											<div class="kt-mycart__item">
												<div class="kt-mycart__container">
													<div class="kt-mycart__info">
														<a href="#" class="kt-mycart__title">
															Candy Machine
														</a>
														<span class="kt-mycart__desc">
															For PHoto & Others
														</span>
														<div class="kt-mycart__action">
															<span class="kt-mycart__price">$ 784</span>
															<span class="kt-mycart__text">for</span>
															<span class="kt-mycart__quantity">4</span>
															<a href="#"
																class="btn btn-label-success btn-icon">&minus;</a>
															<a href="#"
																class="btn btn-label-success btn-icon">&plus;</a>
														</div>
													</div>
													<a href="#" class="kt-mycart__pic">
														<img src="{{ asset('admindashboard/media/products/product15.jpg') }}" title="" alt="">
													</a>
												</div>
											</div>
										</div>
										<div class="kt-mycart__footer">
											<div class="kt-mycart__section">
												<div class="kt-mycart__subtitel">
													<span>Sub Total</span>
													<span>Taxes</span>
													<span>Total</span>
												</div>
												<div class="kt-mycart__prices">
													<span>$ 840.00</span>
													<span>$ 72.00</span>
													<span class="kt-font-brand">$ 912.00</span>
												</div>
											</div>
											<div class="kt-mycart__button kt-align-right">
												<button type="button" class="btn btn-primary btn-sm">Place
													Order</button>
											</div>
										</div>
									</div>

									<!-- end:: Mycart -->
								</form>
							</div>
						</div>

						<!--end: My Cart -->

						<!--begin: Quick panel toggler -->
						<div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip"
							title="Quick panel" data-placement="right">
							<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
										<path
											d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
											fill="#000000" opacity="0.3" />
									</g>
								</svg> </span>
						</div>

						<!--end: Quick panel toggler -->




					</div>

					<!-- end:: Header Topbar -->
				</div>

				<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">





					<!-- begin:: Content -->
                    @yield('content');
					<!-- end:: Content -->





				</div>

				<!-- begin:: Footer -->
				<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
					<div class="kt-container  kt-container--fluid ">
						<div class="kt-footer__copyright">
							2019&nbsp;&copy;&nbsp;<a href="#" target="_blank"
								class="kt-link">Keenthemes</a>
						</div>
						<div class="kt-footer__menu">
							<a href="#" target="_blank"
								class="kt-footer__menu-link kt-link">About</a>
							<a href="#" target="_blank"
								class="kt-footer__menu-link kt-link">Team</a>
							<a href="#" target="_blank"
								class="kt-footer__menu-link kt-link">Contact</a>
						</div>
					</div>
				</div>

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Panel -->
	<div id="kt_quick_panel" class="kt-quick-panel">
		<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
		<div class="kt-quick-panel__nav">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
				role="tablist">
				<li class="nav-item active">
					<a class="nav-link active" data-toggle="tab" href="#"
						role="tab">Notifications</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#" role="tab">Audit Logs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#" role="tab">Settings</a>
				</li>
			</ul>
		</div>
		<div class="kt-quick-panel__content">
			<div class="tab-content">
				<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
					<div class="kt-notification">
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-line-chart kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been received
								</div>
								<div class="kt-notification__item-time">
									2 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-box-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-chart2 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Application has been approved
								</div>
								<div class="kt-notification__item-time">
									3 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-image-file kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New file has been uploaded
								</div>
								<div class="kt-notification__item-time">
									5 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-drop kt-font-info"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New user feedback received
								</div>
								<div class="kt-notification__item-time">
									8 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart-2 kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									System reboot has been successfully completed
								</div>
								<div class="kt-notification__item-time">
									12 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-favourite kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New order has been placed
								</div>
								<div class="kt-notification__item-time">
									15 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item kt-notification__item--read">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-safe kt-font-primary"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Company meeting canceled
								</div>
								<div class="kt-notification__item-time">
									19 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-psd kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New report has been received
								</div>
								<div class="kt-notification__item-time">
									23 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-download-1 kt-font-danger"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									Finance report has been generated
								</div>
								<div class="kt-notification__item-time">
									25 hrs ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon-security kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer comment recieved
								</div>
								<div class="kt-notification__item-time">
									2 days ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-pie-chart kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title">
									New customer is registered
								</div>
								<div class="kt-notification__item-time">
									3 days ago
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
					<div class="kt-notification-v2">
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-bell kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									5 new user generated report
								</div>
								<div class="kt-notification-v2__item-desc">
									Reports based on sales
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-box kt-font-danger"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									2 new items submited
								</div>
								<div class="kt-notification-v2__item-desc">
									by Grog John
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-psd kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									79 PSD files generated
								</div>
								<div class="kt-notification-v2__item-desc">
									Reports based on sales
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-supermarket kt-font-warning"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									$2900 worth producucts sold
								</div>
								<div class="kt-notification-v2__item-desc">
									Total 234 items
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon-paper-plane-1 kt-font-success"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									4.5h-avarage response time
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-information kt-font-danger"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									Database server is down
								</div>
								<div class="kt-notification-v2__item-desc">
									10 mins ago
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-mail-1 kt-font-brand"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									System report has been generated
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
						<a href="#" class="kt-notification-v2__item">
							<div class="kt-notification-v2__item-icon">
								<i class="flaticon2-hangouts-logo kt-font-warning"></i>
							</div>
							<div class="kt-notification-v2__itek-wrapper">
								<div class="kt-notification-v2__item-title">
									4.5h-avarage response time
								</div>
								<div class="kt-notification-v2__item-desc">
									Fostest is Barry
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings"
					role="tabpanel">
					<form class="kt-form">
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Notifications:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Case Tracking:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" name="quick_panel_notifications_2">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Support Portal:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--success kt-switch--sm">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Generate Reports:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Report Export:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" name="quick_panel_notifications_3">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Allow Data Collection:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--danger">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
						<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Enable Member singup:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-xs row">
							<label class="col-8 col-form-label">Allow User Feedbacks:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" name="quick_panel_notifications_5">
										<span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="form-group form-group-last form-group-xs row">
							<label class="col-8 col-form-label">Enable Customer Portal:</label>
							<div class="col-4 kt-align-right">
								<span class="kt-switch kt-switch--sm kt-switch--brand">
									<label>
										<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
										<span></span>
									</label>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- end::Quick Panel -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->


	<!-- begin::Demo Panel -->
	<div id="kt_demo_panel" class="kt-demo-panel">
		<div class="kt-demo-panel__head">
			<h3 class="kt-demo-panel__title">
				Select A Demo

				<!--<small>5</small>-->
			</h3>
			<a href="#" class="kt-demo-panel__close" id="kt_demo_panel_close"><i class="flaticon2-delete"></i></a>
		</div>
		<div class="kt-demo-panel__body">
			<div class="kt-demo-panel__item kt-demo-panel__item--active">
				<div class="kt-demo-panel__item-title">
					Demo 1
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo1.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 2
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo2.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 3
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo3.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 4
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo4.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 5
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo5.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 6
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo6.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 7
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo7.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 8
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo8.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 9
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo9.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 10
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo10.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 11
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo11.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 12
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo12.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#"
							class="btn btn-brand btn-elevate " target="_blank">Default</a>
						<a href="#"
							class="btn btn-light btn-elevate" target="_blank">RTL Version</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 13
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo13.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
					</div>
				</div>
			</div>
			<div class="kt-demo-panel__item ">
				<div class="kt-demo-panel__item-title">
					Demo 14
				</div>
				<div class="kt-demo-panel__item-preview">
					<img src="{{ asset('admindashboard/media//demos/preview/demo14.jpg') }}" alt="" />
					<div class="kt-demo-panel__item-preview-overlay">
						<a href="#" class="btn btn-brand btn-elevate disabled">Coming soon</a>
					</div>
				</div>
			</div>
			<a href="https://1.envato.market/EA4JP" target="_blank"
				class="kt-demo-panel__purchase btn btn-brand btn-elevate btn-bold btn-upper">
				Buy Metronic Now!
			</a>
		</div>
	</div>

	<!-- end::Demo Panel -->

	<!--Begin:: Chat-->
	<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="kt-chat">
					<div class="kt-portlet kt-portlet--last">
						<div class="kt-portlet__head">
							<div class="kt-chat__head ">
								<div class="kt-chat__left">
									<div class="kt-chat__label">
										<a href="#" class="kt-chat__title">Jason Muller</a>
										<span class="kt-chat__status">
											<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
										</span>
									</div>
								</div>
								<div class="kt-chat__right">
									<div class="dropdown dropdown-inline">
										<button type="button" class="btn btn-clean btn-sm btn-icon"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="flaticon-more-1"></i>
										</button>
										<div
											class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">

											<!--begin::Nav-->
											<ul class="kt-nav">
												<li class="kt-nav__head">
													Messaging
													<i class="flaticon2-information" data-toggle="kt-tooltip"
														data-placement="right" title="Click to learn more..."></i>
												</li>
												<li class="kt-nav__separator"></li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-group"></i>
														<span class="kt-nav__link-text">New Group</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-open-text-book"></i>
														<span class="kt-nav__link-text">Contacts</span>
														<span class="kt-nav__link-badge">
															<span
																class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
														</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-bell-2"></i>
														<span class="kt-nav__link-text">Calls</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-dashboard"></i>
														<span class="kt-nav__link-text">Settings</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-protected"></i>
														<span class="kt-nav__link-text">Help</span>
													</a>
												</li>
												<li class="kt-nav__separator"></li>
												<li class="kt-nav__foot">
													<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade
														plan</a>
													<a class="btn btn-clean btn-bold btn-sm" href="#"
														data-toggle="kt-tooltip" data-placement="right"
														title="Click to learn more...">Learn more</a>
												</li>
											</ul>

											<!--end::Nav-->
										</div>
									</div>
									<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
										<i class="flaticon2-cross"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="kt-portlet__body">
							<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
								<div class="kt-chat__messages kt-chat__messages--solid">
									<div class="kt-chat__message kt-chat__message--success">
										<div class="kt-chat__user">
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/100_12.jpg') }}" alt="image">
											</span>
											<a href="#" class="kt-chat__username">Jason Muller</span></a>
											<span class="kt-chat__datetime">2 Hours</span>
										</div>
										<div class="kt-chat__text">
											How likely are you to recommend our company<br> to your friends and family?
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
										<div class="kt-chat__user">
											<span class="kt-chat__datetime">30 Seconds</span>
											<a href="#" class="kt-chat__username">You</span></a>
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/300_21.jpg') }}" alt="image">
											</span>
										</div>
										<div class="kt-chat__text">
											Hey there, we’re just writing to let you know that you’ve<br> been
											subscribed to a repository on GitHub.
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--success">
										<div class="kt-chat__user">
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/100_12.jpg') }}" alt="image">
											</span>
											<a href="#" class="kt-chat__username">Jason Muller</span></a>
											<span class="kt-chat__datetime">30 Seconds</span>
										</div>
										<div class="kt-chat__text">
											Ok, Understood!
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
										<div class="kt-chat__user">
											<span class="kt-chat__datetime">Just Now</span>
											<a href="#" class="kt-chat__username">You</span></a>
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/300_21.jpg') }}" alt="image">
											</span>
										</div>
										<div class="kt-chat__text">
											You’ll receive notifications for all issues, pull requests!
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--success">
										<div class="kt-chat__user">
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/100_12.jpg') }}" alt="image">
											</span>
											<a href="#" class="kt-chat__username">Jason Muller</span></a>
											<span class="kt-chat__datetime">2 Hours</span>
										</div>
										<div class="kt-chat__text">
											You were automatically <b class="kt-font-brand">subscribed</b> <br>because
											you’ve been given access to the repository
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
										<div class="kt-chat__user">
											<span class="kt-chat__datetime">30 Seconds</span>
											<a href="#" class="kt-chat__username">You</span></a>
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/300_21.jpg') }}" alt="image">
											</span>
										</div>
										<div class="kt-chat__text">
											You can unwatch this repository immediately <br>by clicking here: <a
												href="#" class="kt-font-bold kt-link"></a>
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--success">
										<div class="kt-chat__user">
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/100_12.jpg') }}" alt="image">
											</span>
											<a href="#" class="kt-chat__username">Jason Muller</span></a>
											<span class="kt-chat__datetime">30 Seconds</span>
										</div>
										<div class="kt-chat__text">
											Discover what students who viewed Learn <br>Figma - UI/UX Design Essential
											Training also viewed
										</div>
									</div>
									<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
										<div class="kt-chat__user">
											<span class="kt-chat__datetime">Just Now</span>
											<a href="#" class="kt-chat__username">You</span></a>
											<span class="kt-media kt-media--circle kt-media--sm">
												<img src="{{ asset('admindashboard/media/users/300_21.jpg') }}" alt="image">
											</span>
										</div>
										<div class="kt-chat__text">
											Most purchased Business courses during this sale!
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-chat__input">
								<div class="kt-chat__editor">
									<textarea placeholder="Type here..." style="height: 50px"></textarea>
								</div>
								<div class="kt-chat__toolbar">
									<div class="kt_chat__tools">
										<a href="#"><i class="flaticon2-link"></i></a>
										<a href="#"><i class="flaticon2-photograph"></i></a>
										<a href="#"><i class="flaticon2-photo-camera"></i></a>
									</div>
									<div class="kt_chat__actions">
										<button type="button"
											class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--ENd:: Chat-->

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

	<!--begin:: Vendor Plugins -->
	<script src="{{ asset('admindashboard/plugins/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admindashboard/plugins/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
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

	<!--end:: Vendor Plugins for custom pages -->

	<!--end::Global Theme Bundle -->
	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="{{ asset('admindashboard/js/pages/dashboard.js') }}" type="text/javascript"></script>

	<!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>
