@extends('layouts.customer_layout')

@section('content')

    <div class="container-fluid">
        <strong>Welcome {{ $customer->name }}</strong>
    </div>

@endsection