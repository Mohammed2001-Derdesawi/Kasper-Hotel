<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
/>
  <title>Document</title>
  <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("maincustomersiteresources/webfonts/CormorantGaramond-Regular.ttf")}}">
  <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/swiper-bundle.min.css")}}">
  <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/all.min.css")}}">
  <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/style.css")}}">

  <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- start icon top -->
  <div class="btn_direction"><i class="fa fa-arrow-up direction"></i></div>
  <!-- End icon top -->

  <!-- Start of Nav Bar Section  -->
  <section class="nav-sec">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('index')}}"><b>K</b>asper
          </a>
        </div>
        <!-- right -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li class="active add-active"><a href="#">Home</a></li>
            <li class="add-active"><a href="#serv-sec">Services</a></li>
            <li class="add-active"><a href="#about-section">About Us</a></li>
            <li class="add-active"><a href="#managers-section">Managers</a></li>
            <li class="add-active"><a href="#locations-section">Locations</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="sign-up" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
            <li><button  class="sign-in btn btn-danger"  data-toggle="modal" data-target="#myModal-up">Sign In</button></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </section>

  <!-- End of Nav Bar Section  -->



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
        <div class="col-lg-4 col-md-6">
          <div class="box-Services">
            <img src="{{asset("maincustomersiteresources/images/servicespic/serv-flight.jpg")}}"  alt="" class="img-responsive">
            <div class="about-box-services">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, accusamus voluptate! Saepe minima animi
                fugit possimus. Officia numquam accusamus corrupti amet, natus rerum in velit reprehenderit dolorem
                asperiores quae atque.</p>
              <a href="{{route('readmore.flight')}}" class="btn btn-danger btn-website-services">Read More</a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="box-Services">

            <img src="{{asset("maincustomersiteresources/images/servicespic/serv-hotel.jpg")}}" alt="" class="img-responsive">
            <div class="about-box-services">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, accusamus voluptate! Saepe minima animi
                fugit possimus. Officia numquam accusamus corrupti amet, natus rerum in velit reprehenderit dolorem
                asperiores quae atque.</p>
              <a href="{{route('readmore.hotel')}}" class="btn btn-danger btn-website-services">Read More</a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="box-Services">

            <img src="{{asset("maincustomersiteresources/images/servicespic/serv-taxi.jpg")}}" alt="" class="img-responsive">
            <div class="about-box-services">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, accusamus voluptate! Saepe minima animi
                fugit possimus. Officia numquam accusamus corrupti amet, natus rerum in velit reprehenderit dolorem
                asperiores quae atque.</p>
              <a href="{{route('readmore.taxi')}}" class="btn btn-danger btn-website-services">Read More</a>
            </div>

          </div>
        </div>
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
    <div class="container">
      <div class="row">

        <div class="about-sev-company ">
                         <!-- Start of 2-Column -->
               <div class="col-lg-6 col-md-6">
                 <div class="img-about">

                   <img src="{{asset("maincustomersiteresources/images/about-company/airports.jpg")}}" alt="#" class="img-responsive">

                 </div>
               </div>

               <div class="col-lg-6 col-md-6">
                <div class="p-about">
                  <h1>Our Airports</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque tempora dolor eaque cum? Saepe dolor est quidem, consequuntur et sit voluptates voluptate. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptates obcaecati impedit reprehenderit sapiente distinctio ex adipisci omnis. Repellat quidem dolore perspiciatis voluptatibus facilis fugiat, itaque aliquid quaerat error ipsam, beatae autem tempora explicabo a quam nostrum iste voluptas eius corrupti? Omnis corrupti cumque vero mollitia eveniet quas reiciendis quidem.</p>
                </div>
              </div>

              <!-- End of 2-Column -->
            </div>


                        <!-- Start of 2-Column -->
                         <div class="col-lg-12 col-md-12" ></div>


                        <div class="about-sev-company flexreverse-about">
                            <div class="col-lg-6 col-md-6">
                              <div class="p-about">
                                <h1>Our Hotel's</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque tempora dolor eaque cum? Saepe dolor est quidem, consequuntur et sit voluptates voluptate. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptates obcaecati impedit reprehenderit sapiente distinctio ex adipisci omnis. Repellat quidem dolore perspiciatis voluptatibus facilis fugiat, itaque aliquid quaerat error ipsam, beatae autem tempora explicabo a quam nostrum iste voluptas eius corrupti? Omnis corrupti cumque vero mollitia eveniet quas reiciendis quidem.</p>
                              </div>
                            </div>



                      <div class="col-lg-6 col-md-6">
                        <div class="img-about">

                          <img src="{{asset("maincustomersiteresources/images/about-company/Hotel-about.jpg")}}" alt="#" class="img-responsive">

                        </div>
                     </div>
                    </div>


                       <!-- End of 2-Column -->




                       <!-- Start of 2-Column -->
                       <div class="about-sev-company margin-top-about ">
                        <!-- Start of 2-Column -->
              <div class="col-lg-6 col-md-6">
                <div class="img-about">

                  <img src="{{asset("maincustomersiteresources/images/about-company/taxi-stations.jpg")}}" alt="#" class="img-responsive">

                </div>
              </div>

              <div class="col-lg-6 col-md-6">
               <div class="p-about">
                 <h1>Our Taxis</h1>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure officiis, voluptas distinctio inventore facere minus amet quod magnam. Debitis maiores cumque sed ea maxime nobis voluptatibus reprehenderit qui eveniet quam, fugiat porro fugit ducimus optio perferendis itaque tempora dolor eaque cum? Saepe dolor est quidem, consequuntur et sit voluptates voluptate. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptates obcaecati impedit reprehenderit sapiente distinctio ex adipisci omnis. Repellat quidem dolore perspiciatis voluptatibus facilis fugiat, itaque aliquid quaerat error ipsam, beatae autem tempora explicabo a quam nostrum iste voluptas eius corrupti? Omnis corrupti cumque vero mollitia eveniet quas reiciendis quidem.</p>
               </div>
             </div>

             <!-- End of 2-Column -->
           </div>




                       <!-- End of 2-Column -->










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
        <div class="swiper-slide">
              <div class="manager-slide">

                <img src="{{asset("maincustomersiteresources/images/managers/manager1.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>

        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager2.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>

        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager3.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>

        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager4.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>


        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager5.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>


        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager6.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>


        <div class="swiper-slide">
              <div class="manager-slide">
                <img src="{{asset("maincustomersiteresources/images/managers/manager7.jpg")}}" alt="Not Found">
              </div>
              <div class="manager-details">
                <h3>Daniel Owidah</h3>
                <p>Manger of Taxis</p>
                <div class="icons-managers">
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
                  </ul>


                </div>
              </div>

        </div>


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


  <!-- Start of footer -->

  <!-- Start Footer Section -->
<section class="footer-sec">
  <div class="container">
    <!-- Start First Row -->
    <div class="all-box">
      <div class="f-box">
        <div class="box"><a href="#">Home</a></div>
        <div class="box"><a href="#">Services</a></div>
        <div class="box"><a href="#">About Us</a></div>
        <div class="box"><a href="#">Managers</a></div>
        <div class="box"><a href="#">Locations</a></div>
      </div>
      <!-- <div class="s-box">
      </div> -->
    </div>
    <!-- End First Row -->
  </div>
  <div class="divider"></div>
  <div class="container-fluid">
    <div class="social">
      <!-- Start Grid System -->
      <div class="row">

        <div class="col-md-4 border-r">
          <div class="box-1">
            <div class="box-1-1">
          <a href="#">

              <img src=" {{asset('maincustomersiteresources/images/logo/logo.png')}}" alt="" style="border-radius: 50%;">
          </a>
         </div>
            <div class="box-1-2">
              <h2>Kasper for make travels easy
              </h2>
              <p>
                At Kaspere company, we strive for greatness.
              </p>
              <h3>
                © 2021 Kasper Company. all rights are save.
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 border-r">
          <div class="box-2">
            <div class="box-2-1">
              <div class="d1">
                <div class="d1-1">
                  <a href="#"><i class="fab fa-google-play" ></i></a>
                </div>
                <div class="d1-2">
                  <h3>Available on the</h3>
                  <h2>App Store</h2>
                </div>
              </div>
              <div class="d2">
                <div class="d2-1">
                 <a href="#"><i class="fab fa-app-store-ios" ></i></a>
                </div>
                <div class="d2-2">
                  <h3>Available on the</h3>
                  <h2>App Store</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 border-b">
          <div class="box-3">
            <ul class="list-unstyled list-inline">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            </ul>
          </div>
          <div class="box-3 no-b">
            <ul class="list-unstyled list-inline">
              <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
              <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
              <li><a href="#"><i class="fab fa-cc-paypal"></i></a></li>
              <li><a href="#"><i class="fab fa-cc-discover"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Grid System -->
    </div>
  </div>
</section>
<!-- End Footer Section -->

  <!-- End of footer -->




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
               <form method="POST" action="{{route("register")}}">
                @csrf
                 <label for="Email">Email</label>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                 @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror

                 <label for="password">Password</label>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
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
</div> --}}

  <!-- end modal sign in -->
  <div class="modal-sign-up">
    <div class="modal fade" id="myModal-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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


               <!-- End of Form Sign-in -->
          </div>

        </div>
      </div>
    </div>
  </div>











  <script src="{{asset("maincustomersiteresources/Js/jquery.js")}}"></script>
  <script src="{{asset("maincustomersiteresources/Js/bootstrap.min.js")}}"></script>
  <script src="{{asset("maincustomersiteresources/Js/swiper-bundle.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async
></script>
  <script src="{{asset("maincustomersiteresources/Js/myjs.js")}}"></script>
</body>

</html>
