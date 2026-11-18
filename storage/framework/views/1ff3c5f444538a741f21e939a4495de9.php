<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Transaksi UMKM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f5f9;
            padding: 30px;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #263b63;
        }
        p {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        a {
            display: inline-block;
            background: #263b63;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Detail Transaksi UMKM</h1>

    <p><strong>Nomor Transaksi:</strong> <?php echo e($id + 1); ?></p>
    <p><strong>Tanggal:</strong> <?php echo e($data['tanggal']); ?></p>
    <p><strong>Nama Transaksi:</strong> <?php echo e($data['nama']); ?></p>
    <p><strong>Jenis:</strong> <?php echo e($data['jenis']); ?></p>
    <p><strong>Kategori:</strong> <?php echo e($data['kategori']); ?></p>
    <p><strong>Jumlah:</strong> Rp <?php echo e(number_format($data['jumlah'], 0, ',', '.')); ?></p>

    <a href="/transaksi">Kembali ke Daftar Transaksi</a>
</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\sistem-keuangan-umkm\resources\views/detail.blade.php ENDPATH**/ ?>