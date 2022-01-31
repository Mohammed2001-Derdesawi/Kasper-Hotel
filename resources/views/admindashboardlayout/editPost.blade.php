@extends('layouts.admindashboard')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                <h3 class="kt-portlet__head-title">
                    Edit
                     Posts <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-shield"></i>
                    </span>
                    <!-- column rendering -->
                </h3>
            </div>


        </div>

        <div class="kt-portlet__body">
            <form class="kt-form kt-form--fit kt-form--label-right" action="{{route('admin.posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group row">
                <label>Title</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Title" name="title" value="{{$post->title}}">
                @error('title')
                <div class="row">
                    <div class="col-lg-12">
                       <div class="alert alert-danger mt-1 mb-1" style="text-align: center;margin: 20px;">{{ $message}}</div>
                    </div>
                </div>
               @enderror
            </div>

                <div class="form-group">
                    <label>Body</label>

                 <textarea class="ckeditor form-control" name="text">{{$post->text}}</textarea>
                 @error('text')
                 <div class="row">
                    <div class="col-lg-12">
                       <div class="alert alert-danger mt-1 mb-1" style="text-align: center;margin: 20px;">{{ $message}}</div>
                    </div>
                </div>
                @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <div></div>


                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" onchange="loadfile(event)">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                </div>
                @error('image')
                <div class="row">
                    <div class="col-lg-12">
                       <div class="alert alert-danger mt-1 mb-1" style="text-align: center;margin: 20px;">{{ $message}}</div>
                    </div>
                </div>
               @enderror
                <div class="form-group">
                    <label>Image Preview</label>
                <div class="col-md-12 mb-2">
                    <img id="preview-image" src="{{asset($post->image)}}"
                    alt="preview image" style="max-height: 250px;">
                </div>
                </div>


            <div class="kt-portlet__foot">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <button type="submit" class="btn btn-brand">Edit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>

        </div>


    </div>



</div>




@endsection
@section('scripts')
<script type="text/javascript">
    var loadfile=function (event){
       var imgview=document.getElementById('preview-image');
       imgview.src=URL.createObjectURL(event.target.files[0]);
    }
 </script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();

        $('#image').change(function(e){

let reader = new FileReader();

reader.onload = (e) => {

  $('#preview-image-before-upload').attr('src', e.target.result);
}

reader.readAsDataURL(this.files[0]);

});
    });

</script>

@endsection
