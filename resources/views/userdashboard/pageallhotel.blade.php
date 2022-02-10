@extends('layouts.allhotellayouts')

@section('contentallhotel')
<!--col-list-wrap -->
<div class="col-list-wrap left-list">
    <!--list-wrap-search  -->

    <!--list-wrap-search end -->

    <!-- list-main-wrap-->
    <div class="list-main-wrap fl-wrap card-listing">
        <div class="container">
            <!-- list-main-wrap-title-->
            <!-- list-main-wrap-title end-->
            <!-- list-main-wrap-opt-->
            <div class="list-main-wrap-opt fl-wrap">
                <!-- price-opt-->
                <div class="price-opt">
                    <span class="price-opt-title">Sort results by:</span>
                    <div class="listsearch-input-item">
                        <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                            <option>Popularity</option>
                            <option>Average rating</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </div>
                </div>
                <!-- price-opt end-->
                <!-- price-opt-->
                <div class="grid-opt">
                    <ul>
                        <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                        <li><span class="one-col-grid act-grid-opt"><i class="fas fa-bars"></i></span></li>
                    </ul>
                </div>
                <!-- price-opt end-->
            </div>
            <!-- list-main-wrap-opt end-->
            <!-- listing-item-container -->
            @foreach ($datahotel as $datahotels)
            <div class="listing-item-container init-grid-items">
               <!-- listing-item  -->
               <div class="listing-item">
                   <article class="geodir-category-listing fl-wrap">
                       <div class="geodir-category-img">
                           <a href="{{ url('dashboard/hotel/view/'.$datahotels->country_id) }}"><img src="{{asset('userdashboard/images/gal/8.jpg')}}" alt=""></a>
                           <div class="listing-avatar"><a href="{{ url('dashboard/hotel/view/'.$datahotels->country_id) }}"><img src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt=""></a>
                                {{-- @foreach ($datamanager as $datamanagers) --}}
                               <span class="avatar-tooltip">Manager : <strong>{{ $datahotels->manager->name }}</strong></span>

                               {{-- @endforeach --}}
                           </div>
                           <div class="sale-window">Sale 20%</div>
                           <div class="geodir-category-opt">
                               <ul class="ul-star-swiper
                               star_allhotel">

                                   @for($i = 0; $i < $datahotels->stars; $i++)
                                   <li class="star_allhotel_li"><i class="fa fa-star"></i></li>
                                   @endfor

                               </ul>
                               <div class="rate-class-name">
                                   <div class="score"><strong></strong> </div>
                                   <span>{{ $datahotels->stars }}</span>
                               </div>
                           </div>
                       </div>
                       <div class="geodir-category-content fl-wrap">
                           <div class="geodir-category-content-title fl-wrap">
                               <div class="geodir-category-content-title-item">
                                   <h3 class="title-sin_map"><a href="{{ url('dashboard/hotel/view/'.$datahotels->country_id) }}">{{ $datahotels->name }}</a></h3>
                                   <div class="geodir-category-location fl-wrap"><a href="#0" class="map-item"><i class="fas fa-map-marker-alt"></i>{{ $datahotels->country->name }}</a></div>
                               </div>
                           </div>
                           <p>{{ $datahotels->description }}</p>
                           <ul class="facilities-list fl-wrap">
                               <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                               <li><i class="fal fa-parking"></i><span>Parking</span></li>
                               <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                               <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                           </ul>
                           <div class="geodir-category-footer fl-wrap">
                               <div class="geodir-category-price">Awg/Night <span>$ {{ $datahotels-> salaryAtNight }}</span></div>
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
            @endforeach



</div>
            <!-- listing-item-container end-->


            <!-- pagination-->
            <div class="d-flex justify-content-center">
               {{  $datahotel->links() }}
            </div>

@endsection
