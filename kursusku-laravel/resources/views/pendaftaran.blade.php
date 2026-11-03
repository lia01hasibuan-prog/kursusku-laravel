<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kursus - {{ $siteName }}</title>
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

        .form-wrapper { max-width: 600px; margin: 40px auto; padding: 0 20px; }
        .form-card {
            background: white; padding: 30px; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #dbe8e4;
        }
        .form-card h2 { color: #17312b; font-size: 24px; margin-bottom: 10px; }
        .form-card > p { color: #6b7280; font-size: 13px; margin-bottom: 25px; }

        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-weight: bold; font-size: 14px; margin-bottom: 6px; color: #17312b; }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%; padding: 10px 12px; border: 1px solid #d1d5db;
            border-radius: 6px; font-size: 14px; color: #17312b;
            background-color: white;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none; border-color: #0f766e;
        }

        .radio-group, .checkbox-group { display: flex; gap: 15px; flex-wrap: wrap; margin-top: 5px; }
        .radio-group label, .checkbox-group label {
            display: flex; align-items: center; gap: 6px; font-weight: normal; cursor: pointer; font-size: 14px;
        }

        .btn-submit {
            width: 100%; background-color: #0f766e; color: white; padding: 12px;
            border: none; border-radius: 6px; font-size: 16px; font-weight: bold; cursor: pointer;
        }
        .btn-submit:hover { background-color: #115e59; }

        .alert-success {
            background-color: #d1fae5; color: #065f46; padding: 12px; border-radius: 6px;
            margin-bottom: 20px; border: 1px solid #a7f3d0; font-size: 14px;
        }

        /* ✅ Style untuk info kursi */
        .info-kursi {
            display: none;
            margin-top: 15px;
            padding: 12px;
            background: #d1fae5;
            border-radius: 6px;
            color: #065f46;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            border: 1px solid #a7f3d0;
        }

        /* ✅ PAKSA HILANGKAN WARNA BIRU AUTOFILL */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            -webkit-text-fill-color: #17312b !important;
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            box-shadow: 0 0 0px 1000px white inset !important;
            transition: background-color 99999s ease-in-out 0s !important;
            caret-color: #17312b !important;
        }
    </style>
</head>
<body>

    <header class="main-header">
        <h1>{{ $siteName }}</h1>
        <p>{{ $tagline }}</p>
    </header>

    <nav>
        <div class="nav-links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('enrollments.create') }}" style="color: #a7f3d0;">Daftar Kursus</a>
        </div>
    </nav>

    <main class="form-wrapper">
        <div class="form-card">
            <h2>Pendaftaran Kursus</h2>
            <p>Gunakan data pribadi. Field bertanda wajib harus diisi.</p>

            @if(session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('enrollments.store') }}" method="POST" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="hp">Nomor HP</label>
                    <input type="text" id="hp" name="hp" placeholder="Contoh: 081234567890" value="{{ old('hp') }}" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <input type="text" id="prodi" name="prodi" value="{{ old('prodi') }}" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="kursus">Pilih Kursus</label>
                    <select id="kursus" name="kursus" required autocomplete="off">
                        <option value="">-- Pilih Kursus --</option>
                        @foreach($courses as $code => $name)
                            <option value="{{ $code }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="metode">Metode Belajar</label>
                    <select id="metode" name="metode" required autocomplete="off">
                        <option value="">-- Pilih metode --</option>
                        @foreach($methods as $key => $method)
                            <option value="{{ $key }}">{{ $method }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Jenis Peserta</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jenis" value="mahasiswa" required> Mahasiswa</label>
                        <label><input type="radio" name="jenis" value="umum"> Umum</label>
                        <label><input type="radio" name="jenis" value="guru"> Guru</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Minat Tambahan</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="minat[]" value="uiux"> UI/UX</label>
                        <label><input type="checkbox" name="minat[]" value="database"> Database</label>
                        <label><input type="checkbox" name="minat[]" value="backend"> Backend</label>
                        <label><input type="checkbox" name="minat[]" value="frontend"> Frontend</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="catatan">Catatan</label>
                    <textarea id="catatan" name="catatan" rows="4" placeholder="Tuliskan kebutuhan belajar Anda (opsional)" autocomplete="off">{{ old('catatan') }}</textarea>
                </div>

                <button type="submit" class="btn-submit">Daftar Sekarang</button>

                <!-- ✅ Kotak info kursi dipindah ke sini (di bawah tombol submit) -->
                <div id="info-kursi" class="info-kursi"></div>
            </form>
        </div>
    </main>

    <!-- ✅ Script AJAX untuk cek kursi -->
    <script>
        document.getElementById('kursus').addEventListener('change', function() {
            const namaKursus = this.options[this.selectedIndex].text;
            const infoBox = document.getElementById('info-kursi');
            
            if (this.value && namaKursus !== '-- Pilih Kursus --') {
                fetch(`/api/cek-kursi?kursus=${encodeURIComponent(namaKursus)}`)
                    .then(response => response.json())
                    .then(data => {
                        infoBox.style.display = 'block';
                        infoBox.textContent = `${data.sisa} kursi tersisa untuk ${data.kursus}.`;
                    })
                    .catch(error => {
                        infoBox.style.display = 'none';
                    });
            } else {
                infoBox.style.display = 'none';
            }
        });
    </script>

</body>
</html>