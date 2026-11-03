## 📋 Daftar Test Cases

| No | Skenario Pengujian | Input yang Digunakan | Hasil yang Diharapkan | Hasil Aktual | Status |
|----|--------------------|---------------------|----------------------|--------------|--------|
| 1 | **Simpan data kursus valid** | Kode: `WEB-101`<br>Nama: `Web Dasar`<br>Biaya: `300000`<br>Kuota: `25`<br>Tanggal: `11/11/2026`<br>Status: `Open` | Data berhasil disimpan ke database, redirect ke halaman `/courses`, muncul pesan sukses "Kursus berhasil ditambahkan." | Data tersimpan, redirect berhasil, pesan sukses muncul | ✅ **LULUS** |
| 2 | **Kode kursus kosong** | Kode: *(kosong)*<br>Nama: `Test`<br>Field lain diisi valid | Validasi gagal, muncul pesan error merah "The code field is required." di bawah field Kode | Pesan error "The code field is required." muncul | ✅ **LULUS** |
| 3 | **Kode kursus duplikat** | Kode: `WEB-101` *(sudah ada)*<br>Nama: `Web Dasar Duplikat`<br>Field lain diisi valid | Validasi gagal, muncul pesan error "The code has already been taken." | Pesan error "The code has already been taken." muncul | ✅ **LULUS** |
| 4 | **Nama kursus kosong** | Kode: `TEST-99`<br>Nama: *(kosong)*<br>Field lain diisi valid | Validasi gagal, muncul pesan error "The name field is required." | Pesan error "The name field is required." muncul | ✅ **LULUS** |
| 5 | **Biaya negatif** | Kode: `TEST-98`<br>Nama: `Test Negatif`<br>Biaya: `-50000` | Validasi gagal, muncul pesan error "The fee field must be at least 0." | Pesan error "The fee field must be at least 0." muncul | ✅ **LULUS** |
| 6 | **Kuota bernilai 0** | Kode: `TEST-97`<br>Nama: `Test Kuota 0`<br>Kuota: `0` | Validasi gagal, muncul pesan error "The quota field must be at least 1." | Pesan error "The quota field must be at least 1." muncul | ✅ **LULUS** |
| 7 | **Status tidak valid** | Kode: `TEST-96`<br>Status: `active` *(di-inspect manual)* | Validasi gagal, muncul pesan error "The status field must be one of: draft, open, closed." | Pesan error "The status field must be one of: draft, open, closed." muncul | ✅ **LULUS** |
| 8 | **Halaman daftar tampil ulang** | Akses URL `/courses` dan refresh (F5) beberapa kali | Data kursus tetap tampil di tabel karena diambil dari database MySQL, tidak hilang saat refresh | Data 8 kursus tetap tampil konsisten setelah refresh | ✅ **LULUS** |

✅ Kesimpulan
Semua 8 test case berhasil LULUS dengan baik. Sistem validasi kursusku bekerja sesuai harapan:
Data valid berhasil disimpan ke database MySQL
Data invalid ditolak dengan pesan error yang jelas
Data persisten (tetap ada) karena disimpan di MySQL, bukan di memori sementara