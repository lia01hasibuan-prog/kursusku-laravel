# AI USAGE LOG – PERTEMUAN 12

Dokumen ini berisi catatan penggunaan AI selama pelaksanaan Praktikum Pemrograman Web III Pertemuan 12 dengan materi Relasi Database pada proyek KursusKu.

| Prompt / Pertanyaan | Saran AI | Dipakai? | Alasan |
|---------------------|----------|----------|--------|
| Bagaimana cara membuat tampilan form enrollment agar sama dengan referensi (ada header dan navbar)? | AI menyarankan membuat file layout induk `layouts/app.blade.php` yang berisi header "KursusKu" dan navbar, lalu menggunakan `@extends('layouts.app')` di file view enrollment. | Ya | Agar tampilan halaman enrollment memiliki header dan navbar yang konsisten dengan halaman lain. |
| Mengapa muncul error 404 saat mengakses `/admin/enrollments/create`? | AI menjelaskan adanya konflik nama route dan menyarankan menggunakan `Route::prefix('admin')` tanpa `->name('admin.')`, lalu menjalankan `php artisan route:clear`. | Ya | Agar URL sesuai dengan referensi dan route dapat terbaca dengan benar oleh Laravel. |
| Bagaimana mengatasi error `View [enrollments.index] not found` setelah berhasil menyimpan data? | AI menyarankan membuat file view baru `resources/views/enrollments/index.blade.php` yang berisi tabel daftar enrollment. | Ya | Karena controller melakukan redirect ke halaman index yang file view-nya belum dibuat. |
| Bagaimana memastikan fitur Cascade Delete berjalan dengan benar? | AI memberikan langkah-langkah pengujian menggunakan Laravel Tinker: membuat data enrollment, menghapus course/participant, lalu memverifikasi enrollment ikut terhapus (output `= 0`). | Ya | Untuk membuktikan bahwa relasi `onDelete('cascade')` berfungsi dan data enrollment ikut terhapus saat data induknya dihapus. |

## Catatan Penting

- AI dimanfaatkan untuk membantu mencari solusi ketika terjadi kesalahan pada proses pengerjaan program.
- Semua saran AI divalidasi terlebih dahulu sebelum diterapkan pada proyek.
- Penggunaan AI mempercepat proses debugging dan membantu memahami konsep relasi database di Laravel.