@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Doctor</h1>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
        </div>

        <div class="mb-3">
            <label>Specialization</label>
            <input type="text" name="specialization" class="form-control" value="{{ $doctor->specialization }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection


