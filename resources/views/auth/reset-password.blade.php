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
                <div class="card mt-5">
                    <div class="card-header text-white bg-primary">
                        <h5 class="card-title">Reset Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        @csrf
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

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Please retype the password" required>
                            </div>
                            @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success float-right"> Update Password </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection