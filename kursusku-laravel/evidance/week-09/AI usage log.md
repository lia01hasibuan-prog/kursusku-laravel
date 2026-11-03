Saya menggunakan AI sebagai **asisten belajar dan debugger** untuk memahami alur MVC Laravel, memperbaiki error sintaks, dan menyesuaikan styling. AI tidak mengerjakan tugas secara otomatis; saya tetap membaca, memahami, dan menyesuaikan setiap kode yang diberikan agar sesuai dengan panduan praktikum.

---

## 📋 Poin Utama Interaksi dengan AI

1. **Memperbaiki Error `Undefined variable`**  
   - *Masalah:* Halaman error karena variabel `$tagline` dipanggil di Blade tapi tidak dikirim dari Controller.  
   - *Solusi AI:* Menjelaskan konsep passing data. Saya belajar menambahkan variabel ke dalam fungsi `compact()` di Controller.

2. **Membangun Form Pendaftaran & Validasi**  
   - *Bantuan AI:* Memberikan contoh struktur form lengkap dengan `@csrf`, fungsi `old()` untuk menjaga nilai input, dan validasi `$request->validate()`.  
   - *Yang Dipelajari:* Perbedaan metode GET (tampil form) dan POST (proses data), serta keamanan dasar form Laravel.

3. **Menambahkan Fitur Cek Sisa Kursi (AJAX)**  
   - *Bantuan AI:* Memandu pembuatan endpoint API sederhana (`/api/cek-kursi`) dan script JavaScript `fetch()` untuk menampilkan sisa kursi tanpa reload halaman.  
   - *Yang Dipelajari:* Dasar komunikasi Asynchronous (AJAX) dan format response JSON di Laravel.

4. **Perbaikan Styling (CSS)**  
   - *Masalah:* Warna input berubah biru saat browser melakukan autofill, dan warna kotak info tidak konsisten.  
   - *Solusi AI:* Memberikan CSS override (`-webkit-box-shadow`) dan atribut `autocomplete="off"` untuk menetralkan warna, serta menyamakan palet warna dengan desain utama (`#0f766e`).
