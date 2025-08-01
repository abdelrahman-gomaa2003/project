@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Course</h1>

        <form method="POST" action="{{ route('courses.store') }}">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Code</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Hours</label>
                <input type="number" name="hours" class="form-control" required>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
