<?php

namespace App\Http\Controllers;

class KeuanganController extends \App\Http\Controllers\Controller
{
    private function dataTransaksi()
    {
        return [
            ['tanggal'=>'2026-09-01','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>200000],
            ['tanggal'=>'2026-09-03','nama'=>'Pembelian Bahan','jenis'=>'Pengeluaran','kategori'=>'Bahan Baku','jumlah'=>75000],
            ['tanggal'=>'2026-09-05','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>150000],
            ['tanggal'=>'2026-09-07','nama'=>'Bayar Listrik','jenis'=>'Pengeluaran','kategori'=>'Operasional','jumlah'=>25000],
            ['tanggal'=>'2026-09-09','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>300000],
            ['tanggal'=>'2026-09-11','nama'=>'Beli Kemasan','jenis'=>'Pengeluaran','kategori'=>'Kemasan','jumlah'=>50000],
            ['tanggal'=>'2026-09-13','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>175000],
            ['tanggal'=>'2026-09-15','nama'=>'Bayar Internet','jenis'=>'Pengeluaran','kategori'=>'Operasional','jumlah'=>100000],
            ['tanggal'=>'2026-09-18','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>250000],
            ['tanggal'=>'2026-09-20','nama'=>'Transportasi','jenis'=>'Pengeluaran','kategori'=>'Transportasi','jumlah'=>40000],
            ['tanggal'=>'2026-10-01','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>350000],
            ['tanggal'=>'2026-10-03','nama'=>'Pembelian Bahan','jenis'=>'Pengeluaran','kategori'=>'Bahan Baku','jumlah'=>120000],
            ['tanggal'=>'2026-10-05','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>275000],
            ['tanggal'=>'2026-10-07','nama'=>'Bayar Listrik','jenis'=>'Pengeluaran','kategori'=>'Operasional','jumlah'=>30000],
            ['tanggal'=>'2026-10-09','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>400000],
            ['tanggal'=>'2026-10-11','nama'=>'Beli Kemasan','jenis'=>'Pengeluaran','kategori'=>'Kemasan','jumlah'=>60000],
            ['tanggal'=>'2026-10-13','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>325000],
            ['tanggal'=>'2026-10-15','nama'=>'Bayar Internet','jenis'=>'Pengeluaran','kategori'=>'Operasional','jumlah'=>100000],
            ['tanggal'=>'2026-10-18','nama'=>'Penjualan Produk','jenis'=>'Pemasukan','kategori'=>'Penjualan','jumlah'=>500000],
            ['tanggal'=>'2026-10-20','nama'=>'Transportasi','jenis'=>'Pengeluaran','kategori'=>'Transportasi','jumlah'=>50000],
        ];
    }

    public function index()
    {
        $transaksi = $this->dataTransaksi();

        $pemasukan = 0;
        $pengeluaran = 0;
        $kategoriPengeluaran = [];

        foreach ($transaksi as $data) {
            if ($data['jenis'] == 'Pemasukan') {
                $pemasukan += $data['jumlah'];
            } else {
                $pengeluaran += $data['jumlah'];
                $kategori = $data['kategori'];

                if (!isset($kategoriPengeluaran[$kategori])) {
                    $kategoriPengeluaran[$kategori] = 0;
                }

                $kategoriPengeluaran[$kategori] += $data['jumlah'];
            }
        }

        $keuntungan = $pemasukan - $pengeluaran;

        $persentaseKategori = [];

        foreach ($kategoriPengeluaran as $kategori => $jumlah) {
            $persentaseKategori[$kategori] = $pengeluaran > 0
                ? ($jumlah / $pengeluaran) * 100
                : 0;
        }

        $kategoriTerbesar = count($kategoriPengeluaran) > 0
            ? array_keys($kategoriPengeluaran, max($kategoriPengeluaran))[0]
            : 'Belum ada pengeluaran';

        return view('beranda', compact(
            'transaksi',
            'pemasukan',
            'pengeluaran',
            'keuntungan',
            'kategoriPengeluaran',
            'persentaseKategori',
            'kategoriTerbesar'
        ));
    }

public function transaksi()
{
    $transaksi = $this->dataTransaksi();

    return view('transaksi', compact('transaksi'));
}
public function detail($id)
{
    $transaksi = $this->dataTransaksi();

    if (!isset($transaksi[$id])) {
        abort(404);
    }

    $data = $transaksi[$id];

    return view('detail', compact('data', 'id'));
}
public function kategori($kategori)
{
    $transaksi = $this->dataTransaksi();

    $hasil = array_filter($transaksi, function ($data) use ($kategori) {
        return $data['kategori'] == $kategori;
    });

    return view('kategori', compact('hasil', 'kategori'));
}
public function periode($bulan)
{
    $transaksi = $this->dataTransaksi();

    $hasil = array_filter($transaksi, function ($data) use ($bulan) {
        return substr($data['tanggal'], 5, 2) == $bulan;
    });

    return view('periode', compact('hasil', 'bulan'));
}
public function laporan()
{
    $transaksi = $this->dataTransaksi();

    $pemasukan = 0;
    $pengeluaran = 0;

    foreach ($transaksi as $data) {
        if ($data['jenis'] == 'Pemasukan') {
            $pemasukan += $data['jumlah'];
        } else {
            $pengeluaran += $data['jumlah'];
        }
    }

    $keuntungan = $pemasukan - $pengeluaran;

    return view('laporan', [
        'pemasukan' => $pemasukan,
        'pengeluaran' => $pengeluaran,
        'keuntungan' => $keuntungan
    ]);
}
public function analisis()
{
    $transaksi = $this->dataTransaksi();

    $pemasukan = 0;
    $pengeluaran = 0;
    $kategoriPengeluaran = [];

    foreach ($transaksi as $data) {
        if ($data['jenis'] == 'Pemasukan') {
            $pemasukan += $data['jumlah'];
        } else {
            $pengeluaran += $data['jumlah'];

            $kategori = $data['kategori'];

            if (!isset($kategoriPengeluaran[$kategori])) {
                $kategoriPengeluaran[$kategori] = 0;
            }

            $kategoriPengeluaran[$kategori] += $data['jumlah'];
        }
    }

    $keuntungan = $pemasukan - $pengeluaran;

    $persentaseKategori = [];

    foreach ($kategoriPengeluaran as $kategori => $jumlah) {
        $persentaseKategori[$kategori] = $pengeluaran > 0
            ? ($jumlah / $pengeluaran) * 100
            : 0;
    }

    $kategoriTerbesar = count($kategoriPengeluaran) > 0
        ? array_keys($kategoriPengeluaran, max($kategoriPengeluaran))[0]
        : 'Belum ada pengeluaran';

    return view('analisis', compact(
        'transaksi',
        'pemasukan',
        'pengeluaran',
        'keuntungan',
        'kategoriPengeluaran',
        'persentaseKategori',
        'kategoriTerbesar'
    ));
}
}