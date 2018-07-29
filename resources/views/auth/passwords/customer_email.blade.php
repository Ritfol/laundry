@extends('layouts.login_layout')

@section('content')

    <body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Send password request link</div>
            <div class="card-body">
                <form action="{{ route('customer_password_email') }}" method="post">
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
                    <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
                </form>
            </div>
        </div>
    </div>



@endsection