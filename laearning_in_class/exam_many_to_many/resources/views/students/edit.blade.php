@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}">
        </div>

        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}">
        </div>

        <div class="mb-3">
            <label>Subjects</label><br>
            @foreach($subjects as $subject)
                <label class="me-3">
                    <input type="checkbox" name="subject_ids[]" value="{{ $subject->id }}"
                        {{ in_array($subject->id, $studentSubjects) ? 'checked' : '' }}>
                    {{ $subject->name }}
                </label>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
