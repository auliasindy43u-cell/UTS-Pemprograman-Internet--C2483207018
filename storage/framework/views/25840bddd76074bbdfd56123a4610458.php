
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kategori Pengeluaran UMKM</title>
</head>
<body>

<h1>Kategori: <?php echo e($kategori); ?></h1>

<a href="/">Kembali ke Beranda</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Nama Transaksi</th>
        <th>Jenis</th>
        <th>Jumlah</th>
    </tr>

    <?php $__empty_1 = true; $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($no + 1); ?></td>
        <td><?php echo e($data['tanggal']); ?></td>
        <td><?php echo e($data['nama']); ?></td>
        <td><?php echo e($data['jenis']); ?></td>
        <td>Rp <?php echo e(number_format($data['jumlah'], 0, ',', '.')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
        <td colspan="5">Data kategori tidak ditemukan.</td>
    </tr>
    <?php endif; ?>
</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\sistem-keuangan-umkm\resources\views/kategori.blade.php ENDPATH**/ ?>