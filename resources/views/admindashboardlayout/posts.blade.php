@extends('layouts.admindashboard')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                <h3 class="kt-portlet__head-title">
                     Posts <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-shield"></i>
                    </span>
                    <!-- column rendering -->
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" style="padding:10px 0 0 18px ">
                        &nbsp;
                        <a href="{{route('admin.posts.create')}}" style="margin-bottom: 20px;" class="btn btn-default btn-elevate btn-icon-sm btn-add">
                            <i class="la la-plus"></i> Create Post
                        </a>
                    </div>
                </div>
                @if (Session::has('sucess'))
                 <div class="row">
                     <div class="col-lg-12">
                        <div class="alert alert-success mt-1 mb-1" style="text-align: center;margin: 20px;">{{ Session::get('sucess') }}</div>
                     </div>
                 </div>



                @endif
            </div>

        </div>


        <div class="kt-portlet__body"  style="overflow-x: scroll">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Body</th>
                        <th>Comments</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)
                    @php
                        $i=0;
                    @endphp
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$post->title}}</td>
                         <td>
                            <img id="preview-image" src="{{asset($post->image)}}"
                            alt="preview image" style="max-height: 80px;">
                        </td>
                         <td>{{$post->text}}</td>
                         <td>{{$post->commnets->count()}}</td>


                        <td>
                            <div class="form-group" style="display: flex; justify-content: center; align-items: center">
                                <div class="">
                                   <a class="btn btn-primary btn-edit" data-toggle="tooltip" data-placement="top" title="Edit Manager" href="{{route('admin.posts.edit',$post->id)}}" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28"> <i class="kt-font-brand flaticon2-edit"></i></a>
                                </div>
                                <div class="">
                                   <form action="{{route('admin.posts.remove',$post->id)}}" method="POST" >
                                       @csrf
                                       @method('POST')
                                       <button  data-toggle="tooltip" data-placement="top" title="Delete Manager" onclick="return confirm('Are You sure You want to delete it ?');" class="btn btn-primary btn-remove" type="submit" style="background-color: #fa2c27; color: #fff; border: #fa2c27"><i class="kt-font-brand flaticon2-trash"></i></button>
                                   </form>
                                </div>
                            </div>





                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>


            <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                {{ $posts->links() }}
            </div>
        </div>


    </div>


</div>



@endsection
@section('scripts')
@endsection
