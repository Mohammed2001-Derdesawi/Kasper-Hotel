@extends('layouts.admindashboard')

@section('styles')
<style>
    .icon {
        color: #facc39;
    }



    .view-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: row;
        flex-direction: row;
        padding-left: 0;
        margin-bottom: 0;
    }

    .thumbnail {
        margin-bottom: 30px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 30px;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 0 1rem;
        border: 0;
    }

    .item.list-group-item .img-event {
        float: left;
        width: 30%;
    }

    .item.list-group-item .list-group-image {
        margin-right: 10px;
    }

    .item.list-group-item .thumbnail {
        margin-bottom: 0px;
        display: inline-block;
    }

    .item.list-group-item .caption {
        float: left;
        width: 70%;
        margin: 0;
    }

    .item.list-group-item:before,
    .item.list-group-item:after {
        display: table;
        content: " ";
    }

    .item.list-group-item:after {
        clear: both;
    }

    .item {
        position: relative;
    }

    .svg_cancel {
        position: absolute;
        right: 9px;
        top: -9px;
        border: solid 1px #fff;
        border-radius: 50%;
        background-color: #fff;
        color: #999;
        width: 20px;
        height: 20px;
        ;
        display: none;
    }

    .item:hover .svg_cancel {
        display: block;
    }
</style>
@endsection



@section('content')



{{-- <div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>

<div class="container">
    @if ($message = Session::get('update'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>

<div class="container">
    @if ($message = Session::get('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div> --}}






<!-- begin:: Content -->

{{--
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">

        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon kt-hidden">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    All Hotel
                </h3>
            </div>
        </div>

        <div class="kt-portlet__body col-lg-6">
            <div class="kt-form__section kt-form__section--first">

                @foreach ($hotel as $hotels)

                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img image">
                            <a href="#"><img class="image_hotel" src="{{asset('userdashboard/images/gal/5.jpg')}}"
                                    alt=""></a>
                            <div class="listing-avatar">
                                <a href="#"><img class="image_manager"
                                        src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt=""></a>
                                <span class="avatar-tooltip"> Manager : <strong>{{ $hotels->manager->name
                                        }}</strong></span>
                            </div>

                            <div class="sale-window big-sale">Sale 70%</div>
                            <div class="geodir-category-opt">
                                @if ($hotels->stars == 1)
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="1">
                                </div>
                                @elseif($hotels->stars == 2)
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="2">
                                </div>
                                @elseif($hotels->stars == 3)
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3">
                                </div>
                                @elseif($hotels->stars == 4)
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                </div>
                                @elseif($hotels->stars == 5)
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                </div>
                                @endif
                                <div class="rate-class-name">
                                    <div class="score"><strong> Good</strong>8 Reviews </div>
                                    <span>4.1</span>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="#">{{ $hotels->name }}</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i
                                                class="fas fa-map-marker-alt">
                                            </i> {{ $hotels->country->name }} , {{ $hotels->city->name }} </a></div>
                                </div>
                            </div>
                            <p> {{ $hotels->description }} </p>
                            <ul class="facilities-list fl-wrap">
                                <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                            </ul>
                            <div class="geodir-category-footer fl-wrap">
                                <div class="geodir-opt-link">
                                    <div class="geodir-category-price">Awg/Night <span>$ {{ $hotels->salaryAtNight }}
                                        </span></div>
                                </div>
                                <div class="geodir-opt-list">
                                    <a href="#5" class="map-item"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i></a>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div> --}}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-left">
                <div class="btn-group">
                    <strong style="color: #fa2c27; font-size: 22px"><i>All Hotel</i></strong>
                </div>
            </div>

            <div class="pull-right">
                <div class="btn-group">
                    <a href="{{ route('addHotel') }}" class="btn btn-primary" style="color: #fff; font-size: 17px;"> Add
                        Hotel <ion-icon name="add-circle"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>

    <div id="products" class="row view-group">
        @foreach ($hotel as $hotels)
        <div class="item col-xs-4 col-lg-4">
            <div class="thumbnail card">
                <div class="img-event">
                    <img style="width: 100%; height: 280px; object-fit: cover" class="group list-group-image img-fluid"
                        src="{{ asset($hotels->images->first()->imageName) }}" alt="" />
                </div>

                <div class="caption card-body">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <h4 class="group card-title inner list-group-item-heading">
                                {{ $hotels->name }}</h4>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <p>
                                @if ($hotels->stars == 1)
                                <ion-icon class="icon" name="star"></ion-icon>
                                @elseif($hotels->stars == 2)
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                @elseif($hotels->stars == 3)
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                @elseif($hotels->stars == 4)
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                @elseif($hotels->stars == 5)
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                <ion-icon class="icon" name="star"></ion-icon>
                                @endif
                            </p>
                        </div>
                    </div>






                    <p class="group inner list-group-item-text">
                        {{ $hotels->description }}</p>

                    <p class="group inner list-group-item-text">
                        <ion-icon name="location-outline" style="color: #fa2c27"></ion-icon>
                        {{ $hotels->country->name }} , {{ $hotels->city->name }}
                    </p>

                    <p class="group inner list-group-item-text">
                        {{ $hotels->numberoffloor }} floors on each floor {{ $hotels->numberofroomsinonefloor }} rooms
                    </p>


                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="lead">
                                Salary at night ${{ $hotels->salaryAtNight }}
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <img style="width: 40px; height: 40px; border-radius: 50%; display: inline-block"
                                src="{{asset('userdashboard/images/avatar/1.jpg')}}" alt="">
                            <p style="display: inline-block">Manager of Hotel : <span
                                    style="margin-left: 18px; color:#fa2c27;">{{
                                    $hotels->manager->name }}</span></p>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 15px">
                        <div class="col-xs-12 col-md-4">
                            <a href="{{ route('edit_hotel',$hotels->id) }}" class="btn btn-info">Edit</a>
                        </div>


                        <div class="col-xs-12 col-md-4">
                            <a href="{{ route('showRoom',$hotels->id) }}" class="btn btn-success">Show Rooms</a>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <a href="{{ route('addRoom',$hotels->id) }}" class="btn btn-danger">Add Room</a>
                        </div>



                    </div>

                </div>
            </div>
            <a href="#" data-id="{{ $hotels->id }}" id="hotelDelete" data-toggle="modal" data-target="#deleteHotel">
                <svg class="svg_cancel" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                    <path fill-rule="evenodd"
                        d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                </svg>
            </a>
        </div>
        @endforeach
    </div>


    {!! $hotel->links() !!}

</div>



{{-- begin modal delete --}}


<!-- Modal -->
<div class="modal fade" id="deleteHotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('delete') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <h4>Are you sure to delete <span style="color: #fa2c27;">?</span></h4>
                </div>
                <input type="hidden" name="forHotelId" id="forHotelId" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- end modal delete --}}







{{-- {{ $hotel->links() }} --}}




<!-- end:: Content -->

@endsection


{{-- <script>
    $(document).ready(function() {
            $('#country').on('change', function() {
                var countryId = $(this).val();
                if (countryId) {
                    $.ajahotels({
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
                    console.log('AJAhotels load did not work');
                }
            });
        });
</script> --}}

@section('scripts')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    $(document).on( "click", '#hotelDelete',function(e) {
    var hotel_id = $(this).data('id');


    $("#forHotelId").val(hotel_id);
    // $("#userinfoName").val(user_name);
});


</script>

@endsection
