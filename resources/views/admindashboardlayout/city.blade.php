@extends('layouts.admindashboard')

@section('styles')

    <meta name="_token" content="{{ csrf_token() }}" />

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}




    {{-- <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}


    <style>
        .add_button {
            color: #fff;
            background-color: #fa2c27;
            border: 0;
            display: inline-block;

        }

    </style>
@endsection


@section('content')

    <div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet_head kt-portlet_head--lg">
                <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                    <h3 class="kt-portlet__head-title">
                        <span class="kt-portlet__head-icon">
                            <i class="far fa-building" style="color: #fa2c27"></i>
                            Cities
                        </span>
                        <!-- column rendering -->
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions" style="padding:10px 0 0 12px">
                            &nbsp;
                            <a href="#" data-toggle="modal" data-target="#addcountry"
                                class="btn btn-default btn-elevate btn-icon-sm btn-add">
                                <i class="la la-plus"></i> Add City
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <div>
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>hotels</th>
                                <th>created at</th>
                                <th style="width:auto">Actions</th>

                            </tr>
                        </thead>
                        <tbody>



                            @php
                                $i = 0;
                            @endphp

                            @foreach ($cities as $city)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->country->name }}</td>
                                    <td>{{ $city->country->hotels()->count() }}</td>
                                    <td>{{ $city->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="form-group"
                                            style="display: flex; justify-content: center; align-items: center">
                                            <div class="">
                                                <a class="btn btn-primary btn-edit" id="buttoneditCountry"
                                                    data-placement="top" title="Edit Manager" href="" data-toggle="modal"
                                                    data-target="#Editcountry"
                                                    style="background-color: #1b1b28; color: aliceblue; border: #1b1b28"
                                                    data-countryid="{{ $city->id }}" data-name="{{ $city->name }}"> <i
                                                        class="kt-font-brand flaticon2-edit"></i></a>
                                            </div>
                                            <div class="">
                                                <form action="{{ route('admin.city.remove', $city->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button data-toggle="tooltip" data-placement="top"
                                                        title="Delete Manager"
                                                        onclick="return confirm('Note:everything in this country will delete !');"
                                                        class="btn btn-primary btn-remove" type="submit"
                                                        style="background-color: #fa2c27; color: #fff; border: #fa2c27"><i
                                                            class="kt-font-brand flaticon2-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>



                                    </td>
                                </tr>
                            @endforeach







                        </tbody>
                    </table>
                </div>

                <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                    {{ $cities->links() }}
                </div>



            </div>


        </div>


    </div>



    <!-- begin:: Content -->
    <div class="modal fade " id="addcountry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <form class="kt-form" action="#" method="POST" id="countryadd">

                        @csrf
                        <div class="kt-portlet__body">
                            <div class="kt-form__section kt-form__section--first">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">City Name:</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter Hotel name" value="{{ old('name') }}" id="nameInput">


                                        <span class="invalid-feedback" role="alert" id="nameError">
                                            <strong></strong>
                                        </span>


                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Country:</label>
                                    <div class="col-lg-4">
                                        <select name="country_id"
                                            class="form-control @error('manager_id') is-invalid @enderror SlectBox">

                                            @foreach ($countries as $country)
                                                <option value=" {{ $country->id }}"> {{ $country->name }} </option>
                                            @endforeach



                                            @error('manager_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror



                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot text-right">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-success " id="upload" value="Add"
                                            style="display: inline-block; background-color: #fa2c27; border: 0; padding: 10px 20px;"
                                            class="add_button">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>






    {{-- begin edit modal --}}
    <div class="modal fade " id="Editcountry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <form class="kt-form" action="#" method="POST" id="countryedit">

                        @csrf
                        <div class="kt-portlet__body">
                            <div class="kt-form__section kt-form__section--first">

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">City Name:</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter Country name" value="" id="nameInputEdit">


                                        <span class="invalid-feedback" role="alert" id="nameErrorEdit">
                                            <strong></strong>
                                        </span>


                                    </div>

                                    <div class="col-lg-4">
                                        <input type="hidden" name="cityid"
                                             value="" id="countryid">


                                    </div>
                                </div>
                  <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Country:</label>

                                    <div class="col-lg-4 selDiv" >
                                        <select name="country_id"
                                            class="form-control @error('country_id') is-invalid @enderror SlectBox" id="myselect">

                                            @foreach ($countries as $country)
                                                <option value=" {{ $country->id }}" id="selectmanager{{$country->id}}"

                                               > {{ $country->name }} </option>
                                            @endforeach





                                            @error('country_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror



                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot text-right">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-success " id="upload" value="update"
                                            style="display: inline-block; background-color: #fa2c27; border: 0; padding: 10px 20px;"
                                            class="add_button">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    {{-- end edit modal --}}






    <!-- end:: Content -->

@endsection


@section('scripts')

    <script>
        $(function() {
            $('#countryadd').submit(function(e) {
                e.preventDefault();
                let formData = $(this).serializeArray();

                $(".invalid-feedback").children("strong").text("");
                $("#countryadd input").removeClass("is-invalid");
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: "{{ route('admin.city.add') }}",
                    data: formData,
                    success: () => window.location.assign("{{ route('admin.city') }}"),
                    error: (response) => {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                $("#" + key + "Input").addClass("is-invalid");
                                $("#" + key + "Error").children("strong").text(errors[
                                    key][0]);
                                // $("#" + key + "Error").children("strong").text(errors[
                                //     key][1]);
                            });
                        } else {
                            // window.location.reload();
                        }
                    }
                })
            });
        })
    </script>



    <script>
        $(document).on("click", '#buttoneditCountry', function(e) {


            var country_name = $(this).data('name');
            var manager = $(this).data('manager');
            var country_id = $(this).data('countryid');


            $("#nameInputEdit").val(country_name);
            $("#countryid").val(country_id);
            $('#selectmanager'+manager).prop('selected', true)
            // $("#manager").val(manager);

        });
    </script>



    <script>
        $(function() {
            $('#countryedit').submit(function(e) {
                e.preventDefault();
                let formData = $(this).serializeArray();

                $(".invalid-feedback").children("strong").text("");
                $("#countryedit input").removeClass("is-invalid");
                $.ajax({
                    method: "POST",
                    headers: {
                        Accept: "application/json"
                    },
                    url: "{{ route('admin.city.edit') }}",
                    data: formData,
                    success: () => window.location.assign("{{ route('admin.city') }}"),
                    error: (response) => {
                        if (response.status === 422) {
                            let errors = response.responseJSON.errors;
                            Object.keys(errors).forEach(function(key) {
                                $("#" + key + "InputEdit").addClass("is-invalid");
                                $("#" + key + "ErrorEdit").children("strong").text(
                                    errors[
                                        key][0]);
                                // $("#" + key + "Error").children("strong").text(errors[
                                //     key][1]);
                            });
                        } else {
                            // window.location.reload();
                        }
                    }
                })
            });
        })
    </script>

@endsection
