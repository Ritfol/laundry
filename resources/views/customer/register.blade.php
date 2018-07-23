@extends('layouts.register_layout')

@section('content')
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form action="{{ route('customer_register') }}" method="post">
                    {{ csrf_field() }}

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Full name</label>
                        <input class="form-control" name="name" value="{{ old('name') }}" id="name" type="text" placeholder="Enter your full name" required>
                        {{--@if ($errors->has('name'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender" value="{{ old('gender') }}" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        {{--@if ($errors->has('gender'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('gender') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <label for="phone_number">Phone Number</label>
                        <input class="form-control" value="{{ old('phone_number') }}" name="phone_number" id="phone_number" type="text" placeholder="Enter your phone number" required>
                        {{--@if ($errors->has('phone_number'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('phone_number') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email address</label>
                        <input class="form-control" value="{{ old('email') }}"  name="email" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                        {{--@if ($errors->has('email'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="city">City</label>
                        <input class="form-control" value="{{ old('city') }}" name="city" id="city" type="text" placeholder="Enter your city">
                        {{--@if ($errors->has('city'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('city') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group {{ $errors->has('location_description') ? ' has-error' : '' }}">
                        <label for="location_description">Location Description</label>
                        <textarea name="location_description" id="location_description" class="form-control" rows="2">{{ old('location_description') }}</textarea>
                        {{--@if ($errors->has('location_description'))--}}
                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('location_description') }}</strong>--}}
                            {{--</span>--}}
                        {{--@endif--}}
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password {{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                                {{--@endif--}}
                            </div>
                            <div class="col-md-6">
                                <label for="confirm_password">Confirm password</label>
                                <input class="form-control" name="password_confirmation" id="confirm_password" type="password" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('customer_toLogin') }}">Login Page</a>

                </div>
            </div>
        </div>
    </div>

@endsection