@extends('layouts.customer_layout')

@section('content')

    <div class="container-fluid">
        <strong>Welcome {{ $customer->name }}</strong>
        <br><br><br>
          <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Add new subscription</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('customer_toOrder') }}">
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
              <div class="mr-5">View past subscriptions</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('customer_orders') }}">
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
                As a Quarters Laundry client, you are able to add new subscription for our monthly services. Upon submiting your order,
                your request will be reviewed, then confirmed. Quarters Laundry personnel will contact you the let you know you are subscibed 
                for the current period of one month
            </p><br>
            <p>
                Please note that the pickup days will be <b>WEDNESDAYS</b> and <b>SATURDAYS</b> only. With delivery days being <b>MONDAYS</b> and <b>FRIDAYS</b>.
            </p><br>
            <p>
                As a Quarters member client, you will be able to view past subscriptions, as well as check when the current subscription
                starts and ends.
            </p>
            </div>
            <div class="col-md-2"></div>
        
        </div>
 <!--//--->
    </div>

@endsection