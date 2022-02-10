
@extends('layouts.userlayouts')
@section('styles')

    <link rel="shortcut icon" href="{{asset('userdashboard/fonts/fa-regular-400.ttf')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/color.css')}}">


    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/style-all-hotel.css')}}">
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
                    <span>Airline/Details</span>
                </li>
            </ul>

        </div>



        <!-- Start My Content -->

        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet light">
            <div class="portlet-body">
                <!-- start row of details cars -->
                <div class="row">
                    <!-- start column of details cars -->
                    <div class="col-md-5">
                        <div class="img-details-cars">
                            <img src="../admin_2/images/taxi2.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <!-- end column of details cars -->

                    <!-- start column of details cars -->
                    <div class="col-md-7">
                        <div class="info-details-cars">
                            <p> {{ $taxi->name }} <span>${{ $taxi->salaryinday }}/Day</span></p>
                            <span>{{ $taxi->cartype }}</span>
                            <div class="detailes-2-img-tap-taxi">
                                <i>{{ $taxi->datecreate }}</i>
                                <i>{{ $taxi->engine_condition }}</i>
                                <i>{{ $taxi->condition }}</i>
                            </div>

                            <div class="more-info-details-cars">
                                <p>INCLUDED FOR FREE:</p>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="list-more-info-details-cars">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Cancellation</li>
                                    <li> <i class="fa fa-check"></i> Third Party Liability</li>
                                    <li> <i class="fa fa-check"></i> Theft Protection</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="list-more-info-details-cars">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Amendments</li>
                                    <li> <i class="fa fa-check"></i> Collision Damage Waiver</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end column of details cars -->
                </div>
                <!-- end row of details cars -->
                <div class="text-center">
                    <a href="{{ url('/dashboard/taxi/details/'.$taxi->id.'/book') }}"
                     class="btn btn-primary btn-website-details-cars"
                     >BOOK NOW</a>
                </div>



                <!-- start tap details cars -->
                <div class="tap-TAXI-details-cars">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tap-details-cars" role="tablist">
                        <li role="presentation" class="active"><a href="#DESCRIPTION"
                                aria-controls="DESCRIPTION" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                        <li role="presentation" class="li-TESTIMONIALS"><a href="#TESTIMONIALS"
                                aria-controls="TESTIMONIALS" role="tab" data-toggle="tab">TESTIMONIALS</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="DESCRIPTION">
                          {{ $taxi->description }}
                        </div>

                        <div role="tabpanel" class="tab-pane text-center" id="TESTIMONIALS">
                            <p>"The rent process went smoothly and effortlessly for us. Thank you for your
                                amazing service and for cars!"</p>
                            <span>-Jessica Wang</span>
                            <p>"Definitely the best in this service! I appreciate how you made my trip enjoyable
                                and more comfortable!"</p>
                        </div>
                    </div>

                </div>
                <!-- end tap details cars -->



            </div>
        </div>
        <!-- END Portlet PORTLET-->









        <!-- End My Content -->


    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection


@section('scripts')
<script type="text/javascript" src="{{asset('userdashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/scripts.js')}}"></script>


@endsection
