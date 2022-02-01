@extends('layouts.userlayouts')
@section('styles')
    <link rel="stylesheet" href="{{asset('userdashboard/css/style-hotel.css')}}">
    <link rel="shortcut icon" href="{{asset('userdashboard/fonts/fa-regular-400.ttf')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/color.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/style-all-hotel.css')}}">
    <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/swiper-bundle.min.css")}}">
<style>
.swiper {
width: 100%;
height: 100%;
box-shadow: 0px !important;
}

.swiper-slide {
text-align: center;
font-size: 18px;
background: #fff;



/* Center slide text vertically */
display: -webkit-box;
display: -ms-flexbox;
display: -webkit-flex;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
-webkit-justify-content: center;
justify-content: center;
-webkit-box-align: center;
-ms-flex-align: center;
-webkit-align-items: center;
align-items: center;
box-shadow: 0px 0px 0px 0px #fff !important;
}

.swiper-slide img {
display: block;
width: 100%;
height: 100%;
object-fit: cover;

}

</style>
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

        <div class="portlet light "  style="padding: 0 !important; ">
         <div class="row">
             <div class="col-lg-6">
                <div class="swiperhotelview">
                    <div class="swiper mySwiper" style="box-shadow: 0px !important;">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" style="box-shadow: 0px !important;"><img style="box-shadow: 0px !important;" src="{{asset('userdashboard/images/slider1.jpg')}}" alt="" class="img-responsive"></div>
                          <div class="swiper-slide" style="box-shadow: 0px !important;"><img style="box-shadow: 0px !important;" src="{{asset('userdashboard/images/slider1.jpg')}}" alt="" class="img-responsive" ></div>
                          <div class="swiper-slide" style="box-shadow: 0px !important;"><img  style="box-shadow: 0px !important;" src="{{asset('userdashboard/images/slider1.jpg')}}" alt="" class="img-responsive" ></div>


                        </div>
                        <div class="swiper-button-next" style="color: #fa2c27 !important; "></div>
                        <div class="swiper-button-prev" style="color: #fa2c27 !important; "></div>

                      </div>
             </div>
         </div>



         <div class="col-lg-6">

        <div class="after-swiperhotelview" style="margin: 50px 20px;" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="nameofthehotel" style="display: flex !important; justify-content: flex-start !important; align-items: center !important;">
               <span style="background-color: #fa2c27; padding: 10px !important; color: #fff; font-weight: 600; letter-spacing: 1px;">
                   7.8
               </span>
               <strong style="margin:0 10px;color: #1f1f1f !important; font-size: 18px !important;">Name of The Hotel</strong>
                    </div>
                    <div class="distanition" style="margin: 10px 0;">
                        <i class="fas fa-map-marker-alt" style="color: #fa2c27;"></i>
                        <i style="color: #1f1f1f; font-size: 14px;">
                            Al Masion Main Street, Sodqi Al Dajani, Ramallah, 0097, Palestinian Territories</i>
                    </div>

                </div>

                <div class="col-lg-12">
                  <span class="property"><strong>Property highlights</strong></span>

                </div>
                <div class="col-lg-12">
                     <div class="highlights">
                        <div class="amenities">
                            <span>Main amenities</span>
                            <ul>
                                <li>
                                    <i class="far fa-check"></i> 40 smoke-free guestrooms
                                </li>
                                <li>
                                    <i class="far fa-check"></i> Daily housekeeping
                                </li>
                                <li>
                                    <i class="far fa-check"></i>  Restaurant and bar/lounge
                                </li>
                                <li>
                                    <i class="far fa-check"></i> Rooftop terrace
                                </li>
                                <li>
                                    <i class="far fa-check"></i>Fitness center
                                </li>
                                <li>
                                    <i class="far fa-check"></i>Airport shuttle
                                </li>
                            </ul>


                        </div>
                              <div class="amenities" >
                            <span>Free Services</span>
                            <ul>
                                <li>
                                    <i class="fas fa-car"></i> Free parking
                                </li>
                                <li>
                                    <i class="fas fa-wifi"></i> Free WiFi
                                </li>
                                <li>
                                    <i class="fas fa-bus"></i> Airport transfer
                                </li>
                                <li>
                                    <i class="fas fa-dumbbell"></i> Gym
                                </li>
                                <li>
                                    <i class="fas fa-glass-martini-alt"></i> Bar
                                </li>
                            </ul>


                        </div>
                     </div>
                </div>
            </div>


          </div>
         </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                    <h1 class="text-center" style="color: #1f1f1f; margin: 50px 0; font-size: 30px !important; font-weight: 700; letter-spacing: 1px;">Avaliable Rooms</h1>
            </div>
            <div class="col-lg-12">
                <div class="listing-item-container init-grid-items fl-wrap">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/8.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                </div>
                                <div class="sale-window">Sale 20%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong>Very Good</strong>27 Reviews </div>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="#">Premium Plaza Hotel</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#0" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                    </div>
                                </div>
                                <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-category-price">Awg/Night <span>$ 320</span></div>
                                    <div class="geodir-opt-list">
                                        <a href="#0" class="map-item"><i class="fa fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fa fa-heart"></i>
                                            <span class="geodir-opt-tooltip">Save</span>
                                        </a>
                                        <a href="#" class="geodir-js-booking"><i class="fa fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/4.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/2.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Julie Cramp</strong></span>
                                </div>
                                <div class="sale-window big-sale">Sale 50%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong>Good</strong>12 Reviews </div>
                                        <span>4.2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="#">Grand Hero Palace</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#1" class="map-item"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                    </div>
                                </div>
                                <p> Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-opt-link">
                                        <div class="geodir-category-price">Awg/Night <span>$ 120</span></div>
                                    </div>
                                    <div class="geodir-opt-list">
                                        <a href="#1" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>2</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                        <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/6.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/3.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Andy Moore</strong></span>
                                </div>
                                <div class="sale-window">Sale 28%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong>Good</strong>6 Reviews </div>
                                        <span>4.7</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="listing-single.html">Park Central</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#2" class="map-item"><i class="fas fa-map-marker-alt"></i>40 Journal Square Plaza, NJ,  USA</a></div>
                                    </div>
                                </div>
                                <p> Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-opt-link">
                                        <div class="geodir-category-price">Awg/Night <span>$ 80</span></div>
                                    </div>
                                    <div class="geodir-opt-list">
                                        <a href="#" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>3</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                        <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/2.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/4.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Mary Jones</strong></span>
                                </div>
                                <div class="sale-window">Sale 20%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong>Pleasant</strong>10 Reviews </div>
                                        <span>3.2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="#">Holiday Home</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#3" class="map-item"><i class="fas fa-map-marker-alt"></i> 75 Prince St,  NY, USA</a></div>
                                    </div>
                                </div>
                                <p>  Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-opt-link">
                                        <div class="geodir-category-price">Awg/Night <span>$ 50</span></div>
                                    </div>
                                    <div class="geodir-opt-list">
                                        <a href="#3" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                        <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/3.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/5.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Fider Mamby</strong></span>
                                </div>
                                <div class="sale-window">Sale 10%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong>Very Good</strong>102 Reviews </div>
                                        <span>4.7</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="#">Gold Plaza Hotel</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#4" class="map-item"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                    </div>
                                </div>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet . </p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-opt-link">
                                        <div class="geodir-category-price">Awg/Night <span>$ 210</span></div>
                                    </div>
                                    <div class="geodir-opt-list">
                                        <a href="#4" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                        <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <a href="#"><img src="{{asset('userdashboard/images/gal/5.jpg')}}" alt=""></a>
                                <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                </div>
                                <div class="sale-window big-sale">Sale 70%</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <div class="rate-class-name">
                                        <div class="score"><strong> Good</strong>8 Reviews </div>
                                        <span>4.1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="#">Moonlight Hotel</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA</a></div>
                                    </div>
                                </div>
                                <p> Class aptent taciti  Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
                                <ul class="facilities-list fl-wrap">
                                    <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                    <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                    <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                    <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                </ul>
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="geodir-opt-link">
                                        <div class="geodir-category-price">Awg/Night <span>$ 105</span>

                                        </div>

                                    </div>

                                    <div>

                                    </div>
                                    <div class="geodir-opt-list">
                                        <a href="#5" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span></a>
                                        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                        <a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                </div>
            </div>




        </div>





        






        <!-- End My Content -->





    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

@endsection

@section('scripts')
<script src="{{asset("maincustomersiteresources/Js/swiper-bundle.min.js")}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/mapplugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/maps.js')}}"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endsection
