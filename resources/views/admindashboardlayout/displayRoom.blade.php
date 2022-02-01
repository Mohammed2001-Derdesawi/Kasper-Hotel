@extends('layouts.admindashboard')

@section('content')


<!-- begin:: Content -->




<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div id="products" class="row view-group">
        <div class="item col-xs-4 col-lg-6">
            <div class="img-event">
                <img style="width: 100%; height: 280px; object-fit: cover" class="group list-group-image img-fluid"
                    src="{{ URL::asset('imagesRoomAdmin/'.$roomDetails->imageRoom)}}" alt="" />
            </div>
            {{-- {{ $room->floor }} --}}
            

        </div>

        <div class="item col-xs-4 col-lg-6">

            <p class="group card-title inner list-group-item-heading">
                Hotel Name : <span style="color: #fa2c27">{{ $roomDetails->hotel->name }}</span>
            </p>


            <p class="group card-title inner list-group-item-heading">
                Number of times to book : <span style="color: #fa2c27">{{ $roomBookedCount }}</span>
            </p>


            <p class="group card-title inner list-group-item-heading">
                Number Of People for this room : <span style="color: #fa2c27">{{ $roomDetails->people
                    }}</span>
            </p>

            <p class="group inner list-group-item-text">
                Floor : <span style="color: #fa2c27">{{ $roomDetails->floor }}</span>
            </p>

            <p class="group inner list-group-item-text">
                Distance : <span style="color: #fa2c27">{{ $roomDetails->distance }}</span>
            </p>


            <p class="group inner list-group-item-text">
                Price : <span style="color: #fa2c27">{{ $roomDetails->room_price }}$</span>
            </p>

            <p class="group inner list-group-item-text">
                Place : <span style="color: #fa2c27">The State of {{ $roomDetails->hotel->country->name }} in {{ $roomDetails->hotel->city->name }} City</span>
            </p>
        </div>
    </div>




</div>



<!-- end:: Content -->



@endsection