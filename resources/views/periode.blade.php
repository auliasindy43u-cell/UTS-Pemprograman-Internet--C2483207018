
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi Berdasarkan Periode</title>
</head>
<body>

<h1>Laporan Transaksi Bulanan</h1>

<a href="/">Kembali ke Beranda</a>

<h3>
    Periode:
    {{ $bulan == '09' ? 'September 2026' : 'Oktober 2026' }}
</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Transaksi</th>
        <th>Jenis</th>
        <th>Kategori</th>
        <th>Jumlah</th>
    </tr>

    @forelse($hasil as $no => $data)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $data['tanggal'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['jenis'] }}</td>
        <td>{{ $data['kategori'] }}</td>
        <td>Rp {{ number_format($data['jumlah'], 0, ',', '.') }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="6">Data transaksi tidak ditemukan.</td>
    </tr>
    @endforelse
</table>

</body>
</html>


