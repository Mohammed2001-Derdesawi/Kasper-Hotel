@extends('layouts.userlayouts')
@section('styles')
    <link rel="stylesheet" href="{{asset('userdashboard/css/style-hotel.css')}}">
    <link rel="shortcut icon" href="{{asset('userdashboard/fonts/fa-regular-400.ttf')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/color.css')}}">
    {{--  <link type="text/css" rel="stylesheet" href="{{asset('userdashboard/css/bootstrap.min.css')}}">  --}}
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
                    <a href="{{ route('dashboard') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>View Rooms</span>
                </li>
            </ul>

        </div>








        <!-- Start My Content -->

        <div class="portlet light "  style="padding: 0 !important; ">
         <div class="row">
             <div class="col-lg-6 col-md-6">
                <div class="swiperhotelview">
                    <div class="swiper mySwiper" style="box-shadow: 0px !important;">
                        <div class="swiper-wrapper">
                      @foreach($roomhotel->images as $image)
                        <div class="swiper-slide image_view_slider" style="box-shadow: 0px !important;">
                            <img style="box-shadow: 0px !important;"
                             src="{{asset($image->imageName)}}" alt="" class="img-responsive">
                          </div>
                        @endforeach

                        </div>
                        <div class="swiper-button-next" style="color: #fa2c27 !important; "></div>
                        <div class="swiper-button-prev" style="color: #fa2c27 !important; "></div>

                      </div>
             </div>
         </div>



         <div class="col-lg-6 col-md-6">

        <div class="after-swiperhotelview" style="margin: 50px 20px;" >
            <div class="row">
                <div class="col-lg-12"><br><br>
                  <span class="property"><strong>Property highlights</strong></span>
                </div><br>
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
                    <h1 class="text-center Title_Application" >Avaliable Rooms</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="container">
                @foreach ($roomhotel->rooms as $roomhotels)
                @if ($roomhotels->isclean == 1)
                <div class="listing-item-container init-grid-items">
                   <!-- listing-item  -->
                   <div class="listing-item">
                       <article class="geodir-category-listing fl-wrap">
                           <div class="geodir-category-img">
                                <img src="{{asset($roomhotels->imageRoom)}}" alt=""></a>
                               <div class="listing-avatar">
                                </a>
                               </div>
                               <div class="geodir-category-opt">
                                   <div class="listing-rating card-popup-rainingvis" >
                                    <ul class="ul-star-swiper">
                                        @for($i = 0; $i < $roomhotels->rating ; $i++)
                                        <li><i class="fa fa-star"></i></li>
                                        @endfor

                                    </ul>
                                   </div>
                                   <div class="rate-class-name">
                                       <span style="color: #fa2c27;background-color: #fff">{{ $roomhotels->rating }}</span>
                                   </div>
                               </div>
                           </div>

                           <div class="geodir-category-content fl-wrap">
                               <div class="geodir-category-content-title fl-wrap">
                                   <div class="geodir-category-content-title-item">
                                       <div class="geodir-category-location fl-wrap">
                                              <h6 class="title_numpeople">
                                                  <i class="fas fa-users icon_view"></i> Number of people in the room : <strong> {{ $roomhotels->people}} people</strong></h6>
                                            </div>
                                   </div>
                               </div>
                                  <h6 class="title_numpeople">The Floor :
                                   <strong>{{ $roomhotels->floor }}</strong></h6> <br>
                                   <h6 class="title_numpeople">Room Type : <strong>{{ $roomhotels->roomType }}</strong></h6><br>
                                   <h6 class="title_numpeople"> Possibility to register :
                                @if ($roomhotels->isclean != 0)
                                    <strong>Open</strong>
                               @else{
                                <strong>close</strong>
                               }
                                @endif
                                   </h6><br>
                               <ul class="facilities-list fl-wrap">
                                   <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                   <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                   <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                   <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                               </ul>
                               <div class="geodir-category-footer fl-wrap">
                                   <div class="geodir-category-price">Awg/Night <span>$ {{ $roomhotels->room_price }}</span>
                                </div>

                                <div class="">

                                    <!-- Button trigger modal -->
                                    {{--  <a href="{{ url('dashboard/hotel/view/'.$roomhotels->hotel->id.'/'.$roomhotels->id) }}"->{{ $roomhotels->name }}">  --}}
                                        <button type="submit" class="BookNow" data-toggle="modal" data-target="#exampleModalCenter"
                                            > Book Now</button>
                                    {{--  </a>  --}}



                                </div>
                                   <div class="geodir-opt-list">
                                       <a href="#0" class="map-item"><i class="fa fa-map-marker-alt"></i></a>
                                       <a href="#" class="geodir-js-favorite"><i class="fa fa-heart"></i>

                                       </a>
                                   </div>
                               </div>
                           </div>

                       </article>
                   </div>
                   <!-- listing-item end -->
                   <!-- Modal -->
                   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           <h5 class="modal-title text-center" id="exampleModalLongTitle">Room reservations</h5>
                         </div>

                     <form action=" {{ url('/dashboard/hotel/index') }} " method="POST">
                         @csrf
                         <div class="modal-body text-center">
                           <label for="input_1"></label>
                           <input type="text" name=""  id="input_1"  required><br><br>
                           <label for="input_2"></label>
                           <input type="text" name="" id="input_2"  required><br><br>
                           <label for="input_3"></label>
                           <input type="text" name="" id="input_3"  required><br><br>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="closeBookNow " data-dismiss="modal">Close</button>
                          <button type="button" class="BookNow">Book Now</button>
                        </div>
                     </form>
                       </div>
                     </div>
                   </div>

                @endif

           @endforeach

               </div>


            </div>


            <!-- pagination-->
            <div class="d-flex justify-content-center">
               {{--  {{  $roomhotel->links() }}  --}}
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
{{--  <script type="text/javascript" src="{{asset('userdashboard/js/bootstrap.min.js')}}"></script>  --}}
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
