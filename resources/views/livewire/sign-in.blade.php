<div class="modal-sign-up" >

    <div wire:ignore class="modal"   id="myModalup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
               <form >

                <div class="row">
                    <div class="col-md-12">

                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                 <label for="Email">Email</label>
                 <input id="emaillogin" type="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                 @error('email')
                     <span class="invalid-feedback" role="alert" style="color: red">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                 <label for="password">Password</label>
                 <input id="passwordlogin" type="password"  wire:model.defer="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert" style="color: red">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror

                 <button  wire.click.prevent="login" class="btn btn-block">Sign In </button>
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






