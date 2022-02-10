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

            <div class="portlet-body">
                <div class="header-flight-page">
                    <div class="title-header">
                        <h1>Fly to <span id="title-header-text">London</span><sub>From:$399</sub></h1>
                        <a href="#booked-flight">Book Now </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Portlet PORTLET-->



        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet light">

            <div class="portlet-body Top-destenations">
                <section class="Top-destenations-sec">
                    <div class="title-detinations ">
                        <h1 class="h1-general">Top Destinations</h1>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, quibusdam cumque
                        </p>


                    </div>
                    <div class="about-detinations">
                        <div class="row">
                            <!-- Start of Column -->
                            <div class="col-md-6 text-center">
                                <div class="top-country">
                                    <img src=" {{ asset('userdashboard/images/images-airline-page/Destinations/NewYork.jpg') }} " alt=""
                                        class="img-responsive width-100">
                                    <div class="details-about-top-country">
                                        <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/castle.png') }}" alt="#">
                                        <h3 class="title-top-county-h3">New York</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Column -->


                            <!-- Start of Column -->
                            <div class="col-md-6 text-center">
                                <div class="top-country">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/Germany.jpg') }}" alt=""
                                        class="img-responsive width-100">
                                    <div class="details-about-top-country">
                                        <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/castle.png') }}" alt="#">
                                        <h3 class="title-top-county-h3">Germany</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Column -->
                            <!-- Start of Column -->
                            <div class="col-md-6 text-center">
                                <div class="top-country">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/Roman.jpg') }}" alt=""
                                        class="img-responsive width-100">
                                    <div class="details-about-top-country">
                                        <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/castle.png') }}" alt="#">
                                        <h3 class="title-top-county-h3">Roman</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Column -->
                            <!-- Start of Column -->
                            <div class="col-md-6 text-center">
                                <div class="top-country">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/Paris.jpg') }}" alt=""
                                        class="img-responsive width-100">
                                    <div class="details-about-top-country">
                                        <img src="{{ asset('userdashboard/images/images-airline-page/Destinations/castle.png') }}" alt="#">
                                        <h3 class="title-top-county-h3">Paris</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Column -->


                        </div>



                    </div>
            </div>


            </section>
        </div>
           <!-- BEGIN Portlet PORTLET-->
           <div class="portlet light">

            <div class="portlet-body">
                <section class="Flight-form-sec" id="booked-flight">
                    <div class="form-booked-flight">
                        <h1 class="title-form-booked">Booking Details</h1>
                        <form action="#" >
                            <div class="from-To">
                                <select id="country" name="country">
                                    <option value="Country">Country</option>
                                    <div class="select-country">

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
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter
                                        </option>
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
                                        <option value="Central African Republic">Central African Republic
                                        </option>
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
                                        <option value="United States of America">United States of America
                                        </option>
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
                                    </div>

                                </select>
                                <select id="country" name="country">
                                    <option value="Country">Country</option>
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
                            <div class="time-date-flight">
                                <input type="text" placeholder="Departure Date" onfocus="(this.type='date')">
                                <input type="text" placeholder="Departure Time" onfocus="(this.type='time')">
                            </div>
                            <div class="number-of-person-flight">
                                <select id="Person-Adult" name="Person-adult">
                                    <option value="Adult(+12 Yrs)">Adult(+12 Yrs)</option>
                                    <option value="one">1</option>
                                    <option value="tow">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                    <option value="sex">6</option>
                                    <option value="seven">7</option>
                                    <option value="eight">8</option>
                                    <option value="nine">9</option>
                                    <option value="ten">10</option>
                                </select>
                                <select id="Person-children" name="Person-children">
                                    <option value="Children(2-12 Yrs)">Children(2-12 Yrs)</option>
                                    <option value="one">1</option>
                                    <option value="tow">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                    <option value="sex">6</option>
                                    <option value="seven">7</option>
                                    <option value="eight">8</option>
                                    <option value="nine">9</option>
                                    <option value="ten">10</option>
                                </select>
                                <select id="Person-Infant" name="Person-Infant">
                                    <option value="Infant(under 2Yrs)">Infant(under 2Yrs)</option>
                                    <option value="one">1</option>
                                    <option value="tow">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                    <option value="sex">6</option>
                                    <option value="seven">7</option>
                                    <option value="eight">8</option>
                                    <option value="nine">9</option>
                                    <option value="ten">10</option>


                                </select>
                            </div>
                            <div class="select-your-fare">
                                <p>Select your Fare</p>
                                <label for="one-way"><input type="radio" name="select-way-of-fare" id="one-way"
                                        checked>One Way</label>
                                <label for="round-way"><input type="radio" name="select-way-of-fare"
                                        id="round-way">Round Way</label>
                            </div>
                            <div class="round-way-details">
                                <input type="text" placeholder="Return Date" onfocus="(this.type='date')">
                                <input type="text" placeholder="Return Time" onfocus="(this.type='time')">


                                <!-- <input type="date" name="Retruned-Date" id="Retruned-date" placeholder="Returned Date"> -->
                                <!-- <input type="time" name="Retruned-Time" id="Retruned-time" placeholder="Returned Time"> -->
                                <textarea name="message-round-Way" id="message-round-way" cols="30" rows="10"
                                    placeholder="Any Messages..."></textarea>
                            </div>
                            <h1 class="title-form-booked-inside">Presonal Details</h1>
                            <div class="presonal-details">

                                <input type="text" id="fullnameperson" placeholder="Full Name" autofocus>
                                <input type="number" id="number" placeholder="Phone Number" min="0" max="9">

                            </div>
                            <div class="footer-form">
                                <input type="submit" value="Booked">
                                <input type="reset" value="Clear Form">
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- END Portlet PORTLET-->


             <!-- BEGIN Portlet PORTLET-->
    <div class="portlet light">

        <div class="portlet-body">

            <div class="why-choose-us">

                <div class="details-video">
                    <iframe width="100%" height="380" src="https://www.youtube.com/embed/vjFYjm41Sxg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                </div>


                <div class="details-why-choose-us">
                    <h1>Why pepole like us?</h1>
                    <h3>Why pepole like us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sequi adipisci velit odit
                        rerum illum quas, quia soluta suscipit dolores, quo vero ex alias hic. Quos iure totam
                        beatae libero culpa necessitatibus corrupti ipsam velit error earum, labore vitae
                        corporis?</p>
                    <a href="#booked-flight">Book Now</a>
                </div>

            </div>


        </div>
    </div>
    <!-- END Portlet PORTLET-->


     <!-- BEGIN Portlet PORTLET-->
     <div class="portlet light">

        <div class="portlet-body">
            <div class="fari-price-sec text-center">
                <div class="title-detinations ">
                    <h1 class="h1-general">FAIR PRICE PACKAGES
                    </h1>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, quibusdam cumque
                    </p>


                </div>

                <div class="fair-items">
                    <div class="item">
                        <div class="overlay">
                            <div class="about-item">
                                <span class="precent-fair">70%</span>
                                <h2>family fun in malasia</h2>
                              </div>
                            <img src="{{ asset('userdashboard/images/images-airline-page/Fair travel/img-02.jpg') }}" alt="" class="img-responsive">
                        </div>

                    </div>
                    <div class="item">
                          <div class="about-item">
                            <span class="precent-fair">37%</span>
                            <h2>Night of london</h2>
                          </div>
                        <img src="{{ asset('userdashboard/images/images-airline-page/Fair travel/img-03.jpg') }}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                          <div class="about-item">
                            <span class="precent-fair">37%</span>
                            <h2>Night of london</h2>
                          </div>
                        <img src="{{ asset('userdashboard/images/images-airline-page/Fair travel/img-04.jpg') }}" alt="" class="img-responsive">
                    </div>
                    <div class="item">
                          <div class="about-item">
                            <span class="precent-fair">37%</span>
                            <h2>Night of london</h2>
                          </div>
                        <img src="{{ asset('userdashboard/images/images-airline-page/Fair travel/img-01.jpg') }}" alt="" class="img-responsive">
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- END Portlet PORTLET-->


<div class="portlet light">

            <div class="portlet-body backgroundeee" >
                <div class="custome-says-sec ">
                    <div class="title-detinations text-center ">
                        <h1 class="h1-general">CUSTOMER FEEDBACK
                        </h1>

                        <p>OUR TESTIMONIALS
                        </p>


            </div>


            <!-- Start of Customer-sec -->
            <div class="customer-sec">
                <div class="row">
                    <!-- Start of Column -->
                    <div class="col-lg-6 ">
                        <div class="boxs-review">
                            <div class="box-top">
                                <div class="box1-right">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Review_Slider_Img/pic4.jpg') }}" >
                                      <div>
                                          <strong>mohammed2001</strong>
                                          <p>@mderdesawi2001</p>
                                      </div>

                                </div>
                                <div class="box1-left">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                            </div>

                            <div class="box-bottom">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga inventore beatae earum quasi quas iste sapiente error molestiae. Fugit qui illum officiis nemo porro fugiat facere similique, id, totam, ab nobis officia voluptas deserunt commodi aliquam consequatur ex iusto corrupti?</p>
                            </div>
                        </div>

                    </div>
                     <!-- End of Column -->
                    <!-- Start of Column -->
                    <div class="col-lg-6">
                        <div class="boxs-review">
                            <div class="box-top">
                                <div class="box1-right">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Review_Slider_Img/pic3.jpg') }}" >
                                      <div>
                                          <strong>mohammed2001</strong>
                                          <p>@mderdesawi2001</p>
                                      </div>

                                </div>
                                <div class="box1-left">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>

                            </div>

                            <div class="box-bottom">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga inventore beatae earum quasi quas iste sapiente error molestiae. Fugit qui illum officiis nemo porro fugiat facere similique, id, totam, ab nobis officia voluptas deserunt commodi aliquam consequatur ex iusto corrupti?</p>
                            </div>
                        </div>

                    </div>
                     <!-- End of Column -->
                    <!-- Start of Column -->
                    <div class="col-lg-6">
                        <div class="boxs-review">
                            <div class="box-top">
                                <div class="box1-right">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Review_Slider_Img/pic2.jpg') }}" >
                                      <div>
                                          <strong>mohammed2001</strong>
                                          <p>@mderdesawi2001</p>
                                      </div>

                                </div>
                                <div class="box1-left">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>

                            </div>

                            <div class="box-bottom">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga inventore beatae earum quasi quas iste sapiente error molestiae. Fugit qui illum officiis nemo porro fugiat facere similique, id, totam, ab nobis officia voluptas deserunt commodi aliquam consequatur ex iusto corrupti?</p>
                            </div>
                        </div>

                    </div>
                     <!-- End of Column -->
                    <!-- Start of Column -->
                    <div class="col-lg-6 ">
                        <div class="boxs-review">
                            <div class="box-top">
                                <div class="box1-right">
                                    <img src="{{ asset('userdashboard/images/images-airline-page/Review_Slider_Img/pic1.jpg') }}" >
                                      <div>
                                          <strong>mohammed2001</strong>
                                          <p>@mderdesawi2001</p>
                                      </div>

                                </div>
                                <div class="box1-left">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                            </div>

                            <div class="box-bottom">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga inventore beatae earum quasi quas iste sapiente error molestiae. Fugit qui illum officiis nemo porro fugiat facere similique, id, totam, ab nobis officia voluptas deserunt commodi aliquam consequatur ex iusto corrupti?</p>
                            </div>
                        </div>

                    </div>
                     <!-- End of Column -->
                </div>







            </div>




            <!-- End of Cutomer-sec -->




                    </div>
                </div>

            </div>
        </div>



    <!-- End Page-content -->
    </div>


    <!-- End My Content -->

@endsection


