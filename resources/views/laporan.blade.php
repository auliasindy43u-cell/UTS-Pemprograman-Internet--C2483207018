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
        Rp {{ number_format($pemasukan, 0, ',', '.') }}
    </div>

    <div class="hasil">
        <strong>Total Pengeluaran:</strong><br>
        Rp {{ number_format($pengeluaran, 0, ',', '.') }}
    </div>

    <div class="hasil">
        <strong>Keuntungan / Kerugian:</strong><br>

        @if($keuntungan >= 0)
            <span class="untung">
                Untung Rp {{ number_format($keuntungan, 0, ',', '.') }}
            </span>
        @else
            <span class="rugi">
                Rugi Rp {{ number_format(abs($keuntungan), 0, ',', '.') }}
            </span>
        @endif
    </div>

    <h3>Kesimpulan</h3>

    @if($keuntungan > 0)
        <p>UMKM mengalami keuntungan. Kondisi keuangan menunjukkan hasil yang positif.</p>
    @elseif($keuntungan < 0)
        <p>UMKM mengalami kerugian. Pengeluaran lebih besar daripada pemasukan.</p>
    @else
        <p>Keuangan UMKM berada dalam kondisi seimbang.</p>
    @endif

</div>

</body>
</html>

