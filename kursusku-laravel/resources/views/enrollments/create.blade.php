@extends('layouts.app')

@section('title', 'Tambah Enrollment')

@section('content')
<div class="form-card">
    <h2>Tambah Enrollment (Admin)</h2>

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="participant_id" class="form-label">Participant</label>
            <select name="participant_id" id="participant_id" class="form-select" required>
                <option value="">-- Pilih Participant --</option>
                @foreach($participants as $participant)
                    <option value="{{ $participant->id }}"
                        {{ old('participant_id') == $participant->id ? 'selected' : '' }}>
                        {{ $participant->name }} - {{ $participant->email }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                <option value="">-- Pilih Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ old('course_id') == $course->id ? 'selected' : '' }}>
                        {{ $course->code }} - {{ $course->name }}
                    </option>
                @endforeach
            </select>

            @error('course_id')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn-simpan">Simpan Enrollment</button>
    </form>
</div>
@endsection