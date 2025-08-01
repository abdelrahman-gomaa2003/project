@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Doctors</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('doctors.create') }}" class="btn btn-success mb-3">Add Doctor</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Department</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->department->name ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

