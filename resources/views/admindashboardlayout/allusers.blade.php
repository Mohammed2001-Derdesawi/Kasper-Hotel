@extends('layouts.admindashboard')

@section('css')

<style>
    @media print {
        .details {
            display: none;
        }
    }
</style>

@endsection


@section('content')


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    All Users
                    <!-- column rendering -->
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-download"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a class="kt-nav__link print" id="print_Button" onclick="printDiv()"> <i
                                                class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span>Print PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &nbsp;
                        <a href="{{ route('addUser') }}" class="btn btn-default btn-elevate btn-icon-sm"
                            data-toggle="modal" data-target="#registerformUser">
                            <i class="la la-plus"></i> Add User
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body" id="print">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>Record ID</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Points</th>
                        {{-- <th>Type</th> --}}
                        <th class="details">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $i = 0;
                    ?>


                    @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>Gleichner, Ziemann and Gutkowski</td> --}}
                        <td>2</td>
                        <td class="details">
                            <div class="col">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Details
                                    </button>
                                    <div id="drop" class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href="#" class="dropdown-item" id="userinfo" data-toggle="modal"
                                            data-target="#detailsUser" data-email="{{ $user->email }}"
                                            data-name="{{ $user->name }}">
                                            <i class="flaticon-info" style="color: #fa2c27"></i>User Info
                                        </a>

                                        <a id="userDeleteId" class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteUser" data-iddel="{{ $user->id }}">
                                            <i class="flaticon-delete" style="color: #fa2c27"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
</div>


<!--begin::Modal add user-->
<div class="modal fade" id="registerformUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data" id="formUser">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-md-6" style="padding-bottom: 15px">
                            <label class="form-control-label">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="name" name="name">

                            <span class="invalid-feedback " role="alert" id="nameError"
                                style="color: red; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>

                        </div>

                        <div class="col-md-6" style="padding-bottom: 15px">
                            <label class="form-control-label">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="email" name="email">

                            <span class="invalid-feedback " role="alert" id="emailError"
                                style="color: red; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>

                        </div>

                        <div class="col-md-6" style="padding-top: 15px">
                            <label class="form-control-label">Password:</label>
                            <input type="Password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="password" name="password">

                            <span class="invalid-feedback " role="alert" id="passwordError"
                                style="color: red; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>
                        </div>

                        <div class="col-md-6">
                            <label class="form-control-label" style="padding-top: 15px">Image:</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                accept="image/png, image/jpeg , image/jpg" name="image">

                            <span class="invalid-feedback " role="alert" id="imageError"
                                style="color: red; padding-top:5px; display:block;">
                                <strong></strong>
                            </span>
                        </div>

                    </div>

                    <div class="modal-footer" style="padding-top: 25px;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!--end::Modal add user-->



{{-- begin modal delete --}}

<!-- Modal -->
<div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('deleteUser') }}" method="post">
                @csrf
                <input type="hidden" name="deluser" id="deluser">
                <div class="modal-body">
                    <h5>Are you sure to delete <span style="color: #fa2c27;">?</span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- end modal delete --}}



{{-- bdgin modal details user --}}
<!-- Modal -->

<div class="modal fade" id="detailsUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img style="width: 60px; height: 60px; border-radius: 50%;"
                        src="{{ asset('assets/pages/img/avatars/team1.jpg') }}" alt="">
                    {{-- <b style="display: block" id="username"></b> --}}
                    <form action="" method="POST">
                        @csrf

                        {{-- <div class="text-center">
                            <input type="text" name="userinfoName" id="userinfoName" value="<?php @csrf?>"
                                style="border: 0; outline: 0; display: block;">
                            <input type="text" name="userinfoEmail" id="userinfoEmail" value="<?php @csrf?>"
                                style="border: 0; outline: 0; display: block;">
                        </div> --}}

                        <span id="userinfoName" style="display: block; font-size: 14px;"></span>
                        <span id="userinfoEmail"></span>

                    </form>
                    {{-- <span style="display: block;">{{ $user->id }}</span> --}}
                </div>

                <div class="text-left" style="padding-top: 25px">
                    <p style="color: #fa2c27; display: inline-block;"> Booking : </p>
                    <p style="display: inline-block; padding-left: 10px;">Cielo Hotel in Palestine,Gaza</p>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- end modal details user --}}

<!-- end:: Content -->


@endsection




@section('scripts')

<script type="text/javascript">
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>

<script>
    $(function () {
        $('#formUser').submit(function (e) {
            e.preventDefault();
            let formData = $(this).serializeArray();

            $(".invalid-feedback").children("strong").text("");
            $("#formUser input").removeClass("is-invalid");
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('addUser') }}",
                data: formData,
                success: () => window.location.assign("{{ route('users') }}"),
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

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script>
    $(document).on( "click", '#userinfo',function(e) {
    var user_name = $(this).data('name');
    var user_email = $(this).data('email');

    $("#userinfoName").text(user_name);
    $("#userinfoEmail").text(user_email);

    // $("#userinfoEmail").val(user_email);
    // $("#userinfoName").val(user_name);
});

</script>


<script>
    $(document).on( "click", '#userDeleteId',function(e) {
    var userId = $(this).data('iddel');

    $("#deluser").val(userId);
});


</script>



<script type="text/javascript">
    function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
</script>

@endsection