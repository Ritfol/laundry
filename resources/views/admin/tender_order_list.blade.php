@extends('layouts.admin_layout')

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
            </li>
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
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Organization name</th>
                                    <th>Tender Description</th>
                                    <th>Begins</th>
                                    <th>Ends</th>
                                    <th>Confirmation status</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Organization name</th>
                                    <th>Tender Description</th>
                                    <th>Begins</th>
                                    <th>Ends</th>
                                    <th>Confirmation status</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->tender->name }}</td>
                                    <td>{{ $order->order_description }}</td>
                                    <td>{{ $order->begin }}</td>
                                    <td>{{ $order->end }}</td>
                                    <td>@if($order->confirmed) <span class="alert alert-success">Confirmed</span>
                                        <a href="{{ route('update_confirm_tender_order', ['id' => $order->id]) }}" role="button" class="btn btn-outline-danger">Unconfirm</a>
                                        @else <span class="alert alert-danger">Pending</span>
                                            <a href="{{ route('update_confirm_tender_order' , ['id' => $order->id]) }}" role="button" class="btn btn-outline-success">Confirm</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted"></div>
                </div>


            </div>
        </div>
    </div>

@endsection