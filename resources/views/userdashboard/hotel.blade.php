@extends('layouts.userlayouts')

@section('styles')
<link rel="stylesheet" href="{{asset('userdashboardcss/all.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/style-hotel.css')}}">
<link rel="stylesheet" href="{{asset("maincustomersiteresources/css/swiper-bundle.min.css")}}">

@endsection


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


        <!-- Start End header-sec-hotel -->
     <section class="header_sec">
        <div class="titil-header text-center">
      <h3>EasyBook Hotel Booking System</h3>
      <span class="line"></span>
      <p>Let's start exploring the world together with EasyBook
      </p>
        </div><!--./ titil-header-->
</section>
  <!-- End header-sec-hotel-->

  <!-- start photos-sec-hotel -->
     <section class="photo_sec">
              <div class="row">
                        <div class="col-lg-12 col-12">
                          <div class="titil_photo text-center">
                              <h3>Popular Destination</h3>
                              <p>Explore some of the best tips from around the city from our partners.</p>
                           </div> <!--./ titil_photo-->
                        </div>
              </div>
              <div class="row">
                  <div class="col-lg-8 col-md-8  col-sm-12 col-xs-12">
                        <div class="item_photo_hotel_2">
                             <a href="all-hotel.html">
                              <div class="overlay">
                                  <div class="item_content_photo">
                                      <button class="btn btn-danger"><i class="fas fa-hotel icon_hotel"></i>55 Hotel</button>
                                       </div>
                                       <div class="item_content_photo_buttom">
                                            <h4>Rome</h4>
                                            <p>Constant care and attention to the patients.</p>
                                       </div>
                                 </div>
                             </a>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                      <div class="item_photo_hotel_1">
                          <a href="all-hotel.html">
                              <div class="overlay">
                                  <div class="item_content_photo">
                                      <button class="btn btn-danger"><i class="fas fa-hotel icon_hotel"></i>60 Hotel</button>
                                       </div>
                                       <div class="item_content_photo_buttom">
                                            <h4>Paris
                                          </h4>
                                            <p class="test">Constant care and attention .</p>
                                       </div>
                                 </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                      <div class="item_photo_hotel_4">
                          <a href="all-hotel.html">
                              <div class="overlay">
                                  <div class="item_content_photo">
                                      <button class="btn btn-danger"><i class="fas fa-hotel icon_hotel"></i>30 Hotel</button>
                                       </div>
                                       <div class="item_content_photo_buttom">
                                            <h4>London
                                          </h4>
                                            <p class="test">Constant care and attention .</p>
                                       </div>
                                 </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                      <div class="item_photo_hotel_5">
                         <a href="all-hotel.html">
                          <div class="overlay">
                              <div class="item_content_photo">
                                  <button class="btn btn-danger"><i class="fas fa-hotel icon_hotel"></i>77 Hotel</button>
                                   </div>
                                   <div class="item_content_photo_buttom">
                                        <h4>Dubai
                                      </h4>
                                        <p class="test">Constant care and attention .</p>
                                   </div>
                             </div>
                         </a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4  col-sm-12 col-xs-12">
                      <div class="item_photo_hotel_3">
                          <a href="all-hotel.html">
                              <div class="overlay">
                                  <div class="item_content_photo">
                                      <button class="btn btn-danger"><i class="fas fa-hotel icon_hotel"></i>40 Hotel</button>
                                       </div>
                                       <div class="item_content_photo_buttom">
                                            <h4>New York
                                          </h4>
                                            <p class="test">Constant care and attention .</p>
                                       </div>
                                 </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                      <div class="btn_photo_hotel text-center">
                      <button class="btn"><a href="{{route('allhotels')}}">Explore All Cities</a></button>
                      </div>
                  </div>
                </div>
     </section>
  <!-- End photos-sec-hotel -->


  <!-- Swiper -->
<div class="swiper mySwiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
  <div class="items-swiper">
       <a href="all-hotel.html">
          <img src="{{asset('userdashboard/images/img-swiper/1.jpg')}}" alt="image hotel">
       </a>
      <div class="content-item-swiper">
               <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/1.jpg')}}" alt="image person">
               <ul class="ul-star-swiper">
                   <li><i class="fa fa-star"></i></li>
                   <li><i class="fa fa-star"></i></li>
                   <li><i class="fa fa-star"></i></li>
                   <li><i class="fa fa-star"></i></li>
               </ul>
               <div class="rate-class-name">
                   <h4>Very Good <span>102 Reviews</span></h4>
                   <button class="btn">4.7</button>
               </div>
          </div>
          <a href="#"><h3>Grand Hero Palace</h3></a>
            <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
            </a>
            <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
            <ul class="pa_left">
              <li><a href="#"><i class="fas fa-wifi"></i></a></li>
              <li><a href="#"><i class="fas fa-parking"></i></a></li>
              <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
              <li><a href="#"><i class="fas fa-utensils"></i></a></li>
          </ul>
          <div class="botom-item-swiper">
               <button class="btn">Awg/Night <span>$ 65</span></button>
              <ul>
                  <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
                  <li><a href="#"><i class="fas fa-heart"></i></a></li>
                  <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
              </ul>
          </div>
      </div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
  <img src="{{asset('userdashboard/images/img-swiper/2.jpg')}}" alt="image hotel">
</a>
  <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/2.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4>Good <span>102 Reviews</span></h4>
          <button class="btn">4.9</button>
      </div>
 </div>
  <a href="#"><h3>Park Central</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 80</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
  <img src="{{asset('userdashboard/images/img-swiper/3.jpg')}}" alt="image hotel">
</a>
  <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/3.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4>Very Good <span>102 Reviews</span></h4>
          <button class="btn">4.7</button>
      </div>
 </div>
  <a href="#"><h3>Holiday Home</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 65</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
     <a href="all-hotel.html">
      <img src="{{asset('userdashboard/images/img-swiper/4.jpg')}}" alt="image hotel">
     </a>
  <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/4.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4> Good <span>102 Reviews</span></h4>
          <button class="btn">4.4</button>
      </div>
 </div>
  <a href="#"><h3>Gold Plaza Hotel</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 40</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
  <img src="{{asset('userdashboard/images/img-swiper/5.jpg')}}" alt="image hotel">
</a>
   <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/5.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4>Good <span>102 Reviews</span></h4>
          <button class="btn">4.7</button>
      </div>
 </div>
  <a href="#"><h3>Moonlight Hotel</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 65</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
<img src="{{asset('userdashboard/images/img-swiper/6.jpg')}}" alt="image hotel">

</a>
  <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/1.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4> Good <span>102 Reviews</span></h4>
          <button class="btn">3.8</button>
      </div>
 </div>
  <a href="#"><h3>Premium Plaza Hotel</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 35</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
  <img src="{{asset('userdashboard/images/img-swiper/8.jpg')}}" alt="image hotel">
</a>
   <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/2.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4> Good <span>102 Reviews</span></h4>
          <button class="btn">4.9</button>
      </div>
 </div>
  <a href="#"><h3>Grand Hero Palace</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 80</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
<img src="{{asset('userdashboard/images/img-swiper/2 (1).jpg')}}" alt="image hotel">

</a>
  <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/3.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4>good <span>102 Reviews</span></h4>
          <button class="btn">4.4</button>
      </div>
 </div>
  <a href="#"><h3>Grand Hero Palace</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 50</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
<div class="swiper-slide">
<div class="items-swiper">
<a href="all-hotel.html">
  <img src="{{asset('userdashboard/images/img-swiper/3 (1).jpg')}}" alt="image hotel">

</a>
   <div class="content-item-swiper">
      <img src="{{asset('userdashboard/images/img-swiper/img-person-swiper/4.jpg')}}" alt="image person">
      <ul class="ul-star-swiper">
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
      </ul>
      <div class="rate-class-name">
          <h4>bad <span>102 Reviews</span></h4>
          <button class="btn">4.9</button>
      </div>
 </div>
  <a href="#"><h3>Grand Hero Palace</h3></a>
    <a href="#"><i class="fas fa-map-marker-alt"></i><span> 34-42 Montgomery St , NY, USA</span>
    </a>
    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend.</p>
    <ul class="pa_left">
      <li><a href="#"><i class="fas fa-wifi"></i></a></li>
      <li><a href="#"><i class="fas fa-parking"></i></a></li>
      <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
      <li><a href="#"><i class="fas fa-utensils"></i></a></li>
  </ul>
  <div class="botom-item-swiper">
       <button class="btn">Awg/Night <span>$ 80</span></button>
      <ul>
          <li><a href="#"><i class="fas fa-exchange-alt"></i></a></li>
          <li><a href="#"><i class="fas fa-heart"></i></a></li>
          <li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
      </ul>
  </div>
</div>
</div>
</div>
</div>

   <!--End Swiper  -->

   <!--Start parallax-section -->
     <section class="parallax_sec_hotel">
              <div class="overlay">
                       <div class="row">
                          <Div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
                               <div class="desc_parallax_hotel">
                                  <h3><b>M</b>ost Popular Picture</h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                  <button class="btn btn_Viewhotel"><a href="all-hotel.html">View All Hotels</a></button>
                               </div>
                              </Div>
                              <Div class="col-lg-8  col-md-8 col-sm-7 col-xs-12">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                      <div class="carousel-inner">
                                        <div class="item active">
                                          <img src="{{asset('userdashboard/images/img-swiper/1.jpg')}}" alt="image hotel">
                                        </div>

                                        <div class="item">
                                          <img src="{{asset('userdashboard/images/img-swiper/2.jpg')}}" alt="image hotel">
                                        </div>

                                        <div class="item">
                                          <img src="{{asset('userdashboard/images/img-swiper/3.jpg')}}" alt="image hotel">
                                      </div>
                                      <div class="item ">
                                          <img src="{{asset('userdashboard/images/img-swiper/4.jpg')}}" alt="image hotel">
                                        </div>

                                        <div class="item">
                                          <img src="{{asset('userdashboard/images/img-swiper/5.jpg')}}" alt="image hotel">
                                        </div>

                                        <div class="item">
                                          <img src="{{asset('userdashboard/images/img-swiper/6.jpg')}}" alt="image hotel">
                                      </div>
                                      </div>

                                      <!-- Left and right controls -->
                                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                             </div>
   </section>
   <!--end parallax-section -->

   <div class="Title_Application text-center">
    <h1>Our Application</h1>
    <span>We have this app to communicate easily</span>
   </div>

     <!--Start location-section -->
   <section class="location_sec">

        <div class="overlay_location">
             <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="titil_location">
                            <h3>Our App Available Now</h3>
                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit, sed diam nonu mmy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
                            <div class="btn_location">
                                <button class="btn"><a href="#"><i class="fab fa-apple"></i>
                                  Download for iPhone</a></button>
                                  <button class="btn"><a href="#"><i class="fab fa-android"></i>
                                      Download for Android</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <div class="img_location">
                             <img src="{{asset('userdashboard/images/location/map.png')}}" alt="">
                         </div>
                  </div>
             </div>
        </div>
  </section>
   <!--end location-section -->



<!-- END CONTAINER -->


</div>
</div>


@endsection


@section('scripts')

<script src="{{asset('maincustomersiteresources/Js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/scripts.js')}}"></script>


@endsection
