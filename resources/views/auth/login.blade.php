@extends('layouts.main')

@section('title', 'Dashboard')

@section('body')
<div class="login-section">
    <div class="container-fluid">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-5 offset-lg-3 col-md-8 offset-md-2 col-10 offset-1">
                <div class="card login-card">
                    <div class="card-body">
                        @if(session()->has('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <h2 class="card-title">Login Now</h2>
                        <form action="{{ route('doLogin') }}" method="post">
                        @csrf
                            <div class="form-group has-validation">
                                <input type="email" class="form-control m-b-30 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ @old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group has-validation">
                                <input type="password" class="form-control m-b-30 @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block m-b-30 submit">Login Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
