<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KursusKu')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Header Atas - Teal */
        .header-top {
            background-color: #0f766e;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .header-top h1 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
        }
        .header-top p {
            margin: 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }
        
        /* Navbar Menu Bawah - Teal Gelap */
        .navbar-menu {
            background-color: #134e4a;
            padding: 0;
        }
        /* INI KUNCINYA: Memastikan menu di tengah */
        .navbar-menu .navbar-nav {
            margin: 0 auto; /* Memaksa ke tengah */
        }
        .navbar-menu .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            padding: 15px 20px;
        }
        .navbar-menu .navbar-nav .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
        }
        
        /* Form Card */
        .form-card {
            background: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            max-width: 700px;
            margin: 40px auto;
        }
        .btn-teal {
            background-color: #0f766e;
            color: white;
            border: none;
        }
        .btn-teal:hover {
            background-color: #115e59;
            color: white;
        }
        .btn-outline-teal {
            color: #0f766e;
            border: 1px solid #0f766e;
        }
        .btn-outline-teal:hover {
            background-color: #f0fdfa;
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Header Atas -->
    <div class="header-top">
        <h1>KursusKu</h1>
        <p>Belajar Teknologi, Bangun Masa Depan</p>
    </div>

    <!-- Navbar Menu Bawah -->
    <nav class="navbar navbar-expand-lg navbar-menu">
        <div class="container">
            <!-- Tombol hamburger untuk mobile -->
            <button class="navbar-toggler mx-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNavbar">
                <!-- PERHATIKAN: class "mx-auto" ditambahkan di sini -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cara-daftar">Cara Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#media">Media</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/enrollments/create') }}">Pendaftaran Kursus</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>