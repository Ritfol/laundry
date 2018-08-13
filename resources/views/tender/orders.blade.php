@extends('layouts.tender_layout')

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          
            <li class="breadcrumb-item active">Orders</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i>List of all your past orders</div>
                    <div class="card-body">
                        <div class="table-responsive">

                            @if( $orders->isEmpty())
                                You don't have any orders
                            @else

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Location Description</th>
                                        <th>Order description</th>
                                        <th>Begins</th>
                                        <th>Ends</th>
                                        <th>Confirmation</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>

                                        <th>City</th>
                                        <th>Location Description</th>
                                        <th>Order description</th>
                                        <th>Begins</th>
                                        <th>Ends</th>
                                        <th>Confirmation</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach( $orders as $order )
                                        <tr>
                                            <td>{{ Auth::guard('tender')->user()->city }}</td>
                                            <td>{{ Auth::guard('tender')->user()->location_description }}</td>
                                            <td>{{ $order->order_description }}</td>
                                            <td>{{ $order->begin }}</td>
                                            <td>{{ $order->end }}</td>
                                            <td>@if($order->confirmed) <span class="alert alert-success">Confirmed</span>
                                                @else <span class="alert alert-danger">Pending</span> @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted"></div>
                </div>

                @endif


            </div>
        </div>
    </div>

@endsection