# AI Usage Log - Praktikum Pertemuan 7 (KursusKu)

## Context
- **Framework:** Laravel 11+ (PHP 8.3)
- **Environment:** Laragon, VS Code, Windows
- **Tujuan:** Memindahkan landing page prototype PHP ke struktur Laravel (Route -> Controller -> Blade View).

## Goal
Mendapatkan bantuan sebagai tutor dan partner debugging untuk memahami alur MVC, memperbaiki aset yang tidak muncul, dan menyelesaikan error Git, tanpa meminta AI membuatkan seluruh aplikasi secara otomatis.

## Constraints
- Tidak menambahkan database atau CRUD.
- Mempertahankan tampilan layout yang sudah ada.
- Fokus pada pemahaman konsep, bukan sekadar copy-paste.

## Log Interaksi dengan AI

| Waktu | Masalah / Tujuan | Prompt Singkat yang Digunakan | Apa yang Diterima / Ditolak? |
| :--- | :--- | :--- | :--- |
| *[Isi Jam]* | Memahami alur praktikum secara keseluruhan sebelum mulai coding. | "Jelaskan langkah-langkah memindahkan prototype PHP ke Laravel dari PDF ini secara terstruktur." | **Diterima.** Mendapat ringkasan bertahap: Persiapan -> Buat Project -> Route -> Controller -> View -> Migrasi Aset. |
| *[Isi Jam]* | Gambar hero tidak muncul (broken image) di localhost. | "Kenapa fotonya gak muncul di localhost? Sudah dijalankan di 127.0.0.1:8000." | **Diterima.** AI menjelaskan bahwa file harus ada di `public/images/` dan harus dipanggil menggunakan helper `{{ asset('images/...') }}`, bukan path lokal Windows. |
| *[Isi Jam]* | Tampilan halaman berantakan dan section "Alur MVC" tidak muncul. | "Punya teman ku ada alur mvc di bawah aku gak ada. Ini coding home blade ku, coba tambahin." | **Diterima.** AI memberikan kode Blade lengkap dengan section Alur MVC dan menyarankan penggunaan CSS inline sementara untuk memastikan layout tidak berantakan akibat salah penempatan file CSS eksternal. |
| *[Isi Jam]* | Error saat mengecek versi Git dan melakukan commit. | "Kenapa fatal: unrecognized argument: --onine" dan "Apa ini merah2 (Changes not staged for commit)?" | **Diterima.** AI menjelaskan bahwa `--onine` adalah typo (seharusnya `--oneline`), dan pesan merah berarti saya lupa menjalankan `git add .` sebelum `git commit`. |
| *[Isi Jam]* | Bingung perbedaan output Git log saya (`master`) dengan teman (`main`). | "Kenapa dia bisa main aku master? Punya teman ku ada tulisan project aku gak ada." | **Diterima.** AI menjelaskan bahwa `master` dan `main` hanyalah nama default branch yang berbeda tergantung versi Git, fungsinya 100% sama. Pesan commit juga bergantung pada apa yang kita ketik manual. |

## Refleksi Penggunaan AI
AI sangat membantu sebagai "partner debugging" saat saya terjebak pada error kecil (seperti typo perintah Git atau path gambar yang salah). Namun, saya menyadari bahwa saya harus tetap membaca dan memahami kode yang diberikan AI, bukan langsung menyalinnya. Saya memastikan untuk menjalankan `php artisan optimize:clear` dan hard refresh browser setiap kali ada perubahan kode untuk memverifikasi hasilnya secara mandiri.