@extends('layouts.userlayouts')

@section('styles')
<link rel="stylesheet" href="{{asset('userdashboardcss/all.min.css')}}">
<link rel="stylesheet" href="{{asset('maincustomersiteresources/css/all.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/style-hotel.css')}}">
<link rel="stylesheet" href="{{asset("maincustomersiteresources/css/swiper-bundle.min.css")}}">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

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
                    <a href="{{ route('dashboard') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Hotel</span>
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
                  @foreach ( $datacountry as $datacountrys)
                  <div class="col-lg-6 col-md-6  col-sm-12 col-xs-12">
                    <div class="item_photo_hotel_2">
                        <a href="{{ url('dashboard/all/hotel/'.$datacountrys->id)  }}">                         <div class="overlay">
                              <div class="item_content_photo">
                                  <button class="btn btn-danger">
                                      <i class="fas fa-hotel icon_h otel"></i>
                                      {{ $datacountrys->hotels()->count() }}
                                    </button>
                                   </div>
                          <div class="item_content_photo_buttom">
                              <h4>{{ $datacountrys-> name }}</h4>
                              <p class="test"> {{ $datacountrys->description }}</p>
                                    </div>
                             </div>
                         </a>
                  </div>
              </div>
                  @endforeach

                </div>
     </section>
  <!-- End photos-sec-hotel -->


  <!-- Swiper -->
<div class="swiper mySwiper">
<div class="swiper-wrapper">
    @foreach ($datahotel as $datahotels)
   <div class="swiper-slide">
     <div class="items-swiper">
       <a href="{{ url('dashboard/all/hotel/'.$datahotels->country_id) }}">
          <img src="{{asset($datahotels->images()->first()->imageName)}}" alt="image hotel">
       </a>
      <div class="content-item-swiper">
               <img src="{{asset($datahotels->manager->image)}}" alt="image person">
               <ul class="ul-star-swiper">

                   @for($i = 0; $i < $datahotels->stars; $i++)
                   <li><i class="fa fa-star"></i></li>
                   @endfor

               </ul>
               <div class="rate-class-name">
                   <h4><span> </span></h4>
                   <button class="btn">{{ $datahotels->stars }}</button>
               </div>
          </div>
          <a href="{{ url('dashboard/all/hotel/'.$datahotels->country_id) }}">
            <h3>{{ $datahotels->name }}</h3>
  </a>
        <i class="fas fa-map-marker-alt "></i><span> {{ $datahotels->country->name}} </span>
              <p>{{ $datahotels->description}}</p>

            <ul class="pa_left">
              <li><a href="#"><i class="fas fa-wifi"></i></a></li>
              <li><a href="#"><i class="fas fa-parking"></i></a></li>
              <li><a href="#"><i class="fas fa-smoking-ban"></i></a></li>
              <li><a href="#"><i class="fas fa-utensils"></i></a></li>
          </ul>
          <div class="botom-item-swiper">
              @php
                  $sum = 0;
              @endphp
              @foreach($datahotels->rooms as $room)
                 @php
                 $sum += $room->room_price;
                 @endphp
              @endforeach

               <button class="btn">Awg/Night <span>$
                 @if ($datahotels->rooms()->count() == 0)
                      {{ 100 }}

                 @else
                 @php
             echo intval($sum)  /  intval($datahotels->rooms()->count());

                 @endphp

                 @endif


            </span></button>
              <ul>
                  <li><a href="#"><i class="fa fa-exchange-alt"></i></a></li>
                  <li><a href="#"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#"><i class="fa fa-map-marker-alt"></i></a></li>
              </ul>
          </div>
      </div>
</div>
@endforeach

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
                                  <button class="btn btn_Viewhotel"><a href="{{ route('pageallhotel') }}">View All Hotels</a></button>
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
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
  },
});
</script>
<script src="{{asset('maincustomersiteresources/Js/swiper-bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/scripts.js')}}"></script>


@endsection
