

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
                    <a href="">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Taxi</span>
                </li>
            </ul>

        </div>

        <!-- Start My Content -->


        <!-- Start slider Taxi -->
        <div class="slider-taxi">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('userdashboard/images/images-taxi/slider1.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <h1>Make Your Travel Easy</h1>
                            <p>With Kasper Company Boocket Your Taxi Easy Easier Than You Think </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('userdashboard/images/images-taxi/slider2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <h1>Make Your Travel Easy</h1>
                            <p>With Kasper Company Boocket Your Taxi Easy Easier Than You Think </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('userdashboard/images/images-taxi/slider3.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <h1>Make Your Travel Easy</h1>
                            <p>With Kasper Company Boocket Your Taxi Easy </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slider Taxi -->


        <!-- Start Section Our Taxi Tap -->
        <!-- *********************************************** -->

        <section class="tap-taxi-home">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-body">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab"
                                    data-toggle="tab">All</a></li>
                            <li role="presentation"><a href="#cars-with-driver" aria-controls="cars-with-driver"
                                    role="tab" data-toggle="tab">Cars With Driver</a></li>
                            <li role="presentation"><a href="#cars-without-driver"
                                    aria-controls="cars-without-driver" role="tab" data-toggle="tab">Cars
                                    Without Driver</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="all">
                                <!-- start row in tap taxi -->
                                <div class="row father-taxi-flex">

                                    <!-- start column in tap taxi -->
                                    @foreach($taxi as $taxis)
                                    <div class="col-lg-4 col-sm-6">
                               <div class="img-tap-taxi">
                                            <a href="{{ url('/dashboard/taxi/details/'.$taxis->id) }}">
                                    <img src="{{ asset('userdashboard/images/images-taxi/taxi4.jpg') }}" alt=""
                                     class="img-responsive"></a>
                                     </div>
                                     <div class="detailes-img-tap-taxi">
                                         <p> {{ $taxis->name }}<span>${{  $taxis->salaryinday }}/Day</span></p>
                                         <span>{{ $taxis->cartype }}</span>
                                         <div class="detailes-2-img-tap-taxi">
                                             <i>{{ $taxis->datecreate }}</i>
                                             <i>{{ $taxis->engine_condition }}</i>
                                             <i>{{ $taxis->condition }}</i>
                                         </div>
                                     </div>
                                 </div>
                                    @endforeach
                                     <!-- end column in tap taxi -->
                                </div>
                                <!-- end row in tap taxi -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="cars-with-driver">
                                <!-- start row in taxi tap with driver -->
                                <div class="row father-taxi-flex">
                                    <!-- start column in tap taxi -->
                                    @if ($taxi != null)
                                    @foreach ($taxi as $taxis)
                                    @if ($taxis->with_driver == 1)
                                    <div class="col-lg-4 col-sm-6">
                                     <div class="img-tap-taxi">
                                                  <a href="{{ url('/dashboard/taxi/details/'.$taxis->id) }}">
                                          <img src="{{ asset('userdashboard/images/images-taxi/taxi4.jpg') }}" alt=""
                                           class="img-responsive"></a>
                                           </div>
                                           <div class="detailes-img-tap-taxi">
                                               <p> {{ $taxis->name }}<span>${{  $taxis->salaryinday }}/Day</span></p>
                                               <span>{{ $taxis->cartype }}</span>
                                               <div class="detailes-2-img-tap-taxi">
                                                   <i>{{ $taxis->datecreate }}</i>
                                                   <i>{{ $taxis->engine_condition }}</i>
                                                   <i>{{ $taxis->condition }}</i>
                                               </div>
                                           </div>
                                       </div>
                                    @endif
                                    @endforeach
                                    @else{
                                        <h3 class="text-center" style="margin-top: 17px;color: #fa2c27" > NO Result Found ! </h3>
                                    }
                                    @endif
                                 <!-- end column in tap taxi -->
                                </div>
                                <!-- end row in taxi tap with driver -->
                            </div>

                            <div role="tabpanel" class="tab-pane" id="cars-without-driver">
                                <!-- start row in taxi tap with driver -->
                                <div class="row father-taxi-flex">
                                    <!-- start column in tap taxi -->
                                    @if ($taxi != null)
                                    @foreach ($taxi as $taxis)
                                    @if ($taxis->with_driver == 0)
                                    <div class="col-lg-4 col-sm-6">
                                     <div class="img-tap-taxi">
                                                  <a href="{{ url('/dashboard/taxi/details/'.$taxis->id) }}">
                                          <img src="{{ asset('userdashboard/images/images-taxi/taxi4.jpg') }}" alt=""
                                           class="img-responsive"></a>
                                           </div>
                                           <div class="detailes-img-tap-taxi">
                                               <p> {{ $taxis->name }}<span>${{  $taxis->salaryinday }}/Day</span></p>
                                               <span>{{ $taxis->cartype }}</span>
                                               <div class="detailes-2-img-tap-taxi">
                                                   <i>{{ $taxis->datecreate }}</i>
                                                   <i>{{ $taxis->engine_condition }}</i>
                                                   <i>{{ $taxis->condition }}</i>
                                               </div>
                                           </div>
                                       </div>



                                    @endif
                                    @endforeach

                                    @else{
                                        <h3 class="text-center" style="margin-top: 17px;color: #fa2c27" > NO Result Found ! </h3>
                                    }
                                    @endif
                                 <!-- end column in tap taxi -->
                                </div>
                                <!-- end row in taxi tap with driver -->
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- END Portlet PORTLET-->

        </section>

        <!-- End Section Our Taxi Tap -->






        <!-- Start Section Available Cars -->

        <!-- BEGIN Portlet PORTLET-->
        <section class="availabel-cars-taxi">
            <div class="portlet light">
                <div class="overlay">
                    <div class="portlet-body">
                        <h1> <span>1260</span> Availabel Cars</h1>
                        <p>Find car rentals at over <span>29,000</span> locations in <span>197</span> countries
                        </p>
                        <a href="#" class="btn btn-primary btn-website-taxi">Search For Car</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Portlet PORTLET-->

        <!-- End Section Available Cars -->





        <!-- start section how it works -->
        <section class="How-It-Works-cars-taxi">
            <div class="portlet light">
                <div class="portlet-body">

                    <h1 class="text-center">HOW IT WORKS?</h1>

                    <!-- Strat first row in section how it works -->
                    <div class="row">
                        <!-- Strat column in section how it works -->
                        <div class="col-sm-6">
                            <div class="details-how-it-works-taxi text-center">
                                <i class="fa fa-car"></i>
                                <h3>APPLY THE APP</h3>
                                <p>Our company has its own app for the customers comfort usage anytim, anywhere.
                                    Join our network to receive regular updates.</p>
                            </div>
                        </div>
                        <!-- End column in section how it works -->


                        <!-- Strat column in section how it works -->
                        <div class="col-sm-6">
                            <div class="details-how-it-works-taxi text-center">
                                <i class="fa fa-car"></i>
                                <h3>CHOOSE A CAR</h3>
                                <p>Book any car for just an hour or full 7 days, with no limitation.</p>
                            </div>
                        </div>
                        <!-- End column in section how it works -->
                    </div>
                    <!-- End first row in section how it works -->


                    <br> <br>
                    <!-- Start second row in section how it works -->
                    <div class="row">
                        <!-- Strat column in section how it works -->
                        <div class="col-sm-6">
                            <div class="details-how-it-works-taxi details-how-it-works-taxi3 text-center">
                                <i class="fa fa-car"></i>
                                <h3>PICK UP A CARD</h3>
                                <p>Our cards are easy to use: hold it ot the windshield, or tap the app. There
                                    you go, inside!</p>
                            </div>
                        </div>
                        <!-- End column in section how it works -->


                        <!-- Strat column in section how it works -->
                        <div class="col-sm-6">
                            <div class="details-how-it-works-taxi details-how-it-works-taxi4 text-center">
                                <i class="fa fa-car"></i>
                                <h3>ENJOY DRIVING</h3>
                                <p>Our app gives you the opportunity to quickly and effectively apply online.
                                    After, we send you a card to acces the vehicle.</p>
                            </div>
                        </div>
                        <!-- End column in section how it works -->
                    </div>
                    <!-- Start second row in section how it works -->

                </div>
            </div>
        </section>
        <!-- end section how it works -->






        <!-- Start Section Save Cars -->

        <!-- BEGIN Portlet PORTLET-->
        <section class="Save-Cars-taxi">
            <div class="portlet light">
                <div class="overlay">
                    <div class="portlet-body">
                        <h1>SAVE 30% WITH THE APP</h1>
                        <p>Easy <span style="color: #fa2c27;">&</span> Fast - Book a car in <span
                                style="color: #fa2c27;">60</span> seconds
                        </p>
                        <a href="#" class="btn btn-primary btn-website-taxi-save"> <i class="fa fa-apple"></i>
                            DOWNLOAD ON APPLE STORE</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Portlet PORTLET-->

        <!-- End Section Save Cars -->





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
