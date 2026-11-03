# 🤖 AI Usage Log - Pertemuan 10 (Milestone 10)

## 📝 Ringkasan Penggunaan AI

| No | Tujuan / Prompt yang Diberikan | Saran / Solusi dari AI | Tindakan Saya | Alasan / Pembelajaran |
|----|--------------------------------|------------------------|---------------|------------------------|
| 1 | Cara membuat database dan menghubungkan Laravel ke MySQL | Memberikan langkah membuat DB di HeidiSQL dan konfigurasi `.env` (`DB_CONNECTION=mysql`, `DB_DATABASE=kursusku`). | **Diterima** | Saya jadi paham bahwa Laravel default-nya SQLite, dan harus diubah manual di `.env` agar terhubung ke MySQL Laragon. |
| 2 | Membuat struktur tabel `courses` dan Model | Memberikan perintah `php artisan make:model Course -m` dan kode Blueprint untuk kolom `code`, `name`, `fee`, `quota`, `start_date`, `status`. | **Diterima** | Saya belajar cara mendefinisikan tipe data di migration dan pentingnya `$fillable` serta `casts` di Model untuk keamanan dan format data. |
| 3 | Membuat logika Controller dan Route | Memberikan perintah `make:controller --resource` dan kode untuk method `index`, `create`, dan `store` lengkap dengan validasi. | **Diterima** | Saya memahami konsep RESTful resource route dan bagaimana `$request->validate()` otomatis menangani error dan redirect. |
| 4 | Membuat tampilan (View) Form dan Daftar | Memberikan kode HTML/Blade untuk `index.blade.php` dan `create.blade.php` menggunakan helper `@csrf`, `old()`, dan `@error`. | **Diterima & Dimodifikasi** | Saya belajar bagaimana Blade menjembatani data dari Controller ke HTML. Saya juga memodifikasi CSS-nya agar tampilan lebih modern (dark mode) sesuai referensi. |
| 5 | Troubleshooting: Error "View [courses.create] not found" | Menjelaskan bahwa file harus bernama persis `create.blade.php` (huruf kecil semua) dan berada di folder `resources/views/courses/`. | **Diterima** | Saya jadi lebih teliti terhadap konvensi penamaan file dan struktur folder di Laravel. |
| 6 | Menguji validasi data duplikat | Menjelaskan bahwa rule `unique:courses,code` akan menolak input jika kode sudah ada, dan menyarankan cara memicu error tersebut untuk bukti screenshot. | **Diterima** | Saya berhasil menghasilkan bukti screenshot `05-validation-error.png` yang menunjukkan sistem validasi berjalan dengan benar. |

---

## 💡 Refleksi Pembelajaran

1. **Pemahaman MVC**: Saya sekarang benar-benar memahami alur data: **View** (Form) → **Route** → **Controller** (Validasi) → **Model** → **Database** (MySQL) → Kembali ke **View** (Tabel).
2. **Validasi Laravel**: Fitur validasi bawaan Laravel sangat membantu. Saya tidak perlu menulis logika `if-else` manual untuk mengecek data kosong atau duplikat, cukup gunakan array rule di Controller.
3. **Pentingnya Dokumentasi**: Proses mengambil screenshot di setiap tahap (Database, Struktur, Form, Hasil, Error) sangat membantu saya memverifikasi bahwa setiap lapisan aplikasi bekerja sesuai harapan.

---
*Dibuat dengan bantuan AI Assistant untuk mempercepat pemahaman konsep dan debugging, namun seluruh kode dieksekusi, diuji, dan dipahami secara mandiri.*