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
                                        <li>
                                            <a href="{{route('profile.edit')}}">
                                                <i class="icon-settings"></i> Account Settings </a>
                                        </li>
                                        <li class="active">
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
                                                <i class="icon-globe theme-font hide"></i>
                                                <span
                                                    class="caption-subject font-blue-madison bold uppercase">Help</span>
                                            </div>
                                            <ul class="nav nav-tabs edit-profile-tab">
                                                <li class="active">
                                                    <a href="#tab_1_1" data-toggle="tab">General Question</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_2" data-toggle="tab">Membership</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_3" data-toggle="tab">Terms Of Use</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- GENERAL QUESTION TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <div id="accordion1" class="panel-group">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_1"> 1. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_1" class="panel-collapse collapse in">
                                                                <div class="panel-body"> Anim pariatur cliche
                                                                    reprehenderit, enim eiusmod high life accusamus
                                                                    terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck
                                                                    quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                    helvetica, craft beer labore
                                                                    wes anderson cred nesciunt sapiente ea proident. Ad
                                                                    vegan excepteur butcher vice lomo. Leggings occaecat
                                                                    craft beer farm-to-table, raw denim aesthetic synth
                                                                    nesciunt you probably
                                                                    haven't heard of them accusamus labore sustainable
                                                                    VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_2"> 2. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_2" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_3"> 3. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_3" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-warning">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_4"> 4. Wolf moon officia aute,
                                                                        non cupidatat skateboard dolor brunch ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_4" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_5"> 5. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_5" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_6"> 6. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic synth ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_6" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion1"
                                                                        href="#accordion1_7"> 7. Ad vegan excepteur
                                                                        butcher vice lomo. Leggings occaecat craft ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion1_7" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END GENERAL QUESTION TAB -->
                                                <!-- MEMBERSHIP TAB -->
                                                <div class="tab-pane" id="tab_1_2">
                                                    <div id="accordion2" class="panel-group">
                                                        <div class="panel panel-warning">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_1"> 1. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor, sunt aliqua put a bird on it squid
                                                                        single-origin coffee nulla assumenda shoreditch
                                                                        et. Nihil anim keffiyeh helvetica, craft
                                                                        beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice
                                                                        lomo. Leggings occaecat craft beer
                                                                        farm-to-table, raw denim aesthetic synth
                                                                        nesciunt
                                                                        you probably haven't heard of them accusamus
                                                                        labore sustainable VHS. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor, sunt aliqua put a bird on it squid
                                                                        single-origin coffee nulla assumenda shoreditch
                                                                        et. Nihil anim keffiyeh helvetica, craft
                                                                        beer labore wes anderson cred nesciunt sapiente
                                                                        ea proident. Ad vegan excepteur butcher vice
                                                                        lomo. Leggings occaecat craft beer
                                                                        farm-to-table, raw denim aesthetic synth
                                                                        nesciunt
                                                                        you probably haven't heard of them accusamus
                                                                        labore sustainable VHS. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_2"> 2. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_2" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_3"> 3. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_3" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_4"> 4. Wolf moon officia aute,
                                                                        non cupidatat skateboard dolor brunch ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_4" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_5"> 5. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_5" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_6"> 6. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic synth ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_6" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion2"
                                                                        href="#accordion2_7"> 7. Ad vegan excepteur
                                                                        butcher vice lomo. Leggings occaecat craft ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion2_7" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END MEMBERSHIP TAB -->
                                                <!-- TERMS OF USE TAB -->
                                                <div class="tab-pane" id="tab_1_3">
                                                    <div id="accordion3" class="panel-group">
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_1"> 1. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_1" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor, sunt aliqua put a bird on it squid
                                                                        single-origin coffee nulla assumenda shoreditch
                                                                        et. </p>
                                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod
                                                                        high life accusamus terry richardson ad squid. 3
                                                                        wolf moon officia aute, non cupidatat skateboard
                                                                        dolor brunch. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor, sunt aliqua put a bird on it squid
                                                                        single-origin coffee nulla assumenda shoreditch
                                                                        et. </p>
                                                                    <p> Food truck quinoa nesciunt laborum eiusmod.
                                                                        Brunch 3 wolf moon tempor, sunt aliqua put a
                                                                        bird on it squid single-origin coffee nulla
                                                                        assumenda shoreditch et. Nihil anim keffiyeh
                                                                        helvetica,
                                                                        craft beer labore wes anderson cred nesciunt
                                                                        sapiente ea proident. Ad vegan excepteur butcher
                                                                        vice lomo. Leggings occaecat craft beer
                                                                        farm-to-table, raw denim aesthetic synth
                                                                        nesciunt you probably haven't heard of them
                                                                        accusamus labore sustainable VHS. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_2"> 2. Anim pariatur cliche
                                                                        reprehenderit, enim eiusmod high life accusamus
                                                                        terry ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_2" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_3"> 3. Food truck quinoa
                                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                                        tempor ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_3" class="panel-collapse collapse">
                                                                <div class="panel-body"> Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                                                    aliqua put a bird on it squid single-origin coffee
                                                                    nulla assumenda shoreditch et. Anim pariatur cliche
                                                                    reprehenderit,
                                                                    enim eiusmod high life accusamus terry richardson ad
                                                                    squid. 3 wolf moon officia aute, non cupidatat
                                                                    skateboard dolor brunch. Food truck quinoa nesciunt
                                                                    laborum eiusmod. Brunch 3 wolf
                                                                    moon tempor, sunt aliqua put a bird on it squid
                                                                    single-origin coffee nulla assumenda shoreditch et.
                                                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                                                    anderson cred nesciunt sapiente
                                                                    ea proident. Ad vegan excepteur butcher vice lomo.
                                                                    Leggings occaecat craft beer farm-to-table, raw
                                                                    denim aesthetic synth nesciunt you probably haven't
                                                                    heard of them accusamus labore
                                                                    sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_4"> 4. Wolf moon officia aute,
                                                                        non cupidatat skateboard dolor brunch ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_4" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_5"> 5. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic ? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_5" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_6"> 6. Leggings occaecat craft
                                                                        beer farm-to-table, raw denim aesthetic synth ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_6" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled"
                                                                        data-toggle="collapse" data-parent="#accordion3"
                                                                        href="#accordion3_7"> 7. Ad vegan excepteur
                                                                        butcher vice lomo. Leggings occaecat craft ?
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="accordion3_7" class="panel-collapse collapse">
                                                                <div class="panel-body"> 3 wolf moon officia aute, non
                                                                    cupidatat skateboard dolor brunch. Food truck quinoa
                                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                    sunt aliqua put a bird on it squid single-origin
                                                                    coffee nulla assumenda shoreditch et. Nihil anim
                                                                    keffiyeh helvetica, craft beer labore wes anderson
                                                                    cred nesciunt sapiente ea proident. Ad vegan
                                                                    excepteur butcher vice lomo. Leggings
                                                                    occaecat craft beer farm-to-table, raw denim
                                                                    aesthetic synth nesciunt you probably haven't heard
                                                                    of them accusamus labore sustainable VHS. Food truck
                                                                    quinoa nesciunt laborum eiusmod.
                                                                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                                                    it squid single-origin coffee nulla assumenda
                                                                    shoreditch et </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END TERMS OF USE TAB -->
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
