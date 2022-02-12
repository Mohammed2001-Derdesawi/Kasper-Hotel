@include('userdashboard.hotelview')


@section('content')

@foreach($roomhotel->rooms->paginate(8) as $roomhotels)
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Room reservations</h5>
      </div>

  <form action="" method="POST">
      @csrf
      <div class="modal-body">
        <label for="input_1">Number of people in the room : </label>
        <input type="text" name=""  id="input_1" value=" {{ $roomhotels->people }}" disabled readonly><br>
        <label for="input_2"></label>
        <input type="text" name="" id="input_2"><br>
        <label for="input_3"></label>
        <input type="text" name="" id="input_3"><br>
     </div>
     <div class="modal-footer">
       <button type="button" class="closeBookNow " data-dismiss="modal">Close</button>
       <button type="button" class="BookNow">Book Now</button>
     </div>
  </form>
    </div>
  </div>
</div>
@endforeach
@endsection

