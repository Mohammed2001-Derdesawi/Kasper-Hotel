@extends('layouts.admindashboard')


@section('css')
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

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon kt-hidden">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Edit Hotel
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form" action="{{ route('update' , $hotel->id) }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="kt-portlet__body">
                <div class="kt-form__section kt-form__section--first">

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Hotel Name:</label>
                        <div class="col-lg-4">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter Hotel name" value="{{ $hotel->name }}">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Country:</label>
                        <div class="col-lg-4">
                            <select id="country" name="country_id" class="form-control @error('country_id') is-invalid @enderror SlectBox"
                                onclick="console.log($(this).val())" onchange="console.log('change is firing')">

                                @foreach ($country as $contries)
                                <option {{ $hotel->country_id == $contries->id ? 'selected' : '' }} value="{{
                                    $contries->id }}"> {{ $contries->name }} </option>
                                @endforeach

                                @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">City:</label>
                        <div class="col-lg-4">
                            <select id="city" name="city_id" class="form-control @error('city_id') is-invalid @enderror SlectBox">
                                @foreach ($city as $cities)
                                <option {{ $hotel->city_id == $cities->id ? 'selected' : '' }} value=" {{ $cities->id
                                    }}"> {{ $cities->name }} </option>
                                @endforeach

                                @error('city_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Manager:</label>
                        <div class="col-lg-4">
                            <select name="manager_id" class="form-control @error('manager_id') is-invalid @enderror SlectBox">
                                @foreach ($manager as $managers)
                                <option {{ $hotel->manager_id == $managers->id ? 'selected' : ''}} value=" {{
                                    $managers->id }}"> {{ $managers->name }} </option>
                                @endforeach

                                @error('manager_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Number of Floor:</label>
                        <div class="col-lg-4">
                                <input type="number" min="1" name="numberoffloor" class="form-control @error('numberoffloor') is-invalid @enderror"
                                placeholder="Enter Number of floor" value="{{ $hotel->numberoffloor }}">

                                @error('numberoffloor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Number of Rooms in one Floor: <span
                                style="color: #fa2c27; display: block">(4-10 rooms)</span></label>
                        <div class="col-lg-4">
                            <input type="number" min="4" name="numberofroomsinonefloor" max="10" class="form-control  @error('numberofroomsinonefloor') is-invalid @enderror"
                                placeholder="Enter Number of rooms" value="{{ $hotel->numberofroomsinonefloor }}">

                                @error('numberofroomsinonefloor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Number of Stars:</label>
                        <div class="col-lg-4">
                            <input type="number" min="1" name="stars" max="5" class="form-control @error('stars') is-invalid @enderror"
                                placeholder="Enter Number of stars" value="{{ $hotel->stars }}">

                                @error('stars')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Salary At Night <span style="color: #fa2c27">$</span>
                            :</label>
                        <div class="col-lg-4">
                            <input type="text" name="salaryAtNight" class="form-control @error('salaryAtNight') is-invalid @enderror" placeholder="Enter salary"
                                value="{{ $hotel->salaryAtNight }}">

                                @error('salaryAtNight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Image Of Hotel:</label>
                        <div class="col-lg-4">

                            {{-- <div class="div_image_hotel">
                                <img style=" border: solid 1px #eee; width: 180px; height: 180px; object-fit: cover; padding: 15px;" src="{{ asset($hotel->image) }}" alt="">
                            </div> --}}


                            <input type="file" name="image" accept="image/png, image/jpeg , image/jpg"
                            class="form-control  @error('image') is-invalid @enderror"  
                            value="{{ asset($hotel->image) }}">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Desciption:</label>
                        <div class="col-lg-4">
                            <textarea style="resize: none" name="description" class="form-control" id="" cols="30"
                                rows="10" placeholder="Write Here..."> {{  $hotel->description  }} </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-success"
                                style="display: inline-block; background-color: #fa2c27; border: 0;"
                                class="add_button">Update</button>
                            <a href="{{ route('allhotels_admin') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->


</div>






<!-- end:: Content -->

@endsection


{{-- <script>
    $(document).ready(function() {
            $('#country').on('change', function() {
                var countryId = $(this).val();
                if (countryId) {
                    $.ajax({
                        url: "{{ url('addHotel') }}/" + countryId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#city').empty();
                            $.each(data, function(key, value) {
                                $('#city').append('<option value="' +
                                    value + '">' + value + '</option>'); 
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
</script> --}}


