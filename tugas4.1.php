<?php

class Menghitung {
    public $pinjaman;
    public $lama;
    public $terlambat;
    public $bunga = 0.10;

    public function hitungTotalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga);
    }

    public function hitungAngsuran() {
        return $this->hitungTotalPinjaman() / $this->lama;
    }

    public function hitungDenda() {
        return $this->hitungAngsuran() * 0.0015 * $this->terlambat;
    }

    public function hitungTotalBayar() {
        return $this->hitungAngsuran() + $this->hitungDenda();
    }
}

$pegadaian = new Menghitung ();

$pegadaian->pinjaman = $_POST['pinjaman'];
$pegadaian->lama = $_POST['lama_angsuran'];
$pegadaian->terlambat = $_POST['terlambat'];

$total_pinjaman = $pegadaian->hitungTotalPinjaman();
$angsuran = $pegadaian->hitungAngsuran();
$denda = $pegadaian->hitungDenda();
$total_bayar = $pegadaian->hitungTotalBayar();

echo "TOKO PEGADAIAN SYARIAH\n";
echo "Jalan Keadilan No 16\n";
echo "Telpon : 72353459\n\n";

echo "Program Penghitungan Besaran Angsuran Hutang\n\n";

echo "Besaran Pinjaman : Rp." . number_format($pegadaian->pinjaman,0,",",".") . "\n";
echo "Bunga : 10%\n";
echo "Total Pinjaman : Rp." . number_format($total_pinjaman,0,",",".") . "\n";
echo "Lama Angsuran (bulan) : " . $pegadaian->lama . "\n";
echo "Besaran Angsuran : Rp." . number_format($angsuran,0,",",".") . "\n\n";

echo "Ketentuan denda keterlambatan 0,15% per hari dari angsuran\n\n";

echo "Keterlambatan (hari) : " . $pegadaian->terlambat . "\n";
echo "Denda Keterlambatan : Rp." . number_format($denda,0,",",".") . "\n";
echo "Besaran Pembayaran : Rp." . number_format($total_bayar,0,",",".") . "\n";

?>