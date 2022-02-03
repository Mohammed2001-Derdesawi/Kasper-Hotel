@extends('layouts.admindashboard')


@section('content')
{{-- {{ dd($hotelCount) }} --}}

<!-- begin:: Content -->

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--Begin::Dashboard 1-->



    <!--Begin::Row-->
    <div class="row">



        <!-- begin best booking -->
        <div class="col-xl-12 col-lg-12 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Best Sellers-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Best Booking
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                        <thead>
                            <tr>
                                <th>Hotel Name</th>
                                <th>Country Name</th>
                                <th>City Name</th>
                                <th>The number of people</th>
                                <th>Distance</th>
                                <th>Cost</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bestBooking as $bestbooking)
                            <tr>
                                <td>{{ $bestbooking->hotel->name }}</td>
                                <td>{{ $bestbooking->hotel->country->name }}</td>
                                <td>{{ $bestbooking->hotel->city->name }}</td>
                                <td>{{ $bestbooking->people }}</td>
                                <td>{{ $bestbooking->distance }}</td>
                                <td>{{ $bestbooking->room_price }}<span style="color: #fa2c27">$</span> </td>
                                <td><a href="{{ route('displayRoom',$bestbooking->id) }}" class="btn btn-outline-primary">Show this Room</a></td>
                            </tr>
                            @endforeach
                    </table>
                    <div class="d-flex align-items-center justify-content-center " style="margin-top: 20px">
                        {!! $bestBooking->links() !!}
                    </div>

                    <!--end: Datatable -->
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>
        <!-- end best booking -->



        <!-- begin latest booking -->
        <div class="col-xl-12 col-lg-12 order-lg-3 order-xl-1">

            <!--begin:: Widgets/Best Sellers-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Latest Booking
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                            <thead>
                                <tr>
                                    <th>Hotel Name</th>
                                    <th>Country Name</th>
                                    <th>City Name</th>
                                    <th>Check in</th>
                                    <th>Check out</th>
                                    <th>Floor</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Cost</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestBookingRoom as $latestRoom)


                                <tr>
                                    <td>{{ $latestRoom->room->hotel->name }}</td>
                                    <td>{{ $latestRoom->room->hotel->country->name }}</td>
                                    <td>{{ $latestRoom->room->hotel->city->name }}</td>
                                    <td>{{ $latestRoom->StartDate }}</td>
                                    <td>{{ $latestRoom->EndDate }}</td>
                                    <td>{{ $latestRoom->room->floor }}</td>
                                    <td>{{ $latestRoom->user->name }}</td>
                                    <td>{{ $latestRoom->user->email }}</td>
                                    <td>{{ $latestRoom->room->room_price }}<span style="color: #fa2c27">$</span></td>
                                    <td><a href="{{ route('displayRoom',$latestRoom->id) }}" class="btn btn-outline-primary">Show this Room</a></td>
                                </tr>
                                @endforeach
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>
        <!-- end latest booking -->






        <!-- begin statistics booking -->
        {{-- <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

            <!--begin:: Widgets/Daily Sales-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header kt-margin-b-30">
                        <h3 class="kt-widget14__title">
                            Daily Sales
                        </h3>
                        <span class="kt-widget14__desc">
                            Check out each collumn for more details
                        </span>
                    </div>
                    <div class="kt-widget14__chart" style="height:120px;">
                        <canvas id="kt_chart_daily_sales"></canvas>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Daily Sales-->
        </div> --}}


            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Number of registered users this month
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Number of hotels in the country
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>



        {{-- <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">

            <!--begin:: Widgets/Revenue Change-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-widget14">
                    <div class="kt-widget14__header">
                        <h3 class="kt-widget14__title">
                            Revenue Change
                        </h3>
                        <span class="kt-widget14__desc">
                            Revenue change breakdown by cities
                        </span>
                    </div>
                    <div class="kt-widget14__content">
                        <div class="kt-widget14__chart">
                            <div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
                        </div>
                        <div class="kt-widget14__legends">
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-success"></span>
                                <span class="kt-widget14__stats">+10% New York</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-warning"></span>
                                <span class="kt-widget14__stats">-7% London</span>
                            </div>
                            <div class="kt-widget14__legend">
                                <span class="kt-widget14__bullet kt-bg-brand"></span>
                                <span class="kt-widget14__stats">+20% California</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Revenue Change-->
        </div> --}}

        <!-- end statistics booking -->








    </div>

    <!--End::Row-->

    <!--End::Dashboard 1-->
</div>

<!-- end:: Content -->



@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
	var _xdata=JSON.parse('{!! json_encode($userCount) !!}');
</script>

<script>
    var _ydataAxis=JSON.parse('{!! json_encode($countries) !!}');
	var _xdataAxis=JSON.parse('{!! json_encode($hotelCount) !!}');
</script>
<script src="{{asset('js/jsChart/chart-bar.js')}}"></script>
<script src="{{asset('js/jsChart/chart-area.js')}}"></script>
@endsection
