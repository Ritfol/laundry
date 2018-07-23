@extends('layouts.admin_layout')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tender list</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>List of all tender customers</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>City</th>
                            <th>Location Description</th>
                            <th>Number of tenders</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Company Name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>City</th>
                            <th>Location Description</th>
                            <th>Number of tenders</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach( $tenders as $tender)
                        <tr>
                            <td>{{ $tender->name }}</td>
                            <td>{{ $tender->phone_number }}</td>
                            <td>{{ $tender->email }}</td>
                            <td>{{ $tender->service }}</td>
                            <td>{{ $tender->city }}</td>
                            <td>{{ $tender->location_description }}</td>
                            <td>{{ $tender->subscriptions }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted"></div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
@endsection
