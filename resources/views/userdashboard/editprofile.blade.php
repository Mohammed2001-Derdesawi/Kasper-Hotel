

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
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <i class="icon-home"></i> Overview </a>
                                    </li>
                                    <li class="active">
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
                                <h4 class="profile-desc-title">About Kasper</h4>
                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh
                                    dolore. </span>
                                <div class="margin-top-20 profile-desc-link edit-page-link-slidebar">
                                    <i class="fa fa-globe"></i>
                                    <a href="#">www.Kasper.com</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link edit-page-link-slidebar">
                                    <i class="fa fa-twitter"></i>
                                    <a href="#">@Kasper</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link edit-page-link-slidebar">
                                    <i class="fa fa-facebook"></i>
                                    <a href="#">Kasper</a>
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
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile
                                                Account</span>
                                        </div>
                                        <ul class="nav nav-tabs edit-profile-tab">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input type="text" placeholder="John"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input type="text" placeholder="Doe" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile Number</label>
                                                        <input type="text" placeholder="+1 646 580 DEMO (6284)"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Interests</label>
                                                        <input type="text" placeholder="Design, Web etc."
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Occupation</label>
                                                        <input type="text" placeholder="Web Developer"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">About</label>
                                                        <textarea style="resize: none;" class="form-control" rows="3"
                                                            placeholder="We are Kasper!!!"></textarea>
                                                    </div>
                                                    <div class="margiv-top-10">
                                                        <a href="javascript:;" class="btn green btn-edit-tab"> Save Changes </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ad aut quas quisquam corrupti odio consectetur itaque quam tempora dicta enim unde fugiat ut illo, impedit consequatur nesciunt voluptatum porro. </p>
                                                <form action="#" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new"
                                                            data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail"
                                                                style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                                    alt="" />
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                                style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Select image
                                                                    </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="..."> </span>
                                                                <a href="javascript:;"
                                                                    class="btn default fileinput-exists"
                                                                    data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger btn-edit-note">NOTE! </span>
                                                            <span>Attached image thumbnail is supported in Latest
                                                                Firefox, Chrome, Opera, Safari and Internet Explorer
                                                                10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green btn-edit-tab"> Submit </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn green btn-edit-tab"> Change Password
                                                        </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->

                                        </div>
                                    </div>
                                </div>
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
