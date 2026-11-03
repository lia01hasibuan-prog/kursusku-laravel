<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteName }} - Laravel MVC</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background-color: #f5f7f6; color: #17312b; }

        /* HEADER */
        .main-header { background-color: #0f766e; color: white; padding: 20px 6%; text-align: center; }
        .main-header h1 { font-size: 28px; margin-bottom: 5px; }
        .main-header p { font-size: 14px; opacity: 0.9; }

        /* NAVBAR */
        nav { background-color: #134e4a; padding: 12px 6%; }
        .nav-links { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        nav a { text-decoration: none; color: white; font-size: 14px; font-weight: bold; }
        nav a:hover { color: #a7f3d0; }

        /* HERO */
        .hero { max-width: 1100px; margin: 0 auto; padding: 60px 6%; display: flex; gap: 40px; align-items: center; }
        .hero-text { flex: 1; }
        .hero-text h2 { font-size: 32px; margin-bottom: 15px; color: #17312b; }
        .hero-text p { color: #6b7280; font-size: 15px; line-height: 1.6; margin-bottom: 25px; }
        .hero-image { flex: 1; }
        .hero-image img { width: 100%; border-radius: 12px; }

        /* TOMBOL */
        .hero-buttons { display: flex; gap: 12px; flex-wrap: wrap; }
        .btn { display: inline-block; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: bold; font-size: 14px; background-color: #0f766e; color: white; transition: all 0.3s ease; }
        .btn:hover { background-color: #115e59; transform: translateY(-2px); }

        /* SECTION */
        .section-container { max-width: 1100px; margin: 0 auto; padding: 50px 6%; text-align: center; }
        .section-container h2 { font-size: 28px; margin-bottom: 30px; color: #17312b; }

        /* GRID */
        .grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: left; }
        .card { background: white; padding: 25px; border-radius: 12px; border: 1px solid #dbe8e4; }
        .card h3 { color: #0f766e; margin-bottom: 10px; font-size: 18px; }
        .card p { color: #6b7280; font-size: 14px; line-height: 1.5; }

        /* ALUR MVC */
        .grid-5 { display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px; }
        .alur-card { background: white; padding: 20px 15px; border-radius: 10px; border: 1px solid #dbe8e4; text-align: center; }
        .alur-card strong { display: block; color: #0f766e; font-size: 16px; margin-bottom: 8px; }
        .alur-card p { font-size: 13px; color: #6b7280; }

        /* KARTU KURSUS */
        .course-card small { display: block; color: #0f766e; font-weight: bold; font-size: 12px; margin-bottom: 8px; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero { flex-direction: column; text-align: center; }
            .hero-buttons { justify-content: center; }
            .grid-3, .grid-5 { grid-template-columns: 1fr; }
            .nav-links { gap: 12px; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="main-header">
        <h1>{{ $siteName }}</h1>
        <p>{{ $tagline }}</p>
    </header>

    <!-- NAVBAR -->
    <nav>
        <div class="nav-links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="#alur">Alur MVC</a>
            <a href="#katalog">Kursus Pilihan</a>
            <a href="{{ route('enrollments.create') }}">Daftar Kursus</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <main class="hero">
        <div class="hero-text">
            <h2>Selamat Datang di {{ $siteName }}</h2>
            <p>Platform belajar teknologi untuk mahasiswa yang ingin meningkatkan kemampuan pemrograman web. Pilih kursus, cek ketersediaan kursi, lalu isi formulir pendaftaran.</p>
            <div class="hero-buttons">
                <a href="#katalog" class="btn">Lihat Kursus</a>
                <a href="#alur" class="btn">Pelajari Alur MVC</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Hero Kursus">
        </div>
    </main>

    <!-- SECTION KEUNGGULAN -->
    <section class="section-container" id="keunggulan">
        <h2>Mengapa Memilih {{ $siteName }}?</h2>
        <div class="grid-3">
            <div class="card">
                <h3>Materi Terarah</h3>
                <p>Kurikulum disusun sistematis dari dasar hingga mahir.</p>
            </div>
            <div class="card">
                <h3>Belajar dengan Proyek</h3>
                <p>Langsung praktik membuat proyek nyata, bukan hanya teori.</p>
            </div>
            <div class="card">
                <h3>Pendampingan Praktik</h3>
                <p>Mentor siap membantu kamu selama proses belajar.</p>
            </div>
        </div>
    </section>

    <!-- SECTION ALUR MVC -->
    <section class="section-container" id="alur" style="background-color: #e6f0ef;">
        <h2>Alur MVC</h2>
        <div class="grid-5">
            <div class="alur-card"><strong>Browser</strong><p>GET /</p></div>
            <div class="alur-card"><strong>Route</strong><p>web.php</p></div>
            <div class="alur-card"><strong>Controller</strong><p>HomeController@index</p></div>
            <div class="alur-card"><strong>Blade View</strong><p>home.blade.php</p></div>
            <div class="alur-card"><strong>Response</strong><p>HTML ke browser</p></div>
        </div>
    </section>

    <!-- SECTION KURSUS PILIHAN -->
    <section class="section-container" id="katalog">
        <h2>Kursus Pilihan</h2>
        <div class="grid-3">
            @foreach($featured as $course)
                <article class="card course-card">
                    <small>{{ $course['code'] }}</small>
                    <h3>{{ $course['name'] }}</h3>
                    <p>{{ $course['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

</body>
</html>