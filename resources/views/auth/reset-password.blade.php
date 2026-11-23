@extends('layouts.fo')

@section('title', 'Reset Password')

@section('content')

    <h1>Reset Password</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input readonly type="email"  value="{{request()->email}}" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
            <p>Invalid email address</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <p>Invalid password</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <p>Invalid password</p>
        @enderror
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>

@endsection
