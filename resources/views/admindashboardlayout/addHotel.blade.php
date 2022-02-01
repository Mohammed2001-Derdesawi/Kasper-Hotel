@extends('layouts.admindashboard')

@section('css')

<meta name="_token" content="{{csrf_token()}}" />

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">



{{-- <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}


<style>
    .dropzoneDragArea {
        background-color: #fbfdff;
        border: 1px dashed #c0ccda;
        border-radius: 6px;
        padding: 60px;
        text-align: center;
        margin-bottom: 15px;
        cursor: pointer;
    }
</style>
<style>
    .add_button {
        color: #fff;
        background-color: #fa2c27;
        border: 0;
        display: inline-block;

    }

    .dropzone {
        border: 1px solid #fff;
        border-radius: 8px;
    }
</style>
@endsection


@section('content')


{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}



<!-- begin:: Content -->
<div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon kt-hidden">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Add Hotel
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form " action="{{ route('store') }}" method="POST" enctype="multipart/form-data" id="demoform"
            name="demoform">
            @method('POST')
            @csrf
            <div class="kt-portlet__body">
                <div class="kt-form__section kt-form__section--first">

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Hotel Name:</label>
                        <div class="col-lg-4">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter Hotel name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>

                    {{-- @livewire('city-country') --}}
                    {{--
                    <livewire:city-country /> --}}


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Country:</label>
                        <div class="col-lg-4">
                            <select wire:model="selectedCountry" id="country" name="country_id"
                                class="form-control @error('country_id') is-invalid @enderror SlectBox">

                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}"> {{ $country->name }} </option>
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
                            <select id="city" name="city_id" class="form-control  SlectBox">

                                @foreach ($cities as $city)
                                <option value=" {{ $city->id }} "> {{ $city->name }} </option>
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
                            <select name="manager_id"
                                class="form-control @error('manager_id') is-invalid @enderror SlectBox">

                                @foreach ($manager as $managers)
                                <option value=" {{ $managers->id }}"> {{ $managers->name }} </option>
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
                            <input type="number" min="1" name="numberoffloor" max="20"
                                class="form-control @error('numberoffloor') is-invalid @enderror"
                                placeholder="Enter Number of floor">

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
                            <input type="number" min="4" name="numberofroomsinonefloor" max="10"
                                class="form-control @error('numberofroomsinonefloor') is-invalid @enderror"
                                placeholder="Enter Number of rooms">

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
                            <input type="number" min="1" name="stars" max="5"
                                class="form-control @error('stars') is-invalid @enderror"
                                placeholder="Enter Number of stars">

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
                            <input type="text" name="salaryAtNight"
                                class="form-control  @error('salaryAtNight') is-invalid @enderror"
                                placeholder="Enter salary">

                            @error('salaryAtNight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    {{-- <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Image Of Hotel:</label>
                        <div class="col-lg-4 dropzone" id="dropzone">
                            <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror"
                                placeholder="Add Image" multiple>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> --}}


                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Description:</label>
                        <div class="col-lg-4">
                            <textarea style="resize: none" name="description" class="form-control" id="" cols="30"
                                rows="10" placeholder="Write Here (Optional)..."></textarea>
                        </div>
                    </div>

                </div>
            </div>



        </form>


        {{-- <form method="post" action="{{ route('storeImage') }}" enctype="multipart/form-data" id="dropzone">
            @csrf
            <div class="form-group">
                <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                    <span>Upload file</span>
                </div>
                <div class="dropzone-previews"></div>
            </div>
        </form> --}}
        <form method="post" action="{{ route('storeImage' , ['hotel' => $hotel]) }}" enctype="multipart/form-data" class="dropzone" id="myDropzone">
            @csrf
            <div class="form-group">
                <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                    <span>Upload Images</span>
                </div>
                <div class="dropzone-previews"></div>
            </div> 
            <input type="text" value="{{ $hotel->id+1 }}" name="hotelId">
        </form>





        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-success" id="upload" value="Add"
                            style="display: inline-block; background-color: #fa2c27; border: 0;" class="add_button"
                            onclick="submitform()">Add</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </div>





        {{-- <div class="form-group row">
            <label class="col-lg-2 col-form-label" style="margin-left: 20px">Image Of Hotel:</label>
            <div class="col-lg-8">
                <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror"
                    placeholder="Add Image">

                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <form method="post" name="file" action="#" enctype="multipart/form-data" class="dropzone kt-form"
                    id="dropzone">
                    @csrf
                </form>


            </div>
        </div> --}}






        <!--end::Form-->
    </div>

    <!--end::Portlet-->


</div>






<!-- end:: Content -->

@endsection








@section('scripts')


{{-- <script>
    $(document).ready(function() {
            $('select[name="country_id"]').on('change', function() {
                var countryId = $(this).val();
                if (countryId) {
                    $.ajax({
                        
                        url: "{{ URL('addHotel') }}/" + countryId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="city_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="city_id"]').append('<option value="' +
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

{{-- <script type="text/javascript">
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#country').on('change', function () {
            var $city = $('city');
            var idCountry = this.value;
            $("#city").html('');
            $.ajax({
                url: "{{ route('getCity') }}",
                type: "POST",
                data: {
                    country_id: $(this).val(),
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(result, function (id, value) {
                        $("#city").append('<option value="' + id + '">' + value + '</option>');
                    });
                    
                }
            });
        });
    });    
</script> --}}





{{-- <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script> --}}


<script>
    submitform = function(){
    document.getElementById("myDropzone").submit();
    document.getElementById("demoform").submit();
}
</script>




{{-- <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script> --}}
{{-- 
<script type="text/javascript">
    // var baseUrl = "{{ url('/') }}";
    Dropzone.autoDiscover = false;
    jQuery(document).ready(function(){



       var myDropzone = new Dropzone("#myDropzone", {
           url: "{{action('HotelImageAdminController@store')}}",
           maxFilesize: 2, // MB
               maxFiles: 1,
               addRemoveLinks: true,
           autoProcessQueue:false,
        //    params: {
        //       _token: "{{csrf_token()}}"
        //     },

       });

         myDropzone.on("success", function(file,resp){
           if(resp=="success"){
             alert("Image uploaded successfully");
           }
           else {
             alert("Faild to upload image! Try again");
           }
         });
         
        jQuery("button#upload").click(function(){
          myDropzone.processQueue();
        });
    });
</script> --}}



{{-- <script>
    Dropzone.autoDiscover = false;
    Dropzone.options.myDropzone = false;	
    let token = $('meta[name="csrf-token"]').attr('content');
    $(function() {
    var myDropzone = new Dropzone("div#dropzoneDragArea", { 
        paramName: "file",
        url: "{{ url('/storeimgae') }}",
        previewsContainer: 'div.dropzone-previews',
        addRemoveLinks: true,
        autoProcessQueue: false,
        uploadMultiple: false,
        parallelUploads: 1,
        maxFiles: 5,
        acceptedFiles: 'image/png,jpeg,jpg',
        params: {
            _token: token
        },
         // The setting up of the dropzone
        init: function() {
            var myDropzone = this;
            //form submission code goes here
            $("form[name='demoform']").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                // event.preventDefault();
                URL = $("#demoform").attr('action');
                formData = $('#demoform').serialize();
                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result){
                        if(result.status == "success"){
                            // fetch the useid 
                            var userid = result.user_id;
                            $("#userid").val(userid); // inseting userid into hidden input field
                            //process the queue
                            myDropzone.processQueue();
                        }else{
                            console.log("error");
                        }
                    }
                });
            });
            //Gets triggered when we submit the image.
            this.on('sending', function(file, xhr, formData){
            //fetch the user id from hidden input field and send that userid with our image
              let userid = document.getElementById('userid').value;
               formData.append('userid', userid);
            });
            
            this.on("success", function (file, response) {
                console.log("hhdfjgsdhfgsjdgfj");
                //reset the form
                // $('#demoform')[0].reset();
                //reset dropzone
                // $('.dropzone-previews').empty();
            });
            this.on("queuecomplete", function () {
            
            });
            
            // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
            // of the sending event because uploadMultiple is set to true.
            this.on("sendingmultiple", function() {
              // Gets triggered when the form is actually being sent.
              // Hide the success button or the complete form.
            });
            
            this.on("successmultiple", function(files, response) {
              // Gets triggered when the files have successfully been sent.
              // Redirect user or notify of success.
            });
            
            this.on("errormultiple", function(files, response) {
              // Gets triggered when there was an error sending the files.
              // Maybe show form again, and notify user of error
            });
        }
        });
    }); 
</script> --}}



{{-- <script>
    $(document).ready(function () {
    Dropzone.autoDiscover = false;
    $("#myDropzone").dropzone({
        url: "hn_SimpeFileUploader.ashx",
        addRemoveLinks: true,
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        }
    });
});
</script> --}}





<script>
    $('#myDropzone').dropzone({
        maxFilesize:2,
        acceptedFiles: 'image/*',
        // acceptedFiles: '.png , .jpg , .jpeg',
        addRemoveLinks: true,
        dictRemoveFile: "Remove image",
        // autoProcessQueue: false,
        // uploadMultiple: false,
        // parallelUploads: 1,
        maxFiles: 5,
    });
     
</script>



{{-- <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

@endsection