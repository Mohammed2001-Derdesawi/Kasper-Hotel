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
                    Add Room for Hotel name
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form" action="{{ route('storeRoom',$hotelRoom->id) }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="kt-portlet__body">
                <div class="kt-form__section kt-form__section--first">

                   

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Number of Person For this Room:</label>
                        <div class="col-lg-4">
                            <input type="number" min="1" max="4" name="people"
                                class="form-control @error('people') is-invalid @enderror"
                                placeholder="Enter Number of Person">

                            @error('people')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Distance For this Room:</label>
                        <div class="col-lg-4">
                            <input type="text" name="distance"
                                class="form-control @error('distance') is-invalid @enderror"
                                placeholder="Enter Distance Room">

                            @error('distance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Floor:</label>
                        <div class="col-lg-4">
                            <input type="number" min="1" max="{{ $hotelRoom->numberoffloor }}" name="floor" 
                                class="form-control @error('floor') is-invalid @enderror"
                                placeholder="Enter Number of rooms">

                            @error('floor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Price:</label>
                        <div class="col-lg-4">
                            <input type="text" name="room_price"
                                class="form-control @error('room_price') is-invalid @enderror"
                                placeholder="Enter Price Room">

                            @error('room_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    {{-- <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Is Clean:</label>
                        <div class="col-lg-4">
                            <input type="text" name="salaryAtNight"
                                class="form-control  @error('salaryAtNight') is-invalid @enderror"
                                placeholder="Enter salary">

                            @error('salaryAtNight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> --}}


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Image Of Hotel:</label>
                        <div class="col-lg-4">
                            <input type="file" name="imageRoom" class="form-control  @error('imageRoom') is-invalid @enderror"
                                placeholder="Add Image">

                            @error('imageRoom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                                class="add_button">Add</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
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








@section('scripts')


@endsection