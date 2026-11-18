<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Laba Rugi UMKM</title>
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
            max-width: 700px;
            margin: auto;
        }
        h1 {
            color: #263b63;
        }
        .hasil {
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .untung {
            color: green;
            font-weight: bold;
        }
        .rugi {
            color: red;
            font-weight: bold;
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

    <h1>Laporan Laba Rugi UMKM</h1>

    <a href="/">Kembali ke Beranda</a>

    <div class="hasil">
        <strong>Total Pemasukan:</strong><br>
        Rp <?php echo e(number_format($pemasukan, 0, ',', '.')); ?>

    </div>

    <div class="hasil">
        <strong>Total Pengeluaran:</strong><br>
        Rp <?php echo e(number_format($pengeluaran, 0, ',', '.')); ?>

    </div>

    <div class="hasil">
        <strong>Keuntungan / Kerugian:</strong><br>

        <?php if($keuntungan >= 0): ?>
            <span class="untung">
                Untung Rp <?php echo e(number_format($keuntungan, 0, ',', '.')); ?>

            </span>
        <?php else: ?>
            <span class="rugi">
                Rugi Rp <?php echo e(number_format(abs($keuntungan), 0, ',', '.')); ?>

            </span>
        <?php endif; ?>
    </div>

    <h3>Kesimpulan</h3>

    <?php if($keuntungan > 0): ?>
        <p>UMKM mengalami keuntungan. Kondisi keuangan menunjukkan hasil yang positif.</p>
    <?php elseif($keuntungan < 0): ?>
        <p>UMKM mengalami kerugian. Pengeluaran lebih besar daripada pemasukan.</p>
    <?php else: ?>
        <p>Keuangan UMKM berada dalam kondisi seimbang.</p>
    <?php endif; ?>

</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\sistem-keuangan-umkm\resources\views/laporan.blade.php ENDPATH**/ ?>