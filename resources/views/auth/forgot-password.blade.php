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
                    <h5 class="card-title">Reset Password</h5>
                </div>
                <div class="card-body">

                    <form action="{{ url('forgot-password') }}" method="POST">
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
                            <button type="submit" class="btn btn-success float-right"> Send Code </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection