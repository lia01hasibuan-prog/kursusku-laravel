<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - KursusKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        .header-kursusku {
            background-color: #1a6b5a;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header-kursusku h1 {
            margin: 0;
            font-size: 32px;
            font-weight: bold;
        }
        .header-kursusku p {
            margin: 5px 0 0;
            font-size: 14px;
            opacity: 0.9;
        }

        .nav-menu {
            background-color: #145a4a;
            padding: 12px;
            text-align: center;
        }
        .nav-menu a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-size: 14px;
            font-weight: 500;
        }
        .nav-menu a:hover {
            text-decoration: underline;
        }

        .form-card {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .form-card h2 {
            font-size: 22px;
            font-weight: normal;
            margin-bottom: 25px;
            color: #212529;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .btn-simpan {
            background-color: #1a6b5a;
            color: white;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            margin-top: 10px;
        }
        .btn-simpan:hover {
            background-color: #145a4a;
            color: white;
        }
    </style>
</head>
<body>

    <div class="header-kursusku">
        <h1>KursusKu</h1>
        <p>Belajar Teknologi, Bangun Masa Depan</p>
    </div>

    <div class="nav-menu">
        <a href="{{ route('home') }}">Beranda</a>
        <a href="#">Keunggulan</a>
        <a href="#">Katalog</a>
        <a href="#">Cara Daftar</a>
        <a href="#">Media</a>
        <a href="#">Kontak</a>
        <a href="{{ route('enrollments.create') }}">Pendaftaran Kursus</a>
        <a href="#">KursusKu</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>