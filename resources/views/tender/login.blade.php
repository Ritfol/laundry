@extends('layouts.login_layout')

@section('content')

    <body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Tender user Login</div>
            <div class="card-body">
                <form action="{{ route('tender_login') }}" method="post">
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

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input class="form-control" name="email" value="{{ old('email') }}" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('tender_toRegister') }}">Register an Account</a>
                    <a class="d-block small" href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>



@endsection