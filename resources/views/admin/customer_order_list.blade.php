@extends('layouts.admin_layout')

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>List of all normal customers orders</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Package</th>
                            <th>Begins</th>
                            <th>Ends</th>
                            <th>Confirmed</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Full Name</th>
                            <th>Package</th>
                            <th>Begins</th>
                            <th>Ends</th>
                            <th>Confirmed</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->customer->name }}</td>
                            <td>{{ $order->package }}</td>
                            <td>{{ $order->begin }}</td>
                            <td>{{ $order->end }}</td>
                            <td>@if($order->confirmed) <span class="alert alert-success">Confirmed</span>
                                    <a href="{{ route('update_confirm_customer_order', ['id' => $order->id]) }}" role="button" class="btn btn-outline-danger">Unconfirm</a>
                                @else <span class="alert alert-danger">Pending</span>
                                    <a href="{{ route('update_confirm_customer_order' , ['id' => $order->id]) }}" role="button" class="btn btn-outline-success">Confirm</a>
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

@endsection