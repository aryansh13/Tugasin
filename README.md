# JokiTugas - Layanan Jasa Pengerjaan Tugas Mahasiswa

JokiTugas adalah website landing page untuk layanan jasa pengerjaan tugas mahasiswa yang dibangun dengan Laravel. Website ini dirancang dengan tampilan modern, responsif, dan clean UI untuk memberikan pengalaman pengguna yang optimal.

## Fitur

- **Landing Page Modern**: Tampilan yang menarik dan profesional dengan desain yang responsif.
- **Informasi Layanan**: Menampilkan berbagai jenis jasa yang ditawarkan secara detail.
- **Keunggulan Layanan**: Menjelaskan kenapa memilih layanan kami (pengerjaan tepat waktu, harga terjangkau, revisi gratis).
- **Testimoni Pelanggan**: Menampilkan pengalaman positif dari pelanggan yang telah menggunakan layanan.
- **Daftar Harga**: Harga berdasarkan tingkat kesulitan tugas dengan paket yang berbeda.
- **Formulir Pemesanan**: Form yang terhubung langsung ke WhatsApp admin dengan format pesan otomatis.
- **Dark Mode**: Dukungan tema gelap untuk kenyamanan pengguna saat malam hari, dengan toggle switch dan penyimpanan preferensi.
- **Responsif**: Tampilan optimal di berbagai perangkat (desktop, tablet, mobile).

## Teknologi

- Laravel 10.x
- Bootstrap 5
- HTML5 & CSS3
- JavaScript
- Font Awesome
- Google Fonts
- Local Storage API

## Cara Instalasi

1. Clone repository
```
git clone https://github.com/username/jokitugas.git
cd jokitugas
```

2. Install dependencies
```
composer install
npm install
```

3. Salin file .env
```
cp .env.example .env
```

4. Generate application key
```
php artisan key:generate
```

5. Konfigurasikan database di file .env

6. Jalankan server development
```
php artisan serve
```

7. Buka browser dan akses `http://localhost:8000`

## Kustomisasi

### Mengubah Nomor WhatsApp Admin

Buka file `app/Http/Controllers/WhatsAppController.php` dan ubah nomor WhatsApp pada variabel `$whatsappNumber`.

### Mengubah Layanan yang Ditawarkan

Edit file `resources/views/welcome.blade.php` pada bagian Services Section.

### Mengubah Harga

Edit file `resources/views/welcome.blade.php` pada bagian Pricing Section.

### Menyesuaikan Tema Dark Mode

Edit file `resources/views/layouts/app.blade.php` dan sesuaikan nilai CSS variable dalam selector `[data-bs-theme="dark"]`.

## Kontribusi

Kontribusi selalu diterima. Silahkan fork repository ini, buat branch baru, dan kirimkan pull request.

## Lisensi

Projek ini dilisensikan di bawah [MIT License](LICENSE).
