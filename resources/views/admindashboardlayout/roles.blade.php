@extends('layouts.admindashboard')
@section('content')
@php
    use App\Manager;
@endphp
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                <h3 class="kt-portlet__head-title">
                     Roles & Permissions <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-shield"></i>
                    </span>
                    <!-- column rendering -->
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" style="padding:10px 0 0 18px ">
                        &nbsp;
                        <a href="#" data-toggle="modal" data-target="#AddRole" class="btn btn-default btn-elevate btn-icon-sm btn-add">
                            <i class="la la-plus"></i> Add Role
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role</th>
                        <th>Permissions</th>
                        <th>Managers</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i=0;
                         function getManagersRole ($role)
                        {

                                 $managers=Manager::role($role)->get();


                                 return $managers;
                        }
                        function getManagersPermissions ($permission)
                        {
                                 $managers=Manager::permission($permission)->get();
                                 return $managers;
                        }

                    @endphp

                    @foreach ($roles as $role)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$role->name}}</td>
                        @if ($role->permissions->count()>0)
                        <td>
                        @foreach ($role->permissions as $permission)
                         {{$permission->name.","}}
                        @endforeach
                    </td>
                        @else
                        <td>No Permissions Added </td>
                        @endif

                        @if (getManagersRole($role->name)->count()>0)

                        <td>
                        @foreach ($managers=getManagersRole($role->name) as $manager)

                         {{$manager->name .','}}
                        @endforeach
                    </td>
                        @else
                        <td>No Managers  asign to this role </td>
                        @endif

                        <td>
                             <div class="row">
                                 <div class="col-lg-5">
                                    <a class="btn btn-primary btn-edit" href="{{route('admin.roles.edit',$role->id)}}" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28">  <i class="kt-font-brand flaticon2-edit"></i> Edit Role</a>
                                 </div>
                                 <div class="col-lg-7">
                                    <form action="{{route('admin.roles.remove',$role->id)}}" method="GET" >
                                        @csrf
                                        @method('DELETE')
                                        <button  onclick="return confirm('Are You sure You want to delete it ?');" class="btn btn-primary btn-remove" type="submit" style="background-color: #fa2c27; color: #fff; border: #fa2c27"> <i class="kt-font-brand flaticon2-trash"></i> Remove Role</button>
                                    </form>
                                 </div>
                             </div>



                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>



        </div>
        <div class="kt-portlet_head kt-portlet_head--lg">

            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" style="padding:10px 0 0 18px ">
                        &nbsp;
                        <a href="#" data-toggle="modal" data-target="#AddPermission" class="btn btn-default btn-elevate btn-icon-sm btn-add">
                            <i class="la la-plus"></i> Add Permission
                        </a>
                    </div>
                </div>
            </div>
        </div>
            <div class="kt-portlet__body">
            <table class="table table-striped- table-bordered table-hover table-checkable permissions-table" id="kt_table_1">

                <thead>
                    @php
                        $i=0;

                    @endphp
                      <tr>
                        <th>#</th>
                        <th>Permission</th>
                        <th>Managers</th>
                        <th>Actions</th>

                    </tr>


                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$permission->name}}</td>

                            @if (getManagersPermissions($permission->name)->count()>0)
                            <td>
                            @foreach ($managers=getManagersPermissions($permission->name) as $manager)
                             {{$manager->name. ','}}
                            @endforeach
                        </td>
                            @else
                            <td>No Managers  asign to this permission </td>
                            @endif

                        <td>


                                      <div class="row">
                                 <div class="col-lg-5">
                                    <a class="btn btn-primary btn-edit" href=" {{route('admin.permission.edit',$permission->id)}}" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28"><i class="kt-font-brand flaticon2-edit"></i> Edit Permission</a>                                 </div>
                                 <div class="col-lg-7">
                                    <form action="{{route('admin.permission.remove',$permission->id)}}" method="GET" >
                                        @csrf
                                        @method('DELETE')
                                        <button  onclick="return confirm('Are You sure You want to delete it ?');" class="btn btn-primary btn-remove" type="submit" style="background-color: #fa2c27; color: #fff; border: #fa2c27"> <i class="kt-font-brand flaticon2-trash"></i>Remove Permission</button>
                                    </form>
                                 </div>
                             </div>

                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>

             @if ($permissions->count()>$roles->count())
             <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                {{ $permissions->links() }}
            </div>
            @else
            <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                {{ $roles->links() }}
            </div>

             @endif
            <!--end: Datatable -->
        </div>
    </div>


</div>










    <div class="modal fade" tabindex="-1" role="dialog" id="AddPermission">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <i class="la la-plus"></i> Add Permission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row AddPermission" method="POST" id="formAddpermission">
                        @method('GET')
                        @csrf
                          <div class="col-lg-12">
                            <div class="form-group">

                                <label class="col-form-label col-lg-3 col-sm-12">Name</label>
                            <input type="text" name="name" class="form-control">
                            <span class="invalid-feedback " role="alert" id="namePermission" style="color: red; font-size:15px; font-weight:500; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>


                            <span class="invalid-feedback " role="alert" id="messagePermission" style="color: red; font-size:15px; font-weight:500; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label col-lg-3 col-sm-12">Roles</label>
                                <div class="form-group">
                                    <select class="form-control kt-select2 roles" id="kt_select2_1" name="roles[]" multiple="multiple">
                                        <optgroup label="Select Roles">
                                            @if ($allroles->count()>0)
                                            @foreach ($allroles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>

                                            @endforeach
                                             @else
                                             <optgroup label="No Roles Added Yet">  </optgroup>
                                            @endif
                                        </optgroup>

                                    </select>
                                    <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>

                                </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label col-lg-3 col-sm-12">Managers</label>
                                <div class="form-group ">
                                    <select class="form-control kt-select2 manager " id="kt_select2_2" name="managers[]" multiple="multiple">
                                        <optgroup label="Select Managers">
                                            @if ($allmanagers->count()>0)
                                            @foreach ($allmanagers as $manager)
                                            <option value="{{$manager->id}}">{{$manager->name}}</option>

                                            @endforeach
                                             @else
                                             <optgroup label="No Managers Added Yet">  </optgroup>
                                            @endif
                                        </optgroup>

                                    </select>
                                    <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>

                                </div>
                            </div>
                          </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-edit" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>



<div class="modal fade" tabindex="-1" role="dialog" id="AddRole">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> <i class="la la-plus"></i> Add Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row addedRole" method="POST" id="formAddRole">
                    @method('GET')
                    @csrf
                      <div class="col-lg-12">
                        <div class="form-group">

                            <label class="col-form-label col-lg-3 col-sm-12">Name</label>
                        <input type="text" name="name" class="form-control">
                        <span class="invalid-feedback " role="alert" id="nameRole" style="color: red; font-size:15px; font-weight:500; padding-top:5px; display:block;">
                            <strong></strong>
                        </span>


                        <span class="invalid-feedback " role="alert" id="messageRole" style="color: red; font-size:15px; font-weight:500; padding-top:5px; display:block;">
                            <strong></strong>
                        </span>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label col-lg-3 col-sm-12">Permissions</label>
                            <div class="form-group">
                                <select class="form-control kt-select2 permission" id="kt_select2_3" name="permissions[]" multiple="multiple">
                                    <optgroup label="Select Permissions">
                                        @if ($allpermissions->count()>0)
                                        @foreach ($allpermissions as $permission)
                                        <option value="{{$permission->id}}">{{$permission->name}}</option>

                                        @endforeach
                                         @else
                                         <optgroup label="No Permissions Added Yet">  </optgroup>
                                        @endif


                                    </optgroup>

                                </select>
                                <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-form-label col-lg-3 col-sm-12">Managers</label>
                            <div class="form-group ">

                                <select class="form-control kt-select2  manager" id="kt_select2_4" name="managers[]" multiple="multiple">
                                    <optgroup label="Select Managers">

                                        @if ($allmanagers->count()>0)
                                        @foreach ($allmanagers as $manager)
                                        <option value="{{$manager->id}}">{{$manager->name}}</option>

                                        @endforeach
                                         @else
                                         <optgroup label="No Managers Added Yet">  </optgroup>
                                        @endif
                                    </optgroup>

                                </select>
                                <p style="margin-top: 10px; color: #1b1b28">Note: You Can Seach By Name</p>
                            </div>
                        </div>
                      </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-edit" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28">Add</button>
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
  $(".permission").select2({


  placeholder: "Select a Permission",
  allowClear: true,

});

$(".manager").select2({

placeholder: "Select a Manager",
allowClear: true
});

$(".roles").select2({


placeholder: "Select a role",
allowClear: true,

});







    });

$(function () {
        $('#formAddRole').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();

            $(".invalid-feedback").children("strong").text("");
            $("#formAddRole input").removeClass("is-invalid");
            $("#" + 'message' + "Role").addClass("is-invalid").text('');
                            $("#" + 'message' + "Role").children("strong").text('');
            $.ajax({
                method: "GET",
                headers: {
                    Accept: "application/json"
                },
                url: "{{route('admin.roles.store')}}",
                data: formData,
                dataType:"json",
                success:  (response) => {
                    if(response.status === 400) {

                        let errors = response.errors;
                        $(".invalid-feedback").children("strong").text("");
                        $("#formAddRole input").addClass("is-invalid");
                        $("#" + 'message' + "Role").children("strong").text('');
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Role").addClass("is-invalid").text(errors[key][0]);
                            $("#" + key + "Role").children("strong").text(errors[key][0]);

                        });
                    }
                    else {
                    //     $(".invalid-feedback").children("strong").text("");
                    // $("#formAddRole input").removeClass("is-invalid");
                    //     window.location.assign("{{ route('admin.roles') }}");
                    }},
                error: (response) => {
                    if(response.status==500)
                    {

                    let error = response.responseJSON.message;
                    $("#" + 'name' + "Role").addClass("is-invalid").text('');
                            $("#" + 'name' + "Role").children("strong").text('');
                            $("#formAddRole input").addClass("is-invalid");
                        $("#" + 'message' + "Role").addClass("is-invalid").text('This Role is already exist');
                            $("#" + 'message' + "Role").children("strong").text('This Role is already exist');
                    }
                    else{
                        window.location.assign("{{ route('admin.roles') }}");
                        // window.location.reload();
                    }

                }
            })
        });
    })



    $(function () {
        $('#formAddpermission').submit(function (e) {
            e.preventDefault();
            let formData=$(this).serializeArray();


            $(".invalid-feedback").children("strong").text("");
            $("#formAddpermission input").removeClass("is-invalid");
            $("#" + 'message' + "Permission").addClass("is-invalid").text('');
                            $("#" + 'message' + "Permission").children("strong").text('');
            $.ajax({
                method: "GET",
                headers: {
                    Accept: "application/json"
                },
                url: "{{route('admin.permission.store')}}",
                data: formData,
                dataType:"json",
                success:  (response) => {
                    if(response.status === 400) {

                        let errors = response.errors;
                        $(".invalid-feedback").children("strong").text("");
                        $("#formAddpermission input").addClass("is-invalid");
                        $("#" + 'message' + "Permission").children("strong").text('');
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Permission").addClass("is-invalid").text(errors[key][0]);
                            $("#" + key + "Permission").children("strong").text(errors[key][0]);

                        });
                    }
                    else {

                    }},
                error: (response) => {
                    if(response.status==500)
                    {

                    let error = response.responseJSON.message;
                    $("#" + 'name' + "Permission").addClass("is-invalid").text('');
                            $("#" + 'name' + "Permission").children("strong").text('');
                            $("#formAddpermission input").addClass("is-invalid");
                        $("#" + 'message' + "Permission").addClass("is-invalid").text('This Permission is already exist');
                            $("#" + 'message' + "Permission").children("strong").text('This Permission is already exist');
                    }
                    else{

                        window.location.assign("{{ route('admin.roles') }}");
                    }

                }
            })
        });
    })
</script>
@endsection
