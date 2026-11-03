<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus - KursusKu</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background-color: #f5f7f6; color: #17312b; }
        .main-header { background-color: #0f766e; color: white; padding: 20px 6%; text-align: center; }
        .main-header h1 { font-size: 28px; margin-bottom: 5px; }
        .main-header p { font-size: 14px; opacity: 0.9; }
        nav { background-color: #134e4a; padding: 12px 6%; }
        .nav-links { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        nav a { text-decoration: none; color: white; font-size: 14px; font-weight: bold; }
        nav a:hover { color: #a7f3d0; }
        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }
        .page-header {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 20px; flex-wrap: wrap; gap: 10px;
        }
        .page-header h2 { color: #17312b; font-size: 24px; }
        .page-header p { color: #6b7280; font-size: 13px; }
        .btn {
            display: inline-block; padding: 10px 20px; border-radius: 6px;
            text-decoration: none; font-weight: bold; font-size: 14px;
        }
        .btn-primary { background-color: #0f766e; color: white; }
        .btn-primary:hover { background-color: #115e59; }
        .alert-success {
            background-color: #d1fae5; color: #065f46; padding: 12px;
            border-radius: 6px; margin-bottom: 20px; border: 1px solid #a7f3d0;
        }
        .card {
            background: white; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #dbe8e4;
            overflow: hidden;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background-color: #0f766e; color: white; font-size: 14px; }
        td { font-size: 14px; }
        tr:nth-child(even) { background-color: #f9fafb; }
        tr:hover { background-color: #f0fdfa; }
        .status-draft { color: #6b7280; font-weight: bold; }
        .status-open { color: #0f766e; font-weight: bold; }
        .status-closed { color: #dc2626; font-weight: bold; }
        .empty { text-align: center; padding: 40px; color: #6b7280; }
    </style>
</head>
<body>
    <header class="main-header">
        <h1>KursusKu</h1>
        <p>Belajar Teknologi, Bangun Masa Depan</p>
    </header>
    <nav>
        <div class="nav-links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('enrollments.create') }}">Daftar Kursus</a>
            <a href="{{ route('courses.index') }}" style="color: #a7f3d0;">Kelola Kursus</a>
        </div>
    </nav>
    <main class="container">
        <div class="page-header">
            <div>
                <h2>Daftar Kursus</h2>
                <p>Data diambil dari MySQL melalui Eloquent.</p>
            </div>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Tambah Kursus</a>
        </div>
        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif
        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Biaya</th>
                        <th>Kuota</th>
                        <th>Mulai</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->name }}</td>
                            <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                            <td>{{ $course->quota }}</td>
                            <td>{{ $course->start_date->format('d/m/Y') }}</td>
                            <td>
                                <span class="status-{{ $course->status }}">
                                    {{ ucfirst($course->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="empty">Belum ada data kursus.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>