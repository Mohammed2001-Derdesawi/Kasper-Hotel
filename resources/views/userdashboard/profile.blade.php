

@extends('layouts.userlayouts')
@section('styles')
<link href="{{asset('assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
type="text/css" />

@endsection
@section('content')
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h1 class="page-title"> <span style="color: #fa2c27;">K</span>asper
            <small>Rental of airline tickets, hotels and cars</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Airline</span>
                </li>
            </ul>

        </div>








        <!-- Start My Content -->



        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar edit-profile-slidebar">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet ">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="{{asset('assets/pages/media/profile/profile_user.jpg')}}" class="img-responsive"
                                alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name"> Marcus Doe </div>
                            <div class="profile-usertitle-job"> Developer </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a  href="{{route('profile')}}">
                                        <i class="icon-home"></i> Overview </a>
                                </li>
                                <li>
                                    <a href="{{route('profile.edit')}}">
                                        <i class="icon-settings"></i> Account Settings </a>
                                </li>
                                <li >
                                    <a href="{{route('profile.help')}}">
                                        <i class="icon-info"></i> Help </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                    <!-- PORTLET MAIN -->
                    <div class="portlet light ">
                        <div>
                            <h4 class="profile-desc-title">About Marcus Doe</h4>
                            <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh
                                dolore. </span>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-globe"></i>
                                <a href="http://www.keenthemes.com">www.Kasper.com</a>
                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-twitter"></i>
                                <a href="http://www.twitter.com/keenthemes/">@Kasper</a>
                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-facebook"></i>
                                <a href="http://www.facebook.com/keenthemes/">Kasper</a>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET MAIN -->
                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->
                <!-- BEGIN PROFILE CONTENT -->
                <div class="profile-content edit-profile-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-calendar font-dark"></i>
                                        <span class="caption-subject bold uppercase">My Booking</span>
                                    </div>
                                    <!-- <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div> -->
                                </div>

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Hotel </th>
                                                <th> Country </th>
                                                <th> Date of Booking </th>
                                                <th> Price </th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> Unitaed STATES hotel </td>
                                                <td>
                                                    <span>GAZA</span>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> 2021/12/8 </span>
                                                </td>
                                                <td class="center"> 999 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="viewHotel.html" class="btn btn-xs green">View All</a>

                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END PROFILE CONTENT -->
            </div>
        </div>




        <!-- End My Content -->





    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

@endsection

@section('scripts')
<script src="{{asset('assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-bootpag/jquery.bootpag.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/holder.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>

@endsection
