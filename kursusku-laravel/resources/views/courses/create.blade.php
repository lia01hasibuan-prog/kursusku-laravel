<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kursus - KursusKu</title>
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
        .container { max-width: 760px; margin: 40px auto; padding: 0 20px; }
        .form-card {
            background: white; padding: 30px; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #dbe8e4;
        }
        .form-card h2 { color: #17312b; font-size: 24px; margin-bottom: 20px; }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-weight: bold; font-size: 14px; margin-bottom: 6px; color: #17312b; }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; padding: 10px 12px; border: 1px solid #d1d5db;
            border-radius: 6px; font-size: 14px; color: #17312b;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none; border-color: #0f766e;
        }
        .row { display: flex; gap: 15px; }
        .col { flex: 1; }
        .btn {
            display: inline-block; padding: 10px 20px; border-radius: 6px;
            text-decoration: none; font-weight: bold; font-size: 14px;
            border: none; cursor: pointer;
        }
        .btn-primary { background-color: #0f766e; color: white; }
        .btn-primary:hover { background-color: #115e59; }
        .btn-secondary { background-color: #6b7280; color: white; }
        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        .text-danger { color: #dc2626; font-size: 13px; margin-top: 4px; }
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
        <div class="form-card">
            <h2>Tambah Kursus</h2>
            <form method="POST" action="{{ route('courses.store') }}">
                @csrf
                <div class="form-group">
                    <label for="code">Kode Kursus</label>
                    <input type="text" id="code" name="code" value="{{ old('code') }}" required maxlength="20">
                    @error('code')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama Kursus</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required maxlength="120">
                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="fee">Biaya (Rp)</label>
                        <input type="number" id="fee" name="fee" value="{{ old('fee', 0) }}" min="0" required>
                        @error('fee')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="col form-group">
                        <label for="quota">Kuota</label>
                        <input type="number" id="quota" name="quota" value="{{ old('quota', 20) }}" min="1" max="500" required>
                        @error('quota')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="start_date">Tanggal Mulai</label>
                        <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
                        @error('start_date')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="col form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" required>
                            <option value="draft" @selected(old('status') === 'draft')>Draft</option>
                            <option value="open" @selected(old('status') === 'open')>Open</option>
                            <option value="closed" @selected(old('status') === 'closed')>Closed</option>
                        </select>
                        @error('status')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Simpan Kursus</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>