@extends('layouts.admindashboard')
@section('content')

<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label " style="padding:25px 0 0 25px ">

                <h3 class="kt-portlet__head-title">
                      <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon-users-1"></i>
                        Managers
                    </span>
                    <!-- column rendering -->
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" style="padding:10px 0 0 12px">
                        &nbsp;
                        <a href="{{route('admin.managers.create')}}" class="btn btn-default btn-elevate btn-icon-sm btn-add">
                            <i class="la la-plus"></i> Add Manager
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
             <div style="overflow-x: scroll">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>avatar</th>
                            <th>FaceBook</th>
                            <th>Twitter</th>
                            <th>GitHub</th>
                            <th style="width:auto">Actions</th>

                        </tr>
                    </thead>
                    <tbody>



                                   @php
                                       $i=0;
                                   @endphp

                                @foreach ($managers as $manager)
                                @if (auth()->guard('admin')->user()->id==$manager->id)
                                   @php
                                       continue;
                                   @endphp

                                @endif
                                <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$manager->name}}</td>
                                  <td>{{$manager->description}}</td>
                                  <td><img src="{{ asset($manager->image) }}" class="img-responsive" style="width: 60px; height:60px;" alt="{{$manager->image}}"></td>
                                  <td>{{$manager->facebook}}</td>
                                  <td>{{$manager->twitter}}</td>
                                  <td>{{$manager->github}}</td>
                                  <td>
                                    <div class="form-group" style="display: flex; justify-content: center; align-items: center">
                                        <div class="">
                                           <a class="btn btn-primary btn-edit" data-toggle="tooltip" data-placement="top" title="Edit Manager" href="{{route('admin.managers.edit',$manager)}}" style="background-color: #1b1b28; color: aliceblue; border: #1b1b28"> <i class="kt-font-brand flaticon2-edit"></i></a>
                                        </div>
                                        <div class="">
                                           <form action="{{route('admin.managers.remove',$manager->id)}}" method="POST" >
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
             </div>

            <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                {{ $managers->links() }}
            </div>



        </div>


    </div>


</div>



@endsection
@section('scripts')

{{-- <script src="{{ asset('admindashboard/js/pages/crud/datatables/advanced/column-rendering.js')}}" type="text/javascript"></script>
<script src="{{ asset('admindashboard/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js')}}" type="text/javascript"></script> --}}
<script src="{{ asset('admindashboard/js/pages/crud/metronic-datatable/base/html-table.js')}}" type="text/javascript"></script>
<script >
    $(document).ready(function() {
    $('#kt_table_1').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false
    });
    $('[data-toggle="tooltip"]').tooltip();
} );

</script>
@endsection
