@extends('layouts.admindashboard')
@section('content')

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                <h3 class="kt-portlet__head-title">
                     Edit Permission <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-shield"></i>
                    </span>
                    <!-- column rendering -->
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">

            <form class="form" action="{{route('admin.permission.update',$permission->id)}}" method="POST">

                @csrf
                <div class="card-body">
                 <div class="form-group">
                  <label>Permission Name:</label>
                  <input type="text" class="form-control" value="{{$permission->name}} " name="name"/>
                  @error('name')
                  <p class="invalid-feedback" style="display: block" role="alert">
                      <strong>{{ $message }}</strong>
                  </p>
              @enderror
                 </div>
                 <div class="form-group">
                    <label class="col-form-label col-lg-3 col-sm-12">Roles</label>
                    <div class="form-group">
                        <select class="form-control kt-select2 roles" id="kt_select2_7" name="roles[]" multiple="multiple">
                            <optgroup label="Select Permissions">
                                @if ($allroles->count()>0)
                      @foreach ($allroles as $role)

                        <option value="{{$role->id}}"

                               @foreach ($permission->roles as $rolepermission)
                                  @if ($rolepermission->id==$role->id)
                                   {{'selected'}}

                                  @endif
                               @endforeach



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
                <div class="form-group">
                    <label class="col-form-label col-lg-3 col-sm-12">Managers</label>
                    <div class="form-group">
                        <select class="form-control kt-select2 manageredit" id="kt_select2_4" name="managers[]" multiple="multiple">
                            <optgroup label="Select Managers">
                                @if ($managers->count()>0)
                                @foreach ($managers as $manager)

                                  <option value="{{$manager->id}}"

                                         @foreach ( $managershaspermission as $managerpermission)
                                            @if ($managerpermission->id==$manager->id)
                                             {{'selected'}}

                                            @endif
                                         @endforeach



                                      >{{$manager->name}}</option>
                                   @endforeach
                                                       @else
                                                       <optgroup label="No Managers  Added Yet">  </optgroup>
                                         @endif
                            </optgroup>

                        </select>
                        <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>

                    </div>
                </div>

                </div>
                <div class="card-footer">
                 <div class="row">

                  <div class="col text-right">
                    <button type="submit" class="btn btn-primary  mr-2">Save & Edit</button>
                  </div>
                 </div>
                </div>
               </form>



        </div>


    </div>


</div>










<!-- end:: Content -->
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
        // $(".select2-search__field").attr('placeholder','Select permission');
  $(".roles").select2({


  placeholder: "Select a Role",
  allowClear: true,

});

$(".manageredit").select2({

placeholder: "Select a Manager",
allowClear: true
});








    });
</script>
@endsection
