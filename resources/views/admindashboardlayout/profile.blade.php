@extends('layouts.admindashboard')
@section('styles')
<link href="{{ asset('admindashboard/css/pages/wizard/wizard-4.css')}}" rel="stylesheet" type="text/css">
@endsection()
@section('content')


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                  Manager Profile
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                       {{$manager->name}}</span>
                </div>
            </div>

        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--tabs">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-toolbar">
                    <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab" id="profile">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg> Change Password
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="kt-portlet__body">

                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                            <div class="kt-form kt-form--label-right">
                                <div class="kt-form__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body" id="bodyfirst">
                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                                        <div class="kt-avatar__holder" style='background-image: url("{{asset($manager->image)}}");'></div>

                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->email}}</label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->name}}</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">FaceBook</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-facebook-f"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->facebook}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">GitHub</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-github"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->github}}</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Twitter</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-twitter"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->twitter}}</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>
                                                        <label class="form-control" style="text-align: left;">{{$manager->description}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                            <div class="kt-form kt-form--label-right">
                                <div class="kt-form__body">

                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="alert alert-solid-success alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert"  id="alertsuccess"style="display: none;">
                                                <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
                                                <div class="alert-text" ><br></div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <form action="#" method="post" id="forminfo" enctype="multipart/form-data">
                                              @csrf
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_avatar_3">
                                                            <div class="kt-avatar__holder" style="background-image: url('{{asset($manager->image)}}');"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                <i class="fa fa-pen"></i>
                                                                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                <i class="fa fa-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" id="imageError" style="color: red; font-size:17px; font-weight:500; padding-top:5px; display:block;">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>


                                                                <input class="form-control" type="email" name="email" value="{{$manager->email}}">

                                                        </div>
                                                    </div>
                                                    <span class="invalid-feedback" role="alert" id="emailError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                        <strong></strong>
                                                    </span>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
                                                            <input class="form-control" type="text" name="name" value="{{$manager->name}}">

                                                        </div>
                                                        <span class="invalid-feedback" role="alert" id="nameError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                            <strong></strong>
                                                        </span>
                                                    </div>

                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">FaceBook</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-facebook-f"></i></span></div>
                                                            <input class="form-control" type="url" name="facebook" value="{{$manager->facebook}}">
                                                            <span class="invalid-feedback" role="alert" id="facebookError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                                <strong></strong>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">GitHub</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-github"></i></span></div>
                                                            <input class="form-control" type="url" name="github" value="{{$manager->github}}">
                                                            <span class="invalid-feedback" role="alert" id="githubError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                                <strong></strong>
                                                            </span>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Twitter</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-twitter"></i></span></div>
                                                            <input class="form-control" type="url" name="twitter" value="{{$manager->twitter}}">
                                                            <span class="invalid-feedback" role="alert" id="twitterError" style="color: #fd397a; font-size:13px;font-weight:200; padding-top:5px; display:block;">
                                                                <strong></strong>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="form-group mb-1">
                                                            <textarea class="form-control  " id="exampleTextarea" rows="3" name="description" required>{{$manager->description}}</textarea>

                                                            </div>
                                                            <span class="invalid-feedback" role="alert" id="descriptionError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                                <strong></strong>
                                                            </span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                        <div class="kt-form__actions">
                                            <div class="row">
                                                <div class="col-xl-3"></div>
                                                <div class="col-lg-9 col-xl-6">
                                                    <button type="submit" class="btn btn-label-brand btn-bold" id="savechange">Save changes</button>
                                                    <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                            </form>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                            <div class="kt-form kt-form--label-right">
                                <div class="kt-form__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                                <div class="alert-text">Note The Admin Will Now that you are going to change your password <br> But he will not going to know it </div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="alert alert-solid-success alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert"  id="alertsuccesspassowrd"style="display: none;">
                                                <div class="alert-icon"><i class="fas fa-check-circle"></i></div>
                                                <div class="alert-text" > <br></div>
                                                <div class="alert-close">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                                </div>
                                            </div>
                                            <form action="#"  method="post" id="changepasswordform">

                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control" name="currentpassword"  placeholder="Current password" id="currentpasswordInput">
                                                        <a href="{{route('admin.profile.forget.password')}}" data-toggle="kt-tooltip" data-placement="top" data-skin="dark"  data-original-title="Note:You Will Logout to reset your password" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Forgot password ?</a>
                                                        <span class="invalid-feedback" role="alert" id="currentpasswordError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                            <strong></strong>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control" name="password" placeholder="New password" id="passwordInput">
                                                        <span class="invalid-feedback" role="alert" id="passwordError" style="color: #fd397a; font-size:13px; font-weight:200; padding-top:5px; display:block;">
                                                            <strong></strong>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group form-group-last row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control"  name="password_confirmation" placeholder="Verify password">
                                                    </div>
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-lg-9 col-xl-6">
                                            <button type="submit" class="btn btn-label-brand btn-bold">Save changes</button>
                                            <button type="reset" class="btn btn-clean btn-bold">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>










<!-- end:: Content -->
@endsection
@section('scripts')
<script src="{{ asset('admindashboard/js/pages/crud/file-upload/ktavatar.js')}}"></script>
<script src="{{ asset('admindashboard/js/pages/custom/user/edit-user.min.js')}}" type="text/javascript"></script>
<script>

    $(document).ready(function(){
       $('#savechange').click(function(e){
           e.preventDefault();
           var formData =  new FormData($('#forminfo')[0]);
           $(".invalid-feedback").children("strong").text("");
            $("#LoginFrom input").removeClass("is-invalid");
          $.ajax({
              type:'post',
            //   cache:false,

              processData:false,
              contentType:false,
              url:"{{route('admin.profile.updateinfo',Auth::guard('admin')->user()->id)}}",
              data:formData,
              success:function(data){
                $('#bodyfirst').load("{{route('admin.profile.getdata')}}");
                $("#alertsuccess").show().text(data.message);


              },
              error: function(data)
              {
                let errors = data.responseJSON.errors;

                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Input").addClass("is-invalid");
                            $("#" + key + "Error").children("strong").text(errors[key][0]);
                            $("#" + key + "Error").children("strong").text(errors[key][1]);
                        });


              },
          });



       });


       $('#changepasswordform').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();


            $(".invalid-feedback").children("strong").text("");
            $("#changepasswordform input").removeClass("is-invalid");
            $.ajax({
                type: "post",

                url: "{{ route('admin.profile.update.password',Auth::guard('admin')->user()->id) }}",
                data: formData,
                success :function(data) {
                    if(data.status==421)
                        {
                            $("#currentpasswordInput").addClass("is-invalid");
                            $("#currentpasswordError").children("strong").text(data.message);
                        }
                        else
                        {

                            $("#alertsuccesspassowrd").show().text(data.message);
                        }

                },
                error: (response) => {
                    let errors = response.responseJSON.errors;
                    if(response.status==422)
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Input").addClass("is-invalid");
                            $("#" + key + "Error").children("strong").text(errors[key][0]);
                            $("#" + key + "Error").children("strong").text(errors[key][1]);
                        });

                }
            })
        });



    $('[data-toggle="tooltip"]').tooltip();

    });
    </script>

@endsection
