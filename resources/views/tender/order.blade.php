@extends('layouts.customer_layout')

@section('content')

    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
               
                <li class="breadcrumb-item active">Add Subscription</li>
            </ol>
            <div class="row">
                <div class="col-12">

                    <form action="{{ route('tender_order') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <legend>Add tender request</legend>

                        <div class="form-group">
                            <label for="order_description">Tender description</label>
                            <textarea name="order_description" value={{old('order_description')}} id="input" class="form-control" rows="3" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="begin">Desired start date</label>
                            <input type="date" name="begin" id="input" class="form-control" value="{{ old('begin') }}" required="required">
                        </div>

                        <div class="form-group">
                            <label for="end">Desired end date</label>
                            <input type="date" name="end" id="input" class="form-control" value="{{ old('end') }}" required="required">
                        </div>

                        <!-- hidden input fields of tender name, city, location will also be passed-->



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>

@endsection