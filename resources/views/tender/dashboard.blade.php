@extends('layouts.tender_layout')

@section('content')

    <div class="container-fluid">
        <strong>Logged in as {{ $tender->name }}</strong>
         <br><br><br>
          <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Make new tender subscription</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('tender_toOrder') }}">
              <span class="float-left">Go</span>
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
              <div class="mr-5">View past tender subscriptions</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('tender_orders') }}">
              <span class="float-left">Go</span>
              <span class="float-right">
              <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
   
      </div>
              <br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <p>
                Tender clients have accounts so they can keep track of the various tender requests they can make in the future
            </p><br>
            <p>
                You are able to add new tender subscriptions, whereby your qoute will be reviewed, and you will be contacted by
                Quarters personnel, whereby the terms will be discussed, agreed upon..and the service will be rendered upon agreement.
            </p>
            </div>
            <div class="col-md-2"></div>
        
        </div>
    </div>

@endsection