<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Transaksi UMKM</title>
</head>
<body>

<h1>Daftar Transaksi UMKM</h1>
<a href="/">Kembali ke Beranda</a>

<h3>Seluruh Data Transaksi</h3>

<table border="1" cellpadding="10">
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