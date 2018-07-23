@extends('layouts.admin_layout')

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">{{ $admin->name }}'s Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">List of all Customers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('customer_list') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">List of all tender customers</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('tender_list') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">List of customer orders</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('customer_order_list') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">List of all tenders</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ route('tender_order_list') }}">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{--List all the active customer subscriptions--}}

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> List of all active customers subscriptions</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Location Description</th>
                                <th>Package</th>
                                <th>Begins</th>
                                <th>Ends</th>
                                <th>Confirmation</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Location Description</th>
                                <th>Package</th>
                                <th>Begins</th>
                                <th>Ends</th>
                                <th>Confirmation</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($customerOrders as $customerOrder)
                                <tr>
                                    <td>{{ $customerOrder->customer->name }}</td>
                                    <td>{{ $customerOrder->customer->phone_number }}</td>
                                    <td>{{ $customerOrder->customer->city }}</td>
                                    <td>{{ $customerOrder->customer->location_description }}</td>
                                    <td>{{ $customerOrder->package }}</td>
                                    <td>{{ $customerOrder->begin }}</td>
                                    <td>{{ $customerOrder->end }}</td>
                                    <td>@if($customerOrder->confirmed) <span class="alert alert-success">Confirmed</span>
                                        <a href="{{ route('update_confirm_customer_order', ['id' => $customerOrder->id]) }}" role="button" class="btn btn-outline-danger">Unconfirm</a>
                                        @else <span class="alert alert-danger">Not Confirmed</span>
                                            <a href="{{ route('update_confirm_customer_order' , ['id' => $customerOrder->id]) }}" role="button" class="btn btn-outline-success">Confirm</a>
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
        <div class="col-md-1"></div>

    </div>

    {{--List all the active tender subscriptions--}}

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> List of all active tender subscriptions</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Location Description</th>
                                <th>Order descriptions</th>
                                <th>Begins</th>
                                <th>Ends</th>
                                <th>Confirmation</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Location Description</th>
                                <th>Order descriptions</th>
                                <th>Begins</th>
                                <th>Ends</th>
                                <th>Confirmation</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($tenderOrders as $tenderOrder)
                                <tr>
                                    <td>{{ $tenderOrder->tender->name }}</td>
                                    <td>{{ $tenderOrder->tender->phone_number }}</td>
                                    <td>{{ $tenderOrder->tender->city }}</td>
                                    <td>{{ $tenderOrder->tender->location_description }}</td>
                                    <td>{{ $tenderOrder->order_description }}</td>
                                    <td>{{ $tenderOrder->begin }}</td>
                                    <td>{{ $tenderOrder->end }}</td>
                                    <td>@if($tenderOrder->confirmed) <span class="alert alert-success">Confirmed</span>
                                        <a href="{{ route('update_confirm_tender_order', ['id' => $tenderOrder->id]) }}" role="button" class="btn btn-outline-danger">Unconfirm</a>
                                        @else <span class="alert alert-danger">Not Confirmed</span>
                                            <a href="{{ route('update_confirm_tender_order' , ['id' => $tenderOrder->id]) }}" role="button" class="btn btn-outline-success">Confirm</a>
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
        <div class="col-md-1"></div>

    </div>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>


@endsection