@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            
            {{-- Teks di Kiri --}}
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="fw-bold mb-3">Selamat Datang di KursusKu</h2>
                <p class="text-muted mb-4" style="font-size: 1.1rem;">
                    Platform belajar teknologi untuk mahasiswa yang ingin 
                    meningkatkan kemampuan pemrograman web.
                </p>
                
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#katalog" class="btn btn-teal btn-lg">Lihat Kursus</a>
                    <a href="#estimasi" class="btn btn-teal btn-lg">Lihat Estimasi Biaya</a>
                    <a href="{{ route('enrollments.create') }}" class="btn btn-teal btn-lg">Daftar Kursus</a>
                </div>
            </div>
            
            {{-- Gambar di Kanan --}}
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600" 
                     alt="Belajar Coding" 
                     class="img-fluid rounded shadow-lg">
            </div>
            
        </div>
    </div>
</section>

{{-- Section Keunggulan --}}
<section id="keunggulan" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Mengapa Memilih KursusKu?</h2>
        
        <div class="row g-4">
            
            {{-- Card 1 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-bookmark-check fs-1 text-teal"></i>
                        </div>
                        <h5 class="card-title fw-bold">Materi Terarah</h5>
                        <p class="card-text text-muted">
                            Kurikulum disusun sistematis dari dasar hingga mahir.
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- Card 2 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-code-slash fs-1 text-teal"></i>
                        </div>
                        <h5 class="card-title fw-bold">Belajar dengan Proyek</h5>
                        <p class="card-text text-muted">
                            Langsung praktik membuat proyek nyata, bukan hanya teori.
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- Card 3 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-people fs-1 text-teal"></i>
                        </div>
                        <h5 class="card-title fw-bold">Pendampingan Praktik</h5>
                        <p class="card-text text-muted">
                            Mentor siap membantu kamu selama proses belajar.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection