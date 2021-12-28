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
            <!--list-wrap-search  -->
            <div class="list-wrap-search fl-wrap lws_mobile" id="lisfw">
             <div class="container">
                 <div class="row">
                     <!-- col-list-search-input-item -->
                     <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                         <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">
                             <label>City/Category</label>
                             <div class="listsearch-input-item">
                                 <select data-placeholder="City" class="chosen-select" >
                                     <option>All Cities</option>
                                     <option value="Afganistan">Afghanistan</option>
                                     <option value="Albania">Albania</option>
                                     <option value="Algeria">Algeria</option>
                                     <option value="American Samoa">American Samoa</option>
                                     <option value="Andorra">Andorra</option>
                                     <option value="Angola">Angola</option>
                                     <option value="Anguilla">Anguilla</option>
                                     <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                     <option value="Argentina">Argentina</option>
                                     <option value="Armenia">Armenia</option>
                                     <option value="Aruba">Aruba</option>
                                     <option value="Australia">Australia</option>
                                     <option value="Austria">Austria</option>
                                     <option value="Azerbaijan">Azerbaijan</option>
                                     <option value="Bahamas">Bahamas</option>
                                     <option value="Bahrain">Bahrain</option>
                                     <option value="Bangladesh">Bangladesh</option>
                                     <option value="Barbados">Barbados</option>
                                     <option value="Belarus">Belarus</option>
                                     <option value="Belgium">Belgium</option>
                                     <option value="Belize">Belize</option>
                                     <option value="Benin">Benin</option>
                                     <option value="Bermuda">Bermuda</option>
                                     <option value="Bhutan">Bhutan</option>
                                     <option value="Bolivia">Bolivia</option>
                                     <option value="Bonaire">Bonaire</option>
                                     <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                     <option value="Botswana">Botswana</option>
                                     <option value="Brazil">Brazil</option>
                                     <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                     <option value="Brunei">Brunei</option>
                                     <option value="Bulgaria">Bulgaria</option>
                                     <option value="Burkina Faso">Burkina Faso</option>
                                     <option value="Burundi">Burundi</option>
                                     <option value="Cambodia">Cambodia</option>
                                     <option value="Cameroon">Cameroon</option>
                                     <option value="Canada">Canada</option>
                                     <option value="Canary Islands">Canary Islands</option>
                                     <option value="Cape Verde">Cape Verde</option>
                                     <option value="Cayman Islands">Cayman Islands</option>
                                     <option value="Central African Republic">Central African Republic</option>
                                     <option value="Chad">Chad</option>
                                     <option value="Channel Islands">Channel Islands</option>
                                     <option value="Chile">Chile</option>
                                     <option value="China">China</option>
                                     <option value="Christmas Island">Christmas Island</option>
                                     <option value="Cocos Island">Cocos Island</option>
                                     <option value="Colombia">Colombia</option>
                                     <option value="Comoros">Comoros</option>
                                     <option value="Congo">Congo</option>
                                     <option value="Cook Islands">Cook Islands</option>
                                     <option value="Costa Rica">Costa Rica</option>
                                     <option value="Cote DIvoire">Cote DIvoire</option>
                                     <option value="Croatia">Croatia</option>
                                     <option value="Cuba">Cuba</option>
                                     <option value="Curaco">Curacao</option>
                                     <option value="Cyprus">Cyprus</option>
                                     <option value="Czech Republic">Czech Republic</option>
                                     <option value="Denmark">Denmark</option>
                                     <option value="Djibouti">Djibouti</option>
                                     <option value="Dominica">Dominica</option>
                                     <option value="Dominican Republic">Dominican Republic</option>
                                     <option value="East Timor">East Timor</option>
                                     <option value="Ecuador">Ecuador</option>
                                     <option value="Egypt">Egypt</option>
                                     <option value="El Salvador">El Salvador</option>
                                     <option value="Equatorial Guinea">Equatorial Guinea</option>
                                     <option value="Eritrea">Eritrea</option>
                                     <option value="Estonia">Estonia</option>
                                     <option value="Ethiopia">Ethiopia</option>
                                     <option value="Falkland Islands">Falkland Islands</option>
                                     <option value="Faroe Islands">Faroe Islands</option>
                                     <option value="Fiji">Fiji</option>
                                     <option value="Finland">Finland</option>
                                     <option value="France">France</option>
                                     <option value="French Guiana">French Guiana</option>
                                     <option value="French Polynesia">French Polynesia</option>
                                     <option value="French Southern Ter">French Southern Ter</option>
                                     <option value="Gabon">Gabon</option>
                                     <option value="Gambia">Gambia</option>
                                     <option value="Georgia">Georgia</option>
                                     <option value="Germany">Germany</option>
                                     <option value="Ghana">Ghana</option>
                                     <option value="Gibraltar">Gibraltar</option>
                                     <option value="Great Britain">Great Britain</option>
                                     <option value="Greece">Greece</option>
                                     <option value="Greenland">Greenland</option>
                                     <option value="Grenada">Grenada</option>
                                     <option value="Guadeloupe">Guadeloupe</option>
                                     <option value="Guam">Guam</option>
                                     <option value="Guatemala">Guatemala</option>
                                     <option value="Guinea">Guinea</option>
                                     <option value="Guyana">Guyana</option>
                                     <option value="Haiti">Haiti</option>
                                     <option value="Hawaii">Hawaii</option>
                                     <option value="Honduras">Honduras</option>
                                     <option value="Hong Kong">Hong Kong</option>
                                     <option value="Hungary">Hungary</option>
                                     <option value="Iceland">Iceland</option>
                                     <option value="Indonesia">Indonesia</option>
                                     <option value="India">India</option>
                                     <option value="Iran">Iran</option>
                                     <option value="Iraq">Iraq</option>
                                     <option value="Ireland">Ireland</option>
                                     <option value="Isle of Man">Isle of Man</option>
                                     <option value="Israel">Israel</option>
                                     <option value="Italy">Italy</option>
                                     <option value="Jamaica">Jamaica</option>
                                     <option value="Japan">Japan</option>
                                     <option value="Jordan">Jordan</option>
                                     <option value="Kazakhstan">Kazakhstan</option>
                                     <option value="Kenya">Kenya</option>
                                     <option value="Kiribati">Kiribati</option>
                                     <option value="Korea North">Korea North</option>
                                     <option value="Korea Sout">Korea South</option>
                                     <option value="Kuwait">Kuwait</option>
                                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                                     <option value="Laos">Laos</option>
                                     <option value="Latvia">Latvia</option>
                                     <option value="Lebanon">Lebanon</option>
                                     <option value="Lesotho">Lesotho</option>
                                     <option value="Liberia">Liberia</option>
                                     <option value="Libya">Libya</option>
                                     <option value="Liechtenstein">Liechtenstein</option>
                                     <option value="Lithuania">Lithuania</option>
                                     <option value="Luxembourg">Luxembourg</option>
                                     <option value="Macau">Macau</option>
                                     <option value="Macedonia">Macedonia</option>
                                     <option value="Madagascar">Madagascar</option>
                                     <option value="Malaysia">Malaysia</option>
                                     <option value="Malawi">Malawi</option>
                                     <option value="Maldives">Maldives</option>
                                     <option value="Mali">Mali</option>
                                     <option value="Malta">Malta</option>
                                     <option value="Marshall Islands">Marshall Islands</option>
                                     <option value="Martinique">Martinique</option>
                                     <option value="Mauritania">Mauritania</option>
                                     <option value="Mauritius">Mauritius</option>
                                     <option value="Mayotte">Mayotte</option>
                                     <option value="Mexico">Mexico</option>
                                     <option value="Midway Islands">Midway Islands</option>
                                     <option value="Moldova">Moldova</option>
                                     <option value="Monaco">Monaco</option>
                                     <option value="Mongolia">Mongolia</option>
                                     <option value="Montserrat">Montserrat</option>
                                     <option value="Morocco">Morocco</option>
                                     <option value="Mozambique">Mozambique</option>
                                     <option value="Myanmar">Myanmar</option>
                                     <option value="Nambia">Nambia</option>
                                     <option value="Nauru">Nauru</option>
                                     <option value="Nepal">Nepal</option>
                                     <option value="Netherland Antilles">Netherland Antilles</option>
                                     <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                     <option value="Nevis">Nevis</option>
                                     <option value="New Caledonia">New Caledonia</option>
                                     <option value="New Zealand">New Zealand</option>
                                     <option value="Nicaragua">Nicaragua</option>
                                     <option value="Niger">Niger</option>
                                     <option value="Nigeria">Nigeria</option>
                                     <option value="Niue">Niue</option>
                                     <option value="Norfolk Island">Norfolk Island</option>
                                     <option value="Norway">Norway</option>
                                     <option value="Oman">Oman</option>
                                     <option value="Pakistan">Pakistan</option>
                                     <option value="Palau Island">Palau Island</option>
                                     <option value="Palestine">Palestine</option>
                                     <option value="Panama">Panama</option>
                                     <option value="Papua New Guinea">Papua New Guinea</option>
                                     <option value="Paraguay">Paraguay</option>
                                     <option value="Peru">Peru</option>
                                     <option value="Phillipines">Philippines</option>
                                     <option value="Pitcairn Island">Pitcairn Island</option>
                                     <option value="Poland">Poland</option>
                                     <option value="Portugal">Portugal</option>
                                     <option value="Puerto Rico">Puerto Rico</option>
                                     <option value="Qatar">Qatar</option>
                                     <option value="Republic of Montenegro">Republic of Montenegro</option>
                                     <option value="Republic of Serbia">Republic of Serbia</option>
                                     <option value="Reunion">Reunion</option>
                                     <option value="Romania">Romania</option>
                                     <option value="Russia">Russia</option>
                                     <option value="Rwanda">Rwanda</option>
                                     <option value="St Barthelemy">St Barthelemy</option>
                                     <option value="St Eustatius">St Eustatius</option>
                                     <option value="St Helena">St Helena</option>
                                     <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                     <option value="St Lucia">St Lucia</option>
                                     <option value="St Maarten">St Maarten</option>
                                     <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                     <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                     <option value="Saipan">Saipan</option>
                                     <option value="Samoa">Samoa</option>
                                     <option value="Samoa American">Samoa American</option>
                                     <option value="San Marino">San Marino</option>
                                     <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                     <option value="Saudi Arabia">Saudi Arabia</option>
                                     <option value="Senegal">Senegal</option>
                                     <option value="Seychelles">Seychelles</option>
                                     <option value="Sierra Leone">Sierra Leone</option>
                                     <option value="Singapore">Singapore</option>
                                     <option value="Slovakia">Slovakia</option>
                                     <option value="Slovenia">Slovenia</option>
                                     <option value="Solomon Islands">Solomon Islands</option>
                                     <option value="Somalia">Somalia</option>
                                     <option value="South Africa">South Africa</option>
                                     <option value="Spain">Spain</option>
                                     <option value="Sri Lanka">Sri Lanka</option>
                                     <option value="Sudan">Sudan</option>
                                     <option value="Suriname">Suriname</option>
                                     <option value="Swaziland">Swaziland</option>
                                     <option value="Sweden">Sweden</option>
                                     <option value="Switzerland">Switzerland</option>
                                     <option value="Syria">Syria</option>
                                     <option value="Tahiti">Tahiti</option>
                                     <option value="Taiwan">Taiwan</option>
                                     <option value="Tajikistan">Tajikistan</option>
                                     <option value="Tanzania">Tanzania</option>
                                     <option value="Thailand">Thailand</option>
                                     <option value="Togo">Togo</option>
                                     <option value="Tokelau">Tokelau</option>
                                     <option value="Tonga">Tonga</option>
                                     <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                     <option value="Tunisia">Tunisia</option>
                                     <option value="Turkey">Turkey</option>
                                     <option value="Turkmenistan">Turkmenistan</option>
                                     <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                     <option value="Tuvalu">Tuvalu</option>
                                     <option value="Uganda">Uganda</option>
                                     <option value="United Kingdom">United Kingdom</option>
                                     <option value="Ukraine">Ukraine</option>
                                     <option value="United Arab Erimates">United Arab Emirates</option>
                                     <option value="United States of America">United States of America</option>
                                     <option value="Uraguay">Uruguay</option>
                                     <option value="Uzbekistan">Uzbekistan</option>
                                     <option value="Vanuatu">Vanuatu</option>
                                     <option value="Vatican City State">Vatican City State</option>
                                     <option value="Venezuela">Venezuela</option>
                                     <option value="Vietnam">Vietnam</option>
                                     <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                     <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                     <option value="Wake Island">Wake Island</option>
                                     <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                     <option value="Yemen">Yemen</option>
                                     <option value="Zaire">Zaire</option>
                                     <option value="Zambia">Zambia</option>
                                     <option value="Zimbabwe">Zimbabwe</option>
                                 </select>
                             </div>
                         </div>
                     </div>
                     <!-- col-list-search-input-item end -->
                     <!-- col-list-search-input-item -->
                     <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                         <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                             <label>Destination</label>
                             <span class="header-search-input-item-icon"><i class="fa fa-cart-plus icon_cart"></i></span>
                             <input type="text" placeholder="Destination or Hotel Name" class="autocomplete-input form-control"                                         id="autocompleteid3" value="" />
                         </div>
                     </div>
                     <!-- col-list-search-input-item end -->
                     <!-- col-list-search-input-item -->
                     <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >
                         <div class="col-list-search-input-item in-loc-dec date-container  fl-wrap">
                             <label>Date In-Out </label>
                             <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                             <input type="text"   placeholder="When" name="dates"   value="" class="form-control"/>
                         </div>
                     </div>
                     <!-- col-list-search-input-item end -->
                 </div>
                 <div class="search-opt-wrap fl-wrap">
                    <div class="search-opt-wrap-container">
                        <!-- col-list-search-input-item -->
                        <div class="search-input-item midd-input">
                            <div class="col-list-search-input-item fl-wrap">
                                <div class="quantity-item">
                                    <label>Rooms</label>
                                    <div class="quantity">
                                        <input type="number" min="1" max="3" step="1" value="1" class="form-control">
                                    </div>
                                </div>
                                <div class="quantity-item">
                                    <label>Adults</label>
                                    <div class="quantity">
                                        <input type="number" min="1" max="5" step="1" value="1" class="form-control">
                                    </div>
                                </div>
                                <div class="quantity-item">
                                    <label>Children</label>
                                    <div class="quantity">
                                        <input type="number" min="0" max="3" step="1" value="0" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col-list-search-input-item end -->
                        <!-- col-list-search-input-item -->
                              <div class="search-input-item">
                                  <div class="range-slider-title">Price range</div>
                                  <div class="range-slider-wrap fl-wrap">
                                      <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">
                                  </div>
                              </div>
                              <!-- col-list-search-input-item end -->
                              <!-- col-list-search-input-item -->
                              <div class="search-input-item small-input ">
                                 <div class="col-list-search-input-item fl-wrap">
                                      <button class="btn_all_hotel" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                  </div>
                              </div>
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
                </div>
                <!--list-wrap-search end -->
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
                            <div class="listing-item-container init-grid-items fl-wrap">
                                <!-- listing-item  -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="#"><img src="{{asset('userdashboard/images/gal/8.jpg')}}" alt=""></a>
                                            <div class="listing-avatar"><a href="#"><img src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt=""></a>
                                                <span class="avatar-tooltip">Manager : <strong>Alisa Noory</strong></span>
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
                                                    <a href="#0" class="map-item"><i class="fa fa-map-marker-alt"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fa fa-heart"></i>

                                                    </a>
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
                                                <span class="avatar-tooltip">Manager : <strong>Julie Cramp</strong></span>
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
                                                    <a href="#1" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

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
                                                <span class="avatar-tooltip">Manager : <strong>Andy Moore</strong></span>
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
                                                    <a href="#2" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

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
                                                <span class="avatar-tooltip">Manager : <strong>Mary Jones</strong></span>
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
                                                    <a href="#3" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

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
                                                <span class="avatar-tooltip">Manager : <strong>Fider Mamby</strong></span>
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
                                                    <a href="#4" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

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
                                                <span class="avatar-tooltip"> Manager : <strong>Alisa Noory</strong></span>
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
                                                    <div class="geodir-category-price">Awg/Night <span>$ 105</span></div>
                                                </div>
                                                <div class="geodir-opt-list">
                                                    <a href="#5" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end -->
                            </div>
                            <!-- listing-item-container end-->
                            <!-- pagination-->
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left icon_pagination"></i></a>
                                <a href="#" class="current-page-2">1</a>
                                <a href="#" class="current-page-2">2</a>
                                <a href="#" class="current-page">3</a>
                                <a href="#" class="current-page-2">4</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right icon_pagination"></i></a>
                            </div>
                            <!-- pagination end-->
                        </div>
                    </div>
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
