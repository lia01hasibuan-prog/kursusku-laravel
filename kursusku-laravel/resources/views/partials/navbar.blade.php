{{-- Header Atas --}}
<div style="background-color: #0f766e; color: white; padding: 20px 0; text-align: center;">
    <h1 class="mb-1 fw-bold" style="margin:0;">KursusKu</h1>
    <p class="mb-0" style="opacity: 0.9;">Belajar Teknologi, Bangun Masa Depan</p>
</div>

{{-- Navbar Menu Bawah --}}
<nav class="navbar navbar-expand-lg" style="background-color: #134e4a;">
    <div class="container justify-content-center">
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#keunggulan">Keunggulan</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#katalog">Katalog</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#cara-daftar">Cara Daftar</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#media">Media</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="{{ route('enrollments.create') }}">Daftar Kursus</a></li>
            </ul>
        </div>
    </div>
</nav>