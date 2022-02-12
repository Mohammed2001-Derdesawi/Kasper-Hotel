<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

{{--  Ajax  --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>
<body>
<!-- start icon top -->
<div class="btn_direction"><i class="fa fa-arrow-up direction"></i></div>
<!-- end icon top -->

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
        <a class="navbar-brand" href="{{ route('index') }}"><b>K</b>asper
        </a>
      </div>
      <!-- right -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <li class="active add-active"><a href="{{ route('index') }}">Home</a></li>
          <li class="add-active"><a href="{{ route('index') }}">Services</a></li>
          <li class="add-active"><a href="{{ route('index') }}">About Us</a></li>
          <li class="add-active"><a href="{{ route('index') }}">Managers</a></li>
          <li class="add-active"><a href="{{ route('index') }}">Locations</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="sign-up" data-toggle="modal" data-target="#myModal-up">Sign Up</a></li>
          <li><button  class="sign-in btn btn-danger"  data-toggle="modal" data-target="#myModal-in">Sign In</button></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</section>

<!-- End of Nav Bar Section  -->


@yield('content')




    <!-- Start Footer Section -->
<section class="footer-sec">
            <div class="container">
                <!-- Start First Row -->
                <div class="all-box">
                <div class="f-box">
                    <div class="box"><a href="{{ route('index') }}">Home</a></div>
                    <div class="box"><a href="{{ route('index') }}">Services</a></div>
                    <div class="box"><a href="{{ route('index') }}">About Us</a></div>
                    <div class="box"><a href="{{ route('index') }}">Managers</a></div>
                    <div class="box"><a href="{{ route('index') }}">Locations</a></div>
                </div>
                <div class="s-box">
                </div>
                </div>
                <!-- End First Row -->
            </div>

            <div class="divider"></div>
             <div class="footer_part2">
                    <div class="container-fluid">
                        <div class="social">
                         <!-- Start Grid System -->
                        <div class="row">

                               <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 border-r">
                                        <div class="box-1">
                                                <div class="box-1-1">
                                                    <a href="{{ route('index') }}">
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
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 border-r">
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
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-6 border-b">
                                       <div class="row">
                                           <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                <div class="box-3">
                                                    <ul class="list-unstyled list-inlin padding_right">
                                                        <li><a href="https://twitter.com/NSR60150356"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                        <li><a href="https://www.facebook.com/ENGNSRWADI/"><i class="fab fa-facebook"></i></a></li>
                                                    </ul>
                                                </div>
                                           </div>
                                           <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="box-3 no-b">
                                                <ul class="list-unstyled list-inline padding_right">
                                                    <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-cc-paypal"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-cc-discover"></i></a></li>
                                                </ul>
                                            </div>
                                       </div>
                                       </div>
                                </div>
                        </div>
                                    <!-- End Grid System -->
                     </div>
               </div>
             </div>
</section>
<!-- End Footer Section -->

    <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("maincustomersiteresources/webfonts/CormorantGaramond-Regular.ttf")}}">
    <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/swiper-bundle.min.css")}}">
    <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("maincustomersiteresources/css/style.css")}}">

    {{--  Script  --}}



  <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
  @if($errors->has('email') || $errors->has('password'))
  <script>
      console.log("احاااااااااااااااا");
  $(function() {
      $('#myModalup').modal({
          show: true
      });
  });

  </script>
   @endif
  <script type="text/javascript">
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    </script>
  <script>
    $(function () {
        $('#registerForm').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();
            console.log(formData);


            $(".invalid-feedback").children("strong").text("");
            $("#registerForm input").removeClass("is-invalid");
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('register') }}",
                data: formData,
                success: () => window.location.assign("{{ route('logout') }}"),
                error: (response) => {
                    if(response.status === 422) {
                        let errors = response.responseJSON.errors;
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "RegisterError").addClass("is-invalid").text(errors[key][0]);
                            $("#" + key + "RegisterError").children("strong").text(errors[key][0]);
                        });
                    } else {
                        window.location.reload();
                    }
                }
            })
        });
    })
    </script>
  <script>
    $(function () {
        $('#LoginFrom').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();


            console.log(formData);
            $(".invalid-feedback").children("strong").text("");
            $("#LoginFrom input").removeClass("is-invalid");
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('login') }}",
                data: formData,
                success: () => window.location.assign("{{ route('dashboard') }}"),
                error: (response) => {
                    if(response.status === 422) {
                        let errors = response.responseJSON.errors;
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Input").addClass("is-invalid");
                            $("#" + key + "Error").children("strong").text(errors[key][0]);
                            $("#" + key + "Error").children("strong").text(errors[key][1]);
                        });
                    } else {
                        window.location.reload();
                    }
                }
            })
        });
    })
    </script>


   {{--  <livewire:sign-in/>  --}}

  @livewireScripts


    <script type="text/javascript">
    </script>
   <script src="{{asset("maincustomersiteresources/Js/jquery.js")}}"></script>
   <script src="{{asset("maincustomersiteresources/Js/bootstrap.min.js")}}"></script>
   <script src="{{asset("maincustomersiteresources/Js/swiper-bundle.min.js")}}"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async
 ></script>
   <script src="{{asset("maincustomersiteresources/Js/myjs.js")}}"></script>
</body>
  </html>
