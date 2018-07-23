@extends('layouts.tender_layout')

@section('content')

    <div class="container-fluid">
        <strong>Logged in as {{ $tender->name }}</strong>
    </div>

@endsection