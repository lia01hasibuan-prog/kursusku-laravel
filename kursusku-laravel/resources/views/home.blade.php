<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $siteName }} - Laravel MVC</title>
    
    <!-- CSS DITULIS LANGSUNG DI SINI AGAR PASTI JALAN -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background-color: #f5f7f6; color: #17312b; }
        
        /* Header & Nav */
        header { background-color: #0f766e; color: white; padding: 15px 6%; display: flex; justify-content: space-between; align-items: center; }
        .logo { display: flex; align-items: center; gap: 10px; }
        .logo-icon { background: white; color: #0f766e; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center; border-radius: 8px; font-weight: bold; font-size: 20px; }
        .logo h2 { font-size: 20px; }
        .logo p { font-size: 12px; opacity: 0.9; }
        .milestone { border: 1px solid white; padding: 5px 12px; border-radius: 20px; font-size: 12px; }
        
        nav { background-color: #134e4a; padding: 12px 6%; display: flex; justify-content: space-between; align-items: center; }
        .nav-links { display: flex; gap: 20px; }
        nav a { text-decoration: none; color: white; font-size: 14px; font-weight: bold; }
        .btn-nav { background: white; color: #134e4a; padding: 8px 16px; border-radius: 6px; }

        /* Hero Section */
        .hero { max-width: 1100px; margin: 0 auto; padding: 60px 6%; display: flex; gap: 40px; align-items: center; }
        .hero-text { flex: 1; }
        .subtitle { color: #134e4a; font-size: 12px; font-weight: bold; letter-spacing: 1px; margin-bottom: 10px; }
        .hero h1 { font-size: 38px; line-height: 1.2; margin-bottom: 15px; }
        .description { color: #6b7280; font-size: 15px; line-height: 1.6; margin-bottom: 25px; }
        .buttons { display: flex; gap: 10px; }
        .btn { padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 14px; }
        .btn-primary { background: #0f766e; color: white; }
        .btn-secondary { background: white; color: #17312b; border: 1px solid #a7f3d0; }
        
        .hero-image { flex: 1; }
        .illustration { background: linear-gradient(135deg, #dbe8e4, #f5f7f6); border: 5px solid white; border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        .illustration img { max-width: 100%; border-radius: 12px; margin-top: 15px; }

        /* Alur MVC & Kursus Section */
        .section-title { text-align: center; font-size: 28px; margin: 40px 0 20px 0; color: #17312b; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 6%; }
        
        .alur-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px; margin-bottom: 50px; }
        .course-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; padding-bottom: 60px; }
        
        .card { background: white; padding: 20px; border-radius: 12px; border: 1px solid #dbe8e4; text-align: center; }
        .card strong { display: block; color: #0f766e; margin-bottom: 5px; }
        .card p { font-size: 13px; color: #6b7280; }
        
        .course-card { text-align: left; }
        .course-card small { display: block; color: #0f766e; font-weight: bold; font-size: 12px; margin-bottom: 8px; }
        .course-card h3 { font-size: 18px; margin-bottom: 10px; }

        /* Responsive Mobile */
        @media (max-width: 768px) {
            .hero, .alur-grid, .course-grid { flex-direction: column; grid-template-columns: 1fr; }
            .hero h1 { font-size: 28px; }
            nav, .nav-links { flex-wrap: wrap; gap: 10px; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <div class="logo-icon">K</div>
            <div>
                <h2>{{ $siteName }}</h2>
                <p>Laravel MVC</p>
            </div>
        </div>
        <span class="milestone">Milestone 7</span>
    </header>

    <!-- NAVBAR -->
    <nav>
        <div class="nav-links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="#alur">Alur MVC</a>
            <a href="#kursus">Kursus Pilihan</a>
        </div>
        <a href="#kursus" class="btn-nav">Lihat Program</a>
    </nav>

    <!-- HERO SECTION -->
    <main class="hero">
        <section class="hero-text">
            <p class="subtitle">PERTEMUAN 7 · FRAMEWORK LARAVEL</p>
            <h1>Belajar terstruktur dengan Route, Controller, dan Blade.</h1>
            <p class="description">
                Landing page KursusKu dipindahkan dari PHP biasa ke pola framework Laravel. 
                Request masuk melalui route, data disiapkan controller, lalu Blade merender HTML.
            </p>
            <div class="buttons">
                <a href="#kursus" class="btn btn-primary">Program Belajar Unggulan</a>
                <a href="#alur" class="btn btn-secondary">Lihat Alur MVC</a>
            </div>
        </section>

        <section class="hero-image">
            <div class="illustration">
                <h2>{{ $siteName }}</h2>
                <p>Belajar • Praktik • Bangun Proyek</p>
                <img src="{{ asset('images/hero-kursus.jpg') }}" alt="Hero Kursus">
            </div>
        </section>
    </main>

    <!-- ALUR MVC SECTION -->
    <div class="container">
        <h2 class="section-title" id="alur">Alur MVC</h2>
        <div class="alur-grid">
            <div class="card"><strong>Browser</strong><p>GET /</p></div>
            <div class="card"><strong>Route</strong><p>web.php</p></div>
            <div class="card"><strong>Controller</strong><p>HomeController@index</p></div>
            <div class="card"><strong>Blade View</strong><p>home.blade.php</p></div>
            <div class="card"><strong>Response</strong><p>HTML ke browser</p></div>
        </div>

        <!-- KURSUS PILIHAN SECTION -->
        <h2 class="section-title" id="kursus">Kursus Pilihan</h2>
        <div class="course-grid">
            @foreach($featured as $course)
                <article class="card course-card">
                    <small>{{ $course['code'] }}</small>
                    <h3>{{ $course['name'] }}</h3>
                    <p>{{ $course['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>

</body>
</html>