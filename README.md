# Sistem Analisis Keuangan UMKM

### Identitas Mahasiswa
Nama : Sindy Aulia
NIM  : C2483207018
Kelas: PTI5
Mata Kuliah: Pemprograman Internet 

## Deskripsi Proyek
Sistem Analisis Keuangan UMKM merupakan aplikasi berbasis web yang dibuat menggunakan Laravel untuk membantu pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) dalam mengelola serta menganalisis kondisi keuangan usaha.

Aplikasi ini dapat menghitung pemasukan, pengeluaran, keuntungan atau kerugian, mengelompokkan pengeluaran berdasarkan kategori, serta menampilkan laporan transaksi berdasarkan periode tertentu.

Proyek ini dibuat sebagai tugas pembelajaran pemrograman web dengan menerapkan konsep MVC (Model, View, Controller), routing, array, perulangan, percabangan, dan pengolahan data.

## Tujuan
- Mempermudah pencatatan transaksi keuangan UMKM.
- Mengetahui total pemasukan dan pengeluaran.
- Menghitung keuntungan atau kerugian usaha.
- Mengetahui kategori pengeluaran terbesar.
- Menampilkan laporan keuangan berdasarkan periode.
- Membantu analisis kondisi keuangan usaha.

## Fitur Aplikasi
1. **Dashboard** – Menampilkan ringkasan keuangan usaha.
2. **Data Transaksi** – Menampilkan daftar transaksi pemasukan dan pengeluaran.
3. **Detail Transaksi** – Menampilkan informasi lengkap transaksi.
4. **Kategori Transaksi** – Menampilkan transaksi berdasarkan kategori.
5. **Laporan Periode** – Menampilkan transaksi berdasarkan bulan.
6. **Laporan Laba Rugi** – Menghitung total pemasukan, pengeluaran, dan keuntungan/kerugian.
7. **Analisis Keuangan** – Mengelompokkan pengeluaran berdasarkan kategori dan menghitung persentasenya.
8. **Kategori Pengeluaran Terbesar** – Menentukan kategori pengeluaran dengan nilai tertinggi.

## Teknologi yang Digunakan
- PHP 8.2
- Laravel 12
- HTML
- CSS
- Visual Studio Code / NetBeans
- XAMPP
- Composer

## Struktur Halaman
| Halaman | URL |
|---|---|
| Dashboard | `/` |
| Transaksi | `/transaksi` |
| Detail Transaksi | `/transaksi/{id}` |
| Kategori | `/kategori/{kategori}` |
| Periode | `/periode/{bulan}` |
| Laporan Laba Rugi | `/laporan` |
| Analisis Keuangan | `/analisis` |

## Data Transaksi
Aplikasi menggunakan data transaksi yang disimpan dalam array PHP di Controller dan tidak menggunakan database.

Data transaksi terdiri dari:
- Tanggal transaksi
- Nama transaksi
- Jenis transaksi
- Kategori transaksi
- Jumlah uang

Data yang digunakan merupakan data contoh UMKM pada bulan September dan Oktober 2026.

## Contoh Hasil Analisis

| Keterangan | Jumlah |
|---|---:|
| Total Pemasukan | Rp2.925.000 |
| Total Pengeluaran | Rp650.000 |
| Keuntungan | Rp2.275.000 |

### Pengeluaran Berdasarkan Kategori

| Kategori | Total |
|---|---:|
| Bahan Baku | Rp195.000 |
| Operasional | Rp255.000 |
| Kemasan | Rp110.000 |
| Transportasi | Rp90.000 |

Kategori pengeluaran terbesar adalah **Operasional**, sebesar Rp255.000.

## Cara Menjalankan Aplikasi

### 1. Persiapan
Pastikan sudah menginstal:
- PHP
- Composer
- Laravel
- XAMPP

### 2. Clone Repository
```bash
git clone https://github.com/USERNAME/sistem-keuangan-umkm.git
```

Ganti `USERNAME` dengan nama akun GitHub pemilik repository.

### 3. Masuk ke Folder Proyek
```bash
cd sistem-keuangan-umkm
```

### 4. Instal Dependensi
```bash
composer install
```

### 5. Salin File Environment
```bash
copy .env.example .env
```

### 6. Generate Application Key
```bash
php artisan key:generate
```

### 7. Jalankan Server Laravel
```bash
php artisan serve
```

### 8. Buka Aplikasi
Buka browser dan akses:

http://127.0.0.1:8000

## Struktur Folder
```text
sistem-keuangan-umkm/
├── app/
│   └── Http/
│       └── Controllers/
│           └── KeuanganController.php
├── resources/
│   └── views/
│       ├── beranda.blade.php
│       ├── transaksi.blade.php
│       ├── detail.blade.php
│       ├── kategori.blade.php
│       ├── periode.blade.php
│       ├── laporan.blade.php
│       └── analisis.blade.php
├── routes/
│   └── web.php
├── public/
├── README.md
└── composer.json
```

## Konsep Pemrograman yang Diterapkan
- Array untuk menyimpan data transaksi.
- `foreach` untuk mengolah data.
- `if-else` untuk menentukan jenis transaksi dan kondisi keuntungan.
- Fungsi untuk memisahkan proses pengolahan data.
- Routing untuk menghubungkan halaman.
- Controller untuk mengolah data.
- Blade untuk menampilkan data ke halaman web.
- `array_filter()` untuk menyaring transaksi.
- `number_format()` untuk format mata uang Rupiah.
- 
  ## Screenshot Aplikasi

### Dashboard
![Dashboard](screenshots/dashboard.png)

### Daftar Transaksi
![Daftar Transaksi](screenshots/daftar_transaksi.png)

### Detail Transaksi
![Detail Transaksi](screenshots/detail_transaksi.png)

### Kategori Operasional
![Kategori Operasional](screenshots/kategori_operasional.png)

### Kategori Bahan Baku
![Kategori Bahan Baku](screenshots/kategori_bahan_baku.png)

### Periode September
![Periode September](screenshots/periode_september.png)

### Periode Oktober
![Periode Oktober](screenshots/periode_oktober.png)

### Laporan Laba Rugi
![Laporan Laba Rugi](screenshots/laporan_laba_rugi.png)

### Analisis Keuangan
![Analisis Keuangan](screenshots/analisis_keuangan.png)

