<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Keuangan UMKM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f3f6;
            margin: 30px;
        }
        h1 { color: #263b59; }
        nav {
            background: #263b59;
            padding: 15px;
            margin-bottom: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .kartu {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th { background: #263b59; color: white; }
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

<h2>Analisis Pengeluaran Berdasarkan Kategori</h2>

<div class="kartu">
    @forelse($kategoriPengeluaran as $kategori => $jumlah)
        <p>
            <strong>{{ $kategori }}</strong> -
            Rp {{ number_format($jumlah, 0, ',', '.') }}
            ({{ number_format($persentaseKategori[$kategori], 1) }}%)
        </p>
    @empty
        <p>Belum ada data pengeluaran.</p>
    @endforelse

    <h3>Kategori Pengeluaran Terbesar: {{ $kategoriTerbesar }}</h3>
</div>

<h2>Daftar Transaksi</h2>

<table>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Transaksi</th>
        <th>Jenis</th>
        <th>Kategori</th>
        <th>Jumlah</th>
    </tr>

    @foreach($transaksi as $no => $data)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $data['tanggal'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['jenis'] }}</td>
        <td>{{ $data['kategori'] }}</td>
        <td>Rp {{ number_format($data['jumlah'], 0, ',', '.') }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
