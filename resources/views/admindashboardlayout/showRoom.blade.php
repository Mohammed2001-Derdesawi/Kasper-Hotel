@extends('layouts.admindashboard')

@section('css')
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


<!-- begin:: Content -->



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-left">
                <div class="btn-group">

                    <strong style="color: #fa2c27; font-size: 22px"><i>All Room For Hotel {{ $ShowHotel->name
                            }}</i></strong>
                </div>
            </div>

            <div class="pull-right">
                <div class="btn-group">
                    <a href="{{ route('addRoom',$ShowHotel->id) }}" class="btn btn-primary"
                        style="color: #fff; font-size: 17px;"> Add
                        Room <ion-icon name="add-circle"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>

    <div id="products" class="row view-group">
        @if($ShowRoom->count() == 0)
        
            there is  no rooms
        @else
        @foreach ($ShowRoom as $room)
        <div class="item col-xs-4 col-lg-4">
            <div class="thumbnail card">
                <div class="img-event">
                    <img style="width: 100%; height: 280px; object-fit: cover" class="group list-group-image img-fluid"
                        src="{{ URL::asset('imagesRoomAdmin/'.$room->imageRoom)}}" alt="" />
                </div>
                {{-- {{ $room->floor }} --}}
                <div class="caption card-body">

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <p class="group card-title inner list-group-item-heading">
                                Number Of People for this room : <span style="color: #fa2c27">{{ $room->people }}</span>
                            </p>
                        </div>
                    </div>

                    <p class="group inner list-group-item-text">
                        Floor : <span style="color: #fa2c27">{{ $room->floor }}</span>
                    </p>

                    <p class="group inner list-group-item-text">
                        Distance : <span style="color: #fa2c27">{{ $room->distance }}</span>
                    </p>


                    <p class="group inner list-group-item-text">
                        Price : <span style="color: #fa2c27">{{ $room->room_price }}$</span>
                    </p>




                    <div class="row" style="padding-top: 15px">

                        <div class="col-xs-12 col-md-4">
                            <a href="{{ route('editRoom',$room->id) }}" class="btn btn-info">Edit</a>
                        </div>


                        <div class="col-xs-12 col-md-4">
                            <a href="#" class="btn btn-danger" id="roomDelete"
                                data-toggle="modal" data-target="#deleteRoom" data-id="{{ $room->id }}">
                                Delete
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        @endforeach
        @endif
    </div>


    {!! $ShowRoom->links() !!}

</div>



{{-- begin modal delete --}}


<!-- Modal -->
<div class="modal fade" id="deleteRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('deleteRoom') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <h4>Are you sure to delete <span style="color: #fa2c27;">?</span></h4>
                </div>
                <input type="hidden" name="forRoomId" id="forRoomId" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- end modal delete --}}





<!-- end:: Content -->

@endsection


@section('scripts')

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script>
    $(document).on( "click", '#roomDelete',function(e) {
    var room_id = $(this).data('id');


    $("#forRoomId").val(room_id);
});


</script>

@endsection