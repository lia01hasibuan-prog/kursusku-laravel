@extends('layouts.app')

@section('title', 'Edit Kursus - ' . $course->code)

@section('content')
<div class="form-card">
    <!-- Header yang di tengah -->
    <div class="text-center mb-4">
        <h2 class="mb-0" style="color: #17312b; font-weight: bold;">Edit Kursus</h2>
        <p class="text-muted small">{{ $course->code }} - {{ $course->name }}</p>
    </div>

    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-bold" style="color: #17312b;">Kode Kursus</label>
            <input type="text" name="code" value="{{ old('code', $course->code) }}" 
                   class="form-control @error('code') is-invalid @enderror">
            @error('code') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold" style="color: #17312b;">Nama Kursus</label>
            <input type="text" name="name" value="{{ old('name', $course->name) }}" 
                   class="form-control @error('name') is-invalid @enderror">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold" style="color: #17312b;">Deskripsi</label>
            <textarea name="description" rows="3" 
                      class="form-control @error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold" style="color: #17312b;">Biaya (Rp)</label>
                <input type="number" name="fee" value="{{ old('fee', $course->fee) }}" 
                       class="form-control @error('fee') is-invalid @enderror">
                @error('fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold" style="color: #17312b;">Kuota</label>
                <input type="number" name="quota" value="{{ old('quota', $course->quota) }}" 
                       class="form-control @error('quota') is-invalid @enderror">
                @error('quota') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold" style="color: #17312b;">Tanggal Mulai</label>
                <input type="date" name="start_date" 
                       value="{{ old('start_date', $course->start_date?->format('Y-m-d')) }}" 
                       class="form-control @error('start_date') is-invalid @enderror">
                @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold" style="color: #17312b;">Status</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror">
                    <option value="draft" @selected(old('status', $course->status) === 'draft')>Draft</option>
                    <option value="open" @selected(old('status', $course->status) === 'open')>Open</option>
                    <option value="closed" @selected(old('status', $course->status) === 'closed')>Closed</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <!-- Tombol di tengah -->
        <div class="d-flex justify-content-center gap-2 mt-4">
            <a href="{{ route('courses.show', $course) }}" class="btn btn-outline-teal px-4">Batal</a>
            <button type="submit" class="btn btn-teal px-4">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection