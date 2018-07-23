@extends('layouts.customer_layout')

@section('content')

        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('customer_dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Subscription</li>
            </ol>
            <div class="row">
                <div class="col-12">


                    <form action="{{ route('customer_order') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <legend>Add new subscription</legend>
                        <div class="form-group">
                            <label for="package">Add package</label>
                            <select name="package" id="input" class="form-control" required="required">
                                {{--<option>--- Please select your package ---</option>--}}
                                <option value="Per Person">Per Person</option>
                                <option value="Per Student">Per Student</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="begin">Desired start date</label>
                            <input type="date" name="begin" id="input" class="form-control" value="{{ old('begin') }}" required="required" title="">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
        </div>

@endsection