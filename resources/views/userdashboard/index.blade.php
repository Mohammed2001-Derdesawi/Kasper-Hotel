@extends('layouts.userlayouts')
@section('content')
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
                <div class="portlet-body">
                    <!-- start row in home page -->
                    <div class="row row-home-dashboard">
                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="img-home-dashboard">
                                <img src="{{asset('userdashboard/images/3.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <!-- end cloumn in home page -->
                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="details-img-home-dashboard">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, fugiat.
                                    Nostrum explicabo et vitae harum quisquam vel cum quaerat id nam aperiam
                                    laudantium velit quis, repellat voluptates optio similique beatae atque impedit
                                    deserunt ipsam? Eveniet possimus inventore soluta, iure dolorem aperiam in
                                    asperiores saepe suscipit tempore nostrum nesciunt assumenda magni molestias
                                    eaque quisquam culpa dicta unde, ea repudiandae. Placeat in expedita est
                                    exercitationem sunt beatae adipisci id consectetur quidem quis ratione, unde
                                    esse magnam accusantium! Sequi vero odit dolores labore nihil assumenda dolorum .</p>

                            </div>
                        </div>
                        <!-- end cloumn in home page -->
                    </div>
                    <!-- end row in home page -->

                    <!-- start row in home page -->
                    <div class="row row-home-dashboard">
                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="details-img-home-dashboard">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, fugiat.
                                    Nostrum explicabo et vitae harum quisquam vel cum quaerat id nam aperiam
                                    laudantium velit quis, repellat voluptates optio similique beatae atque impedit
                                    deserunt ipsam? Eveniet possimus inventore soluta, iure dolorem aperiam in
                                    asperiores saepe suscipit tempore nostrum nesciunt assumenda magni molestias
                                    eaque quisquam culpa dicta unde, ea repudiandae. Placeat in expedita est
                                    exercitationem sunt beatae adipisci id consectetur quidem quis ratione, unde
                                    esse magnam accusantium! Sequi vero odit dolores labore nihil assumenda dolorum </p>

                            </div>
                        </div>
                        <!-- end cloumn in home page -->

                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="img-home-dashboard">
                                <img src="{{asset('userdashboard/images/1.jpg')}}" alt=""
                                    class="img-responsive">
                            </div>
                        </div>
                        <!-- end cloumn in home page -->
                    </div>
                    <!-- end row in home page -->

                    <!-- start row in home page -->
                    <div class="row row-home-dashboard">
                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="img-home-dashboard">
                                <img src="{{asset('userdashboard/images/2.jpg')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <!-- end cloumn in home page -->
                        <!-- start cloumn in home page -->
                        <div class="col-lg-6">
                            <div class="details-img-home-dashboard">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, fugiat.
                                    Nostrum explicabo et vitae harum quisquam vel cum quaerat id nam aperiam
                                    laudantium velit quis, repellat voluptates optio similique beatae atque impedit
                                    deserunt ipsam? Eveniet possimus inventore soluta, iure dolorem aperiam in
                                    asperiores saepe suscipit tempore nostrum nesciunt assumenda magni molestias
                                    eaque quisquam culpa dicta unde, ea repudiandae. Placeat in expedita est
                                    exercitationem sunt beatae adipisci id consectetur quidem quis ratione, unde
                                    esse magnam accusantium! Sequi vero odit dolores labore nihil assumenda dolorum </p>

                            </div>
                        </div>
                        <!-- end cloumn in home page -->
                        <div class="col-lg-6 col-xs-12 center Div_allHotel">
                            <div class="btn_photo_hotel text-center">
<<<<<<< HEAD
                                <button class="btn"><a href="{{route('hotel')}}">Explore All Hotel</a></button>
=======
                                <button class="btn"><a href="all-hotel.html">Explore All Hotel</a></button>
>>>>>>> 71a648eda0b17e64fd7f9f755ea000f267b22001
                                </div>
                          </div>
                    </div>
                    <!-- end row in home page -->



                    <!-- start message section -->
                    <section class="message_sec-home">
                        <div class="titil_dash-home text-center">
                            <h3>Customers' Sayings</h3>
                            <span>Follow news</span>
                        </div>
                        <!--./ titil_dash-->
                        <!--./ row-->
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 comment-home">
                                <div class="img_message-home image-responsive">
                                    <img src="{{asset('userdashboard/images/speaker-1.png')}}" alt="image message">
                                </div>
                                <!--./ img_message-->
                                <div class="desc_message-home">
                                    <!-- <span class="effect_left-home"></span> -->
                                    <h3>NSR WADI</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sint.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
                                        sint.Lorem ipsum dolor sit amet .</p>

                                    <div class="icon-comment-home">
                                        <span><i class="fa fa-clock-o"></i>9/8/2021</span>
                                        <span><i class="fa fa-map-marker"></i>Gaza</span>
                                        <span><i class="fa fa-comments"></i>More</span>
                                    </div>
                                </div>
                                <!--./ desc_message-->
                            </div>

                            <div class="col-lg-6 col-xs-12 comment-home">
                                <div class="img_message-home image-responsive">
                                    <img src="{{asset('userdashboard/images/speaker-1.png')}}" alt="image message">
                                </div>
                                <!--./ img_message-->
                                <div class="desc_message-home">
                                    <!-- <span class="effect_left-home"></span> -->
                                    <h3>NSR WADI</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sint.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
                                        sint.Lorem ipsum dolor sit amet .</p>

                                    <div class="icon-comment-home">
                                        <span><i class="fa fa-clock-o"></i>9/8/2021</span>
                                        <span><i class="fa fa-map-marker"></i>Gaza</span>
                                        <span><i class="fa fa-comments"></i>More</span>
                                    </div>
                                </div>
                                <!--./ desc_message-->
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-6 col-xs-12 comment-home">
                                <div class="img_message-home image-responsive">
                                    <img src="{{asset('userdashboard/images/speaker-1.png')}}" alt="image message">
                                </div>
                                <!--./ img_message-->
                                <div class="desc_message-home">
                                    <!-- <span class="effect_left-home"></span> -->
                                    <h3>NSR WADI</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sint.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
                                        sint.Lorem ipsum dolor sit amet .</p>

                                    <div class="icon-comment-home">
                                        <span><i class="fa fa-clock-o"></i>9/8/2021</span>
                                        <span><i class="fa fa-map-marker"></i>Gaza</span>
                                        <span><i class="fa fa-comments"></i>More</span>
                                    </div>
                                </div>
                                <!--./ desc_message-->
                            </div>

                            <div class="col-lg-6 col-xs-12 comment-home">
                                <div class="img_message-home image-responsive">
                                    <img src="{{asset('userdashboard/images/speaker-1.png')}}" alt="image message">
                                </div>
                                <!--./ img_message-->
                                <div class="desc_message-home">
                                    <!-- <span class="effect_left-home"></span> -->
                                    <h3>NSR WADI</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, sint.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius,
                                        sint.Lorem ipsum dolor sit amet .</p>

                                    <div class="icon-comment-home">
                                        <span><i class="fa fa-clock-o"></i>9/8/2021</span>
                                        <span><i class="fa fa-map-marker"></i>Gaza</span>
                                        <span><i class="fa fa-comments"></i>More</span>
                                    </div>
                                </div>
                                <!--./ desc_message-->
                            </div>
                        </div>


                        <!--./ row-->
                    </section>
                </div>
                <!-- end message section -->
            </div>

        </div>
        <!-- END Portlet PORTLET-->

        <!-- End My Content -->



    </div>

@endsection
