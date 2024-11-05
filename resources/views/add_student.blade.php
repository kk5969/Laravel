@extends('layouts.app')

@section('content')
    <h2>Add New Student</h2>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following errors:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add Student Form -->
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                value="{{ old('name') }}" 
                required
            >
        </div>

        <!-- Registration Number -->
        <div class="mb-3">
            <label for="registration_number" class="form-label">Registration Number:</label>
            <input 
                type="text" 
                name="registration_number" 
                id="registration_number" 
                class="form-control" 
                value="{{ old('registration_number') }}" 
                required
            >
        </div>

        <!-- INT221 Marks -->
        <div class="mb-3">
            <label for="INT221_marks" class="form-label">INT221 Marks:</label>
            <input 
                type="number" 
                name="INT221_marks" 
                id="INT221_marks" 
                class="form-control" 
                value="{{ old('INT221_marks') }}" 
                min="0" 
                max="100" 
                required
            >
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
@endsection
