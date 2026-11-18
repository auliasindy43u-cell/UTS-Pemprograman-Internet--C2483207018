# Sistem Analisis Keuangan UMKM

### Identitas Mahasiswa
Nama : Sindy Aulia
NIM  : C2483207018
Kelas: PTI5
Mata Kuliah: Pemprograman Internet 

## 1. Deskripsi Proyek

Sistem Analisis Keuangan UMKM merupakan aplikasi berbasis web yang dibuat untuk membantu pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) dalam mengelola serta menganalisis transaksi keuangan. Aplikasi ini dapat menampilkan data pemasukan, pengeluaran, keuntungan, kategori pengeluaran, serta laporan keuangan berdasarkan periode tertentu.

Aplikasi ini dikembangkan menggunakan framework Laravel dengan bahasa pemrograman PHP. Sistem dirancang agar pengguna dapat melihat informasi keuangan secara lebih terstruktur, mudah dipahami, dan membantu dalam pengambilan keputusan usaha.

## 2. Latar Belakang

Dalam menjalankan usaha, pencatatan keuangan merupakan salah satu hal penting yang harus dilakukan. Namun, masih banyak pelaku UMKM yang melakukan pencatatan secara manual sehingga kesulitan mengetahui jumlah pemasukan, pengeluaran, keuntungan, serta kategori pengeluaran terbesar.

Oleh karena itu, dibuatlah Sistem Analisis Keuangan UMKM yang dapat membantu mengolah data transaksi dan menyajikan informasi keuangan secara lebih sistematis melalui halaman dashboard, laporan, dan analisis keuangan.

## 3. Tujuan Aplikasi

- Mempermudah pencatatan dan pengelolaan transaksi keuangan UMKM.
- Mengetahui total pemasukan dan pengeluaran.
- Menghitung keuntungan atau kerugian usaha.
- Mengetahui kategori pengeluaran terbesar.
- Menampilkan laporan keuangan berdasarkan periode.
- Membantu pemilik usaha dalam memahami kondisi keuangan.

## 4. Fitur Aplikasi

### A. Dashboard

Menampilkan ringkasan kondisi keuangan usaha, meliputi:
- Total pemasukan.
- Total pengeluaran.
- Total keuntungan.
- Ringkasan kategori pengeluaran.
- Kategori pengeluaran terbesar.
- Daftar transaksi.

### B. Daftar Transaksi

Menampilkan seluruh data transaksi pemasukan dan pengeluaran, meliputi tanggal, nama transaksi, kategori, jenis transaksi, dan nominal.

### C. Detail Transaksi

Menampilkan informasi lengkap dari transaksi yang dipilih, seperti nama transaksi, tanggal, kategori, jenis transaksi, dan nominal.

### D. Kategori Pengeluaran

Menampilkan transaksi berdasarkan kategori pengeluaran, seperti:
- Bahan Baku.
- Operasional.
- Kemasan.
- Transportasi.

### E. Laporan Laba Rugi

Menampilkan ringkasan keuangan yang digunakan untuk mengetahui total pemasukan, total pengeluaran, serta keuntungan atau kerugian usaha.

### F. Analisis Keuangan

Menampilkan hasil analisis transaksi keuangan, termasuk perbandingan pemasukan dan pengeluaran, persentase kategori pengeluaran, serta kategori pengeluaran terbesar.

### G. Laporan Berdasarkan Periode

Menampilkan transaksi berdasarkan bulan tertentu, yaitu September dan Oktober 2026.

---

## 5. Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| PHP 8.2 | Bahasa pemrograman backend |
| Laravel 12 | Framework pengembangan aplikasi web |
| HTML | Membuat struktur halaman web |
| CSS | Mengatur tampilan dan desain aplikasi |
| XAMPP | Lingkungan server lokal |
| Composer | Mengelola dependensi PHP |
| NetBeans | Editor untuk pengembangan program |

---

## 6. Screenshot Aplikasi

### 6.1 Dashboard

Dashboard merupakan halaman utama yang menampilkan ringkasan pemasukan, pengeluaran, keuntungan, dan informasi transaksi keuangan UMKM.

![Dashboard](screenshots/dashboard.png)

### 6.2 Daftar Transaksi

Halaman daftar transaksi menampilkan data pemasukan dan pengeluaran yang telah dicatat dalam sistem.

![Daftar Transaksi](screenshots/daftar_transaksi.png)

### 6.3 Detail Transaksi

Halaman detail transaksi menampilkan informasi secara lengkap mengenai transaksi yang dipilih.

![Detail Transaksi](screenshots/detail_transaksi.png)

### 6.4 Kategori Operasional

Menampilkan data transaksi pengeluaran yang termasuk dalam kategori operasional.

![Kategori Operasional](screenshots/kategori_operasional.png)

### 6.5 Kategori Bahan Baku

Menampilkan data pengeluaran yang digunakan untuk membeli bahan baku usaha.

![Kategori Bahan Baku](screenshots/kategori_bahan_baku.png)

### 6.6 Periode September 2026

Menampilkan transaksi keuangan yang tercatat pada periode September 2026.

![Periode September](screenshots/periode_september.png)

### 6.7 Periode Oktober 2026

Menampilkan transaksi keuangan yang tercatat pada periode Oktober 2026.

![Periode Oktober](screenshots/periode_oktober.png)

### 6.8 Laporan Laba Rugi

Menampilkan hasil perhitungan pemasukan, pengeluaran, dan keuntungan usaha.

![Laporan Laba Rugi](screenshots/laporan_laba_rugi.png)

### 6.9 Analisis Keuangan

Menampilkan hasil analisis kondisi keuangan usaha berdasarkan data transaksi.

![Analisis Keuangan](screenshots/analisis_keuangan.png)

---

## 7. Contoh Hasil Analisis Keuangan

Berdasarkan data transaksi yang terdapat dalam aplikasi, diperoleh hasil sebagai berikut:

| Keterangan | Jumlah |
|---|---:|
| Total Pemasukan | Rp2.925.000 |
| Total Pengeluaran | Rp650.000 |
| Total Keuntungan | Rp2.275.000 |

### Rincian Pengeluaran Berdasarkan Kategori

| Kategori | Jumlah |
|---|---:|
| Bahan Baku | Rp195.000 |
| Operasional | Rp255.000 |
| Kemasan | Rp110.000 |
| Transportasi | Rp90.000 |

Berdasarkan hasil analisis tersebut, kategori Operasional merupakan kategori pengeluaran terbesar, yaitu sebesar Rp255.000.

Keuntungan diperoleh dari hasil pengurangan total pemasukan dengan total pengeluaran.

**Rumus:**

Keuntungan = Total Pemasukan − Total Pengeluaran

Rp2.925.000 − Rp650.000 = Rp2.275.000

---

## 8. Cara Instalasi dan Menjalankan Aplikasi

### Persyaratan

- PHP versi 8.2 atau lebih tinggi.
- Composer.
- Laravel.
- XAMPP.
- Git.
- Web browser.

### Langkah Instalasi

1. Clone repository GitHub:

```bash
git clone https://github.com/USERNAME/sistem-keuangan-umkm.git
```

2. Masuk ke folder proyek:

```bash
cd sistem-keuangan-umkm
```

3. Instal dependensi Laravel:

```bash
composer install
```

4. Salin file konfigurasi:

```bash
copy .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Jalankan aplikasi:

```bash
php artisan serve
```

7. Buka browser dan akses:

```text
http://127.0.0.1:8000
```

---

## 9. Struktur Folder

```text
sistem-keuangan-umkm/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── KeuanganController.php
│
├── resources/
│   └── views/
│       ├── beranda.blade.php
│       ├── transaksi.blade.php
│       ├── detail.blade.php
│       ├── kategori.blade.php
│       ├── periode.blade.php
│       ├── laporan.blade.php
│       └── analisis.blade.php
│
├── routes/
│   └── web.php
│
├── screenshots/
│   ├── dashboard.png
│   ├── daftar_transaksi.png
│   ├── detail_transaksi.png
│   ├── kategori_operasional.png
│   ├── kategori_bahan_baku.png
│   ├── periode_september.png
│   ├── periode_oktober.png
│   ├── laporan_laba_rugi.png
│   └── analisis_keuangan.png
│
├── README.md
└── ...
```

---

## 10. Kesimpulan

Sistem Analisis Keuangan UMKM merupakan aplikasi yang dibuat untuk membantu proses pengelolaan dan analisis keuangan usaha. Melalui fitur dashboard, transaksi, kategori, laporan laba rugi, dan analisis keuangan, pengguna dapat mengetahui kondisi keuangan usaha secara lebih mudah.

Pengembangan aplikasi ini juga menjadi sarana pembelajaran dalam menerapkan pemrograman web menggunakan PHP dan framework Laravel, mulai dari pembuatan controller, routing, pengolahan data, hingga menampilkan informasi pada halaman web.



