
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori Pengeluaran UMKM</title>
</head>
<body>

<h1>Kategori: {{ $kategori }}</h1>

<a href="/">Kembali ke Beranda</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Transaksi</th>
        <th>Jenis</th>
        <th>Jumlah</th>
    </tr>

    @forelse($hasil as $no => $data)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $data['tanggal'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['jenis'] }}</td>
        <td>Rp {{ number_format($data['jumlah'], 0, ',', '.') }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="5">Data kategori tidak ditemukan.</td>
    </tr>
    @endforelse
</table>

</body>
</html>
