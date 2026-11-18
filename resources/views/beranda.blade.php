
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Keuangan UMKM</title>
    <style>
        body {
            font-family: Arial;
            background: #f1f3f6;
            margin: 30px;
        }
        h1 { color: #263b59; }
        nav {
            background: #263b59;
            padding: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .kartu {
            background: white;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h1>Sistem Analisis Keuangan UMKM</h1>
<p>Dashboard Ringkasan Keuangan Usaha</p>

<nav>
    <a href="/">Beranda</a>
    <a href="/transaksi">Transaksi</a>
    <a href="/laporan">Laporan Laba Rugi</a>
    <a href="/analisis">Analisis Keuangan</a>
    <a href="/periode/09">September</a>
    <a href="/periode/10">Oktober</a>
</nav>

<div class="kartu">
    <h3>Total Pemasukan</h3>
    Rp {{ number_format($pemasukan, 0, ',', '.') }}
</div>

<div class="kartu">
    <h3>Total Pengeluaran</h3>
    Rp {{ number_format($pengeluaran, 0, ',', '.') }}
</div>

<div class="kartu">
    <h3>Keuntungan / Kerugian</h3>
    Rp {{ number_format(abs($keuntungan), 0, ',', '.') }}
    @if($keuntungan >= 0)
        <p>Usaha mengalami keuntungan.</p>
    @else
        <p>Usaha mengalami kerugian.</p>
    @endif
</div>

</body>
</html>
