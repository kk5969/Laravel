@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student Details</h2>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Student Form -->
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Student Name -->
        <div class="form-group">
            <label for="student_name">Student Name:</label>
            <input 
                type="text" 
                name="student_name" 
                id="student_name" 
                class="form-control" 
                value="{{ old('student_name', $student->name) }}" 
                required
            >
            @error('student_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Registration Number -->
        <div class="form-group">
            <label for="registration_number">Registration Number:</label>
            <input 
                type="text" 
                name="registration_number" 
                id="registration_number" 
                class="form-control" 
                value="{{ old('registration_number', $student->registration_number) }}" 
                required
            >
            @error('registration_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- INT221 Marks -->
        <div class="form-group">
            <label for="INT221">INT221 Marks:</label>
            <input 
                type="number" 
                name="INT221" 
                id="INT221" 
                class="form-control" 
                value="{{ old('INT221', $student->INT221) }}" 
                min="0" 
                max="100" 
                required
            >
            @error('INT221')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Update Button -->
        <button type="submit" class="btn btn-primary mt-3">Update Student</button>
    </form>
</div>
@endsection
