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
     <div class="row">
        <div class="col-md-12">

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
                    <h6>ALL Hotel</h6>
                </li>
            </ul>

        </div>

            <!--list-wrap-search  -->
            <div class="list-wrap-search fl-wrap lws_mobile" id="lisfw">
             <div class="container">
                 <div class="row">
                    <form action=" {{ route('search') }} " method="GET">
                        <!-- col-list-search-input-item -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                                <label>City/Category</label>
                                <span class="header-search-input-item-icon"><i class="fa fa-cart-plus icon_cart"></i></span>
                                <input type="search" name="search_citys" placeholder="Name The city Or Country" class="autocomplete-input form-control"  id="autocompleteid2"  />
                            </div>
                        </div>
                        <!-- col-list-search-input-item end -->
                        <!-- col-list-search-input-item -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                            <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                                <label>Destination</label>
                                <span class="header-search-input-item-icon"><i class="fa fa-cart-plus icon_cart"></i></span>
                                <input type="search" name="search_name" placeholder="Destination or Hotel Name" class="autocomplete-input form-control"  id="autocompleteid3"  />
                            </div>
                        </div>
                        <!-- col-list-search-input-item end -->
                        <!-- col-list-search-input-item -->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                           <!-- col-list-search-input-item -->
                           <div class="search-input-item midd-input">
                               <div class="col-list-search-input-item fl-wrap">
                                   <div class="quantity-item">
                                       <label>The Numbers People</label>
                                       <div class="">
                                 <input type="number" min="1" max="3"   placeholder="The Numbers People" class="form-control">
                                       </div>
                                   </div>

                               </div>
                           </div>
                           <!-- col-list-search-input-item end -->
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8" >
                           <!-- col-list-search-input-item -->
                           <div class="search-input-item">
                               <div class="range-slider-title">Price range</div>
                               <div class="range-slider-wrap fl-wrap">
                                   <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
                               </div>
                           </div>
                           <!-- col-list-search-input-item end -->
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" ><br>
                               <Button type="submit" class="search_allhotel"> Search</Button>

                        </div>
                    </form>

                </div>
                 <div class="search-opt-wrap fl-wrap">
                    <div class="search-opt-wrap-container">
                      <!-- col-list-search-input-item end -->
                      <!-- hidden-listing-filter -->
                      <div class="hidden-listing-filter fl-wrap">
                          <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                                  <!--col-list-search-input-item -->
                                  <div class="col-list-search-input-item fl-wrap">
                                      <h4>Star Rating</h4>
                                      <div class="search-opt-container fl-wrap">
                                          <!-- Checkboxes -->
                                          <ul class="fl-wrap filter-tags">
                                              <li class="five-star-rating">
                                                  <input id="check-aa2" type="checkbox" name="check" checked>
                                                  <label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Stars</span></span></label>
                                              </li>
                                              <li class="four-star-rating">
                                                  <input id="check-aa3" type="checkbox" name="check">
                                                  <label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Star</span></span></label>
                                              </li>
                                              <li class="three-star-rating">
                                                  <input id="check-aa4" type="checkbox" name="check">
                                                  <label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Star</span></span></label>
                                              </li>
                                          </ul>
                                          <!-- Checkboxes end -->
                                      </div>
                                  </div>
                                  <!--col-list-search-input-item end-->
                                  <div class="col-md-8">
                                    <!--col-list-search-input-item -->
                                    <div class="col-list-search-input-item fl-wrap">
                                        <h4>Facilities</h4>
                                        <div class="search-opt-container fl-wrap">
                                            <!-- Checkboxes -->
                                            <ul class="fl-wrap filter-tags half-tags">
                                                <li>
                                                    <input id="check-aaa5" type="checkbox" name="check" checked>
                                                    <label for="check-aaa5">Free WiFi</label>
                                                </li>
                                                <li>
                                                    <input id="check-bb5" type="checkbox" name="check" checked>
                                                    <label for="check-bb5">Parking</label>
                                                </li>
                                                <li>
                                                    <input id="check-dd5" type="checkbox" name="check">
                                                    <label for="check-dd5">Fitness Center</label>
                                                </li>
                                            </ul>
                                            <!-- Checkboxes end -->
                                            <!-- Checkboxes -->
                                            <ul class="fl-wrap filter-tags half-tags">
                                                <li>
                                                    <input id="check-cc5" type="checkbox" name="check">
                                                    <label for="check-cc5">Non-smoking Rooms</label>
                                                </li>
                                                <li>
                                                    <input id="check-ff5" type="checkbox" name="check" checked>
                                                    <label for="check-ff5">Airport Shuttle</label>
                                                </li>
                                                <li>
                                                    <input id="check-c4" type="checkbox" name="check">
                                                    <label for="check-c4">Air Conditioning</label>
                                                </li>
                                            </ul>
                                            <!-- Checkboxes end -->
                                        </div>
                                    </div>
                                    <!--col-list-search-input-item end-->
                                </div>
                            </div>
                        </div>
                        <!-- hidden-listing-filter end -->
                    </div>
                     </div>

                </div>
                <!--list-wrap-search end -->
                      @yield('contentallhotel')

                    <!-- list-main-wrap end-->
                </div>
                <!--col-list-wrap end -->
                <div class="limit-box fl-wrap"></div>
            </div>
        </div>
    </div>



@endsection





@section('scripts')
<script type="text/javascript" src="{{asset('userdashboard/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('userdashboard/js/scripts.js')}}"></script>


@endsection
