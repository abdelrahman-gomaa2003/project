@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>

        <form method="POST" action="{{ route('courses.update', $course) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
            </div>
            <div class="mb-3">
                <label>Code</label>
                <input type="text" name="code" class="form-control" value="{{ $course->code }}" required>
            </div>
            <div class="mb-3">
                <label>Hours</label>
                <input type="number" name="hours" class="form-control" value="{{ $course->hours }}" required>
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
