@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header text-white bg-primary">
                    <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">

                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Please enter the email" value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Please enter the password" required>
                            </div>
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                            <label class="form-check-label" >Remember Me</label>
                            <button type="submit" class="btn btn-success float-right"> Login </button>
                        </div>

                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-success float-right"> Login </button>
                        </div> -->
                    </form>
                </div>
            </div>
            <a href="{{ url('forgot-password') }}"> Forgot your password ? </a>
        </div>
    </div>
</div>
@endsection