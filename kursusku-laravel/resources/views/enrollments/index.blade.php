@extends('layouts.app')

@section('title', 'Daftar Enrollment')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Daftar Enrollment</h3>
                    <a href="{{ route('enrollments.create') }}" class="btn btn-success">+ Tambah Enrollment</a>
                </div>

                <div class="card-body">

                    {{-- Pesan sukses setelah simpan --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Pesan error duplikat --}}
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead class="table-success">
                            <tr>
                                <th>#</th>
                                <th>Participant</th>
                                <th>Course</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($enrollments as $e)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $e->participant->name ?? '-' }}</td>
                                    <td>{{ $e->course->code ?? '' }} - {{ $e->course->name ?? '-' }}</td>
                                    <td><span class="badge bg-primary">{{ $e->status }}</span></td>
                                    <td>{{ $e->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Belum ada enrollment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection