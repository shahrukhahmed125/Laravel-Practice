
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card form-holder">
                <div class="card-body">
                    <h1>Login</h1>

                    @if (Session::has('error'))
                        <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif

                    @if (Session::has('success'))
                        <p class="text-danger">{{ Session::get('success') }}</p>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email"
                                name="email">

                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                                name="password">

                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif


                        </div>
                        <div class="row">
                            <div class="col-8 text-left">
                                <a href="#" class="btn btn-link">Forget Password</a>
                            </div>
                            <div class="col-4 text-right">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection