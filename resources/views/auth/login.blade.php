@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <div class="text-center mb-3">
            <img src="{{ asset('images/round-icons-HqQ_iP519Yk-unsplash.png') }}" alt="My Image" width="150" height="150">
            <h3 class="mt-2">Login</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <a href="{{ route('register') }}" class="btn btn-outline-secondary w-100 mt-2">Create New Account</a>
        </form>
    </div>
</div>
@endsection
