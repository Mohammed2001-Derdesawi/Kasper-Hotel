@extends('layouts.maincustomersitelayoutes')


@section('content')

<!-- Start of Slider-Under-header -->
<div class="main-slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active item-height">
        <img src="{{asset("maincustomersiteresources/images/mainSlider.jpg")}}" alt="mainSlider not Found">

      </div>
      <div class="item">
        <img src="{{asset("maincustomersiteresources/images/mainSlider2.jpg")}}" alt="mainSlider not Found">

      </div>
      <div class="item">
        <img src="{{asset("maincustomersiteresources/images/mainSlider3.jpg")}}" alt="mainSlider not Found">

      </div>
      <div class="item">
        <img src="{{asset("maincustomersiteresources/images/mainSlider4.jpg")}}" alt="mainSlider not Found">

      </div>
      <div class="item">
        <img src="{{asset("maincustomersiteresources/images/mainSlider5.jpg")}}" alt="mainSlider not Found">

      </div>


    </div>


  </div>
</div>
<!-- End of Slider-Under-header -->



<!-- Start of Serv-sec -->
<section class="secvices-sec" id="serv-sec">
      <div class="title-serv-sec text-center">
              <h1 class="after-title">Services</h1>
              <p>Why choose us?</p>
      </div>

      <div class="container">
              <div class="row">
                  @foreach ($post as $posts)
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                      <div class="box-Services">
                              <img src="{{asset($posts->image)}}"  alt="" class="img-responsive">
                              <div class="about-box-services">
                          <h4 class="title_post"> {{ $posts->title }}</h4>
                          <p >{{ $posts->text}}</p>
                          <a href="{{ url('/readmore/'.$posts->id) }}" class="btn btn-danger btn-website-services">Read More</a>
                              </div>
                      </div>
                  </div>
                  @endforeach
              </div>
      </div>
</section>
<!-- End of Serv-sec -->


<!-- Start of about-sec  -->


<div class="about-sec "  id="about-section">
  <div class="title-about-sec">
    <h1 class="after-title">About Us</h1>
    <p>Informations about our company</p>
  </div>





  <!-- Start of Grid System -->



           <div class="about-sev-company ">
              <div class="container">
                  <div class="row">
                     <div class="item_aboute">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="img-about">
                                <img src="{{asset("maincustomersiteresources/images/about-company/airports.jpg")}}" alt="#" class="img-responsive">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <div class="p-about">
                                <h1>Our Airline's</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque .</p>
                              </div>
                            </div>
                         </div>
                     </div>
                     <div class="item_aboute">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row-home-dashboard">

                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="p-about">
                             <h1>Our Hotel's</h1>
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque .</p>
                           </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="img-about">
                            <img src="{{asset("maincustomersiteresources/images/about-company/Hotel-about.jpg")}}" alt="#" class="img-responsive">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="item_aboute">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="img-about">
                             <img src="{{asset("maincustomersiteresources/images/about-company/taxi-stations.jpg")}}" alt="#" class="img-responsive">
                           </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="p-about">
                             <h1>Our Taxi's</h1>
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque .</p>
                           </div>
                         </div>
                      </div>
                  </div>
                   </div>
              </div>



          </div>



  <!-- End of Grid System -->


</div>




<!-- End of about-sec  -->




<!-- Start of mangers-sec -->
<div class="manegers-sec" id="managers-section">
  <div class="title-managers-sec">
    <h1 class="after-title"> Our Managers </h1>
    <p>Good Managers for Successful Companies </p>
  </div>
  <div class="container">
      <div class="col-lg-12">
         <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      @foreach ($manager as $managers)
              <div class="swiper-slide">
                  <div class="manager-slide">

                  <img src="{{asset($managers->image)}}" alt="Not Found">
                  </div>
                  <div class="manager-details">
                  <h3>{{ $managers->name }}</h3>
                  <p>{{  $managers->description }}</p>
                  <div class="icons-managers">
                      <ul>
                      <li>
                          <a href="{{ $managers->facebook }}"> <i class="fab fa-facebook-f"></i> </a>
                      </li>
                      <li>
                      <a href="{{ $managers->github }}"><i class="fab fa-github"></i></a>
                      </li>
                      <li>
                          <a href="{{ $managers->twitter }}"> <i class="fab fa-twitter"></i></a>
                      </li>
                      </ul>


                  </div>
                  </div>

          </div>
     @endforeach

    </div>
    <!-- <div class="swiper-pagination"></div> -->
  </div>

  <!-- Swiper JS -->


  <!-- Initialize Swiper -->
      </div>
  </div>
</div>
<!-- End of mangers-sec -->

<!-- Start of locations-sec -->
<div class="locations-sec" id="locations-section">
  <div class="title-locations">
    <h1 class="after-title">Location</h1>
    <p>Our Locations around the world</p>
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- Start of Column -->
      <div class="col-lg-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8326717.314442226!2d-96.66245954694429!3d41.19506939721036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2z2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2s!4v1630566776320!5m2!1sar!2s" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- End of Column -->
    </div>
  </div>
</div>


<!-- End of locations-sec -->






<!-- start modal sign up -->
<!-- Modal -->



<!-- Modal -->




<!-- Modal -->
<div class="modal-sign-up">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="logo-img">

          <img src="{{asset("maincustomersiteresources/images/logo/logo-modal.png")}}" alt="Not Found">

        </div>
      </div>

      <div class="modal-body">


           <!-- Start of Form Sign-in -->
           <div class="sign-in-form">
             <h1>Sign Up</h1>
             <form method="POST" id="registerForm">
                @csrf
               <label for="Email">Email</label>
               <input id="emailregister" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
               <span class="invalid-feedback " role="alert" id="emailRegisterError" style="color: red; font-size:17px; font-weight:500; padding-top:5px; display:block;">
                  <strong></strong>
              </span>
               @error('email')
               <span class="invalid-feedback form-contro" role="alert" style="color: red">
                   <strong>{{ $message }}</strong>
               </span>
              @enderror

               <label for="password">Password</label>
               <input id="passwordregister" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
               <span class="invalid-feedback" role="alert" id="passwordRegisterError" style="color: red; font-size:17px; font-weight:500; padding-top:5px; display:block;">
                  <strong></strong>
              </span>
               @error('password')
                   <span class="invalid-feedback pd-4" role="alert" style="color: red">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               <label for="confirm-password">confirm Passwword</label>
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               <input type="submit" value="Sign Up" class="btn btn-block">
             </form>
             <div class="social-media-sign-in">
               <p>OR</p>
               <hr>
               <ul>
                <li>
                  <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                </li>
                <li>
                 <a href="#"><i class="fab fa-github"></i></a>
                </li>
                <li>
                  <a href="#"> <i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
               </ul>
             </div>
           </div>


           <!-- End of Form Sign-in -->
      </div>

    </div>
  </div>
</div>
</div>

<!-- end modal sign up -->

<!-- START of modal sign in -->
{{-- <div class="modal-sign-up">
<div class="modal fade" id="myModal-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="logo-img">
          <img src="{{asset("maincustomersiteresources/images/logo/logo-modal.png")}}" alt="Not Found">

        </div>
      </div>



          <div class="sign-in-form">
                  <h1>Sign In</h1>
                  <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <label for="Email">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      <label for="password">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                      <input type="submit" value="Sign In" class="btn btn-block">
                      @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
                  </form>
                  <div class="social-media-sign-in">
                      <p>OR</p>
                      <hr>
                      <ul>
                      <li>
                          <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                      </li>
                      <li>
                      <a href="#"><i class="fab fa-github"></i></a>
                      </li>
                      <li>
                          <a href="#"> <i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                          <a href="#"><i class="fab fa-google-plus-g"></i></a>
                      </li>
                      </ul>
                  </div>
          </div>
   </div>

  </div>
  </div>
</div>
--}}

<!-- end modal sign in -->
<div class="modal-sign-up">
  <div class="modal fade" id="myModalup" tabindex="-1" role="dialog" aria-labelledby="myModalup" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="logo-img">

            <img src="{{asset("maincustomersiteresources/images/logo/logo-modal.png")}}" alt="Not Found">

          </div>
        </div>

        <div class="modal-body">


             <!-- Start of Form Sign-in -->
             <div class="sign-in-form">
              <h1>Sign In</h1>
             {{-- <form method="POST" action="{{ route('login') }}"> --}}
                 <form  method="POST" id="LoginFrom">
                  <span class="invalid-feedback" role="alert" id="emailError" style="color: red; font-size:17px; font-weight:500; padding-top:5px; display:block;">
                      <strong></strong>
                  </span>


              @csrf
               <label for="Email">Email</label>
               <input id="emailInput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


               <label for="password">Password</label>
               <input id="passwordInput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

               @error('password')
                   <span class="invalid-feedback" role="alert" style="color: red">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror

               <input type="submit" value="Sign In" class="btn btn-block">

               @if (Route::has('password.request'))
               <a class="btn btn-link" href="{{ route('password.request') }}">
                   {{ __('Forgot Your Password?') }}
               </a>
           @endif
             </form>
             <div class="social-media-sign-in">
               <p>OR</p>
               <hr>
               <ul>
                <li>
                  <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                </li>
                <li>
                 <a href="#"><i class="fab fa-github"></i></a>
                </li>
                <li>
                  <a href="#"> <i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
               </ul>
             </div>
             </div>


             <!-- End of Form Sign-in -->
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
