@extends('layouts.master')

@section('title', 'Add Student')

@section('content')
<div class="container mt-4">
    <h2>Add New Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students.form')
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
