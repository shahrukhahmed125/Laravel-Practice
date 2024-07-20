@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Register</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
                        {{-- not for register --}}
                        {{-- @if (Session::has('success'))
                        <p class="text-danger">{{ Session::get('success') }}</p>
                    @endif --}}

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name">

                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" id="email"
                                    name="email">

                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif

                            </div>
                            <div class="form-group"> 
                                <select name="role" id="role">
                                    <option value="admin">Admin</option>
                                    <option value="scout">Scout</option>
                                    <option value="player">Player</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                                    name="password">

                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif


                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                                    name="password_confirmation">

                            </div>
                            <div class="row">
                                <div class="col-8 text-left">
                                    <a href="#" class="btn btn-link">Forget Password</a>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
