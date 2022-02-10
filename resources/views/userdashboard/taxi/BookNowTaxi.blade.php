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
                    <span>Airline</span>
                </li>
            </ul>

        </div>



        <!-- Start My Content -->


        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet light">
            <div class="portlet-body page-book-now-taxi">
                <div class="title-book-now-taxi text-center">
                    <h1>Book Now!</h1>
                    <p>We Make Travel Easier Than You Think</p>
                </div>
                <div class="details-book-now-taxi">
                    <form action="#" id="form-book">
                        <div class="info-book-now-taxi">
                            <input type="text" placeholder="Form Address..." required>
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="info-book-now-taxi">
                            <input type="text" placeholder="To..." required>
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="info-book-now-taxi">
                            <input type="text" placeholder="Phone Number..." required>
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="info-book-now-taxi">
                            <input type="text" placeholder="Date And Time..." required>
                            <i class="fa fa-calendar"></i>
                        </div>
                    </form>
                </div>

                <div class="get-taxi-book-now text-center">
                    <a href="#" class="btn btn-danger btn-website-book-now-taxi" data-toggle="modal"
                        data-target="#myModal" form="form-book">GET TAXI</a>

                        <!-- <button class="btn btn-danger btn-website-book-now-taxi" data-toggle="modal"
                        data-target="#myModal" form="form-book">GET TAXI</button> -->
                </div>
            </div>
        </div>
        <!-- END Portlet PORTLET-->


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
