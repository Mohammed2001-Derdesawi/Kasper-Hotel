@extends('layouts.admindashboard')


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
        <form class="kt-form">
            <div class="kt-portlet__body">
                <div class="kt-form__section kt-form__section--first">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Hotel Name:</label>
                        <div class="col-lg-4">
                            <input type="email" class="form-control" placeholder="Enter Hotel name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Address:</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Enter Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Manager:</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Enter Manager">
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
                                style="display: inline-block; background-color: #fa2c27; border: 0;">Add</button>
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