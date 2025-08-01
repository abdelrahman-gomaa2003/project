@extends('layouts.master')

@section('title', 'Employee Dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Welcome, {{ Auth::user()->name }}!</h3>
            <p class="card-text">You are logged in as an employee.</p>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
@endsection
