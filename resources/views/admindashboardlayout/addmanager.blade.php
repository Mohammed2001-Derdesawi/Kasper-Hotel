@extends('layouts.admindashboard');
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__body">

            <div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
        <i class="kt-font-brand fas fa-plus"></i> Add Manager
     </h3>

    </div>

    <!--begin::Form-->
    <div class="card-body">
  <form method="POST"   role="form" action="{{route('admin.managers.add')}}" enctype="multipart/form-data">

        @csrf


      <div class="form-group">
        <label>Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{old('name')}}"  id="name"  placeholder="Name" required/>
        @error('name')
        <span class="invalid-feedback" role="alert" style="display: block">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
       </div>

      <div class="form-group">
       <label>Email<span class="text-danger">*</span></label>
       <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{old('email')}}"  placeholder="Enter email" required/>
       @error('email')
       <span class="invalid-feedback" role="alert"  style="display: block">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
      </div>

      <div class="form-group">
       <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
       <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
       @error('password')
       <span class="invalid-feedback"   style="display: block" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Re_Password <span class="text-danger">*</span></label>

            <input id="password-confirm" type="password" placeholder="Re_Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

       </div>
    <div class="form-group">
        <label>FaceBook Link</label>
        <input type="url" class="form-control  @error('facebook') is-invalid @enderror" name="facebook" value="{{old('facebook')}}"  placeholder="FaceBook" />


       @error('facebook')
       <span class="invalid-feedback "  style="display: block" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
</div>
       <div class="form-group">
        <label>Twitter Link</label>
        <input type="url" class="form-control @error('twitter') is-invalid @enderror " name="twitter" value="{{old('twitter')}}"  placeholder="Twitter" />


       @error('twitter')
       <span class="invalid-feedback"  style="display: block" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
</div>
       <div class="form-group">
        <label>GitHub Link</label>
        <input type="url" class="form-control @error('github') is-invalid @enderror "  style="display: block" name="github" value="{{old('github')}}"  placeholder="github" />


       @error('github')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
   @enderror
</div>
       <div class="form-group">
        <label for="kt_user_avatar_3">Image</label>

        <div class="col-lg-9 col-xl-6" style="margin-top: 3px">
            <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
                <div class="kt-avatar__holder" style="background-image: url('{{ asset('admindashboard/media/users/100_3.jpg')}}')"></div>
                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen"></i>
                    <input type="file" name="image"  accept=".png, .jpg, .jpeg">
                </label>
                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                    <i class="fa fa-times"></i>
                </span>
            </div>
            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
        </div>

    @error('file')
    <span class="invalid-feedback"  style="display: block" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
<div class="form-group">
    <label class="col-form-label col-lg-3 col-sm-12">Permissions</label>
    <div class="form-group">
        <select class="form-control kt-select2 permission" id="kt_select2_9" name="permissions[]" multiple="multiple">
            <optgroup label="Select Permissions">
                @if ($allpermissions->count()>0)
      @foreach ($allpermissions as $permission)

        <option value="{{$permission->id}}"
            >{{$permission->name}}</option>
         @endforeach
                             @else
                             <optgroup label="No Permissions Added Yet">  </optgroup>
               @endif
            </optgroup>

        </select>
        <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>

    </div>
 </div>
 <div class="form-group">
    <label class="col-form-label col-lg-3 col-sm-12">Roles</label>
    <div class="form-group">
        <select class="form-control kt-select2 permission" id="kt_select2_10" name="roles[]" multiple="multiple">
            <optgroup label="Select Permissions">
                @if ($roles->count()>0)
      @foreach ($roles as $role)

        <option value="{{$role->id}}"
            >{{$role->name}}</option>
         @endforeach
                             @else
                             <optgroup label="No Roles Added Yet">  </optgroup>
               @endif
            </optgroup>

        </select>
        <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>

    </div>
 </div>
 <div class="form-group mb-1">
    <label for="exampleTextarea">Description <span class="text-danger">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror "  id="exampleTextarea" rows="3" name="description" required>{{old('description')}}</textarea>

   @error('description')
   <span class="invalid-feedback"  style="display: block" role="alert">
       <strong>{{ $message }}</strong>
   </span>
   @enderror
 </div>

</div>



{{--
       <div class="form-group">
        <label>Image<span class="text-danger">*</span></label>
        <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
            <h3>Drag Or Drop Image</h3>
            <span>Upload file</span>
        </div>
        <div class="dropzone-previews"></div>
        <input type="file" name="filetest" id="filetest" multiple hidden>
    </div> --}}

      {{-- <div class="form-group " style="margin-top: 25px;">
        <label>Image<span class="text-danger">*</span></label>
        <div class="col-lg-4 col-md-9 col-sm-12">
            <div class="dropzone dropzone-default dropzone-info dz-clickable" id="kt_dropzone_3">
                <div class="dropzone-msg dz-message needsclick">
                    <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                    <span class="dropzone-msg-desc">Only image, pdf and psd files are allowed for upload</span>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="card-footer">
        <button type="submit" class="btn btn-primary mr-2" id="submit-all">Add</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </form>
 </div>






    <!--end::Form-->
   </div>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset('admindashboard/js/pages/crud/file-upload/ktavatar.js')}}"></script>

@endsection
