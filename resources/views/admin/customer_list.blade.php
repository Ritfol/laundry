@extends('layouts.admin_layout')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Customer list</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>List of all normal customers</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Location Description</th>
                            <th>Number of subscriptions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Full Name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Location Description</th>
                            <th>Number of subscriptions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach( $customers as $customer)
                        <tr>
                            <td data-toggle="modal" data-target="#profile">{{ $customer->name }}</td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->location_description }}</td>
                            <td>{{ $customer->orders->where('confirmed' , '1')->count() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>

    {{--<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalLabel">Customer details</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >--}}


                        {{--<div class="panel panel-info">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h3 class="panel-title">{{  }}</h3>--}}
                            {{--</div>--}}
                            {{--<div class="panel-body">--}}
                                {{--<div class="row">--}}

                                    {{--<div class=" col-md-9 col-lg-9 ">--}}
                                        {{--<table class="table table-user-information">--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<td>Department:</td>--}}
                                                {{--<td>Programming</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Hire date:</td>--}}
                                                {{--<td>06/23/2013</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Date of Birth</td>--}}
                                                {{--<td>01/24/1988</td>--}}
                                            {{--</tr>--}}

                                            {{--<tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Gender</td>--}}
                                                {{--<td>Female</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Home Address</td>--}}
                                                {{--<td>Kathmandu,Nepal</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<td>Email</td>--}}
                                                {{--<td><a></a></td>--}}
                                            {{--</tr>--}}
                                            {{--<td>Phone Number</td>--}}
                                            {{--<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)--}}
                                            {{--</td>--}}

                                            {{--</tr>--}}

                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
@endsection
