<?php
function formatRupiah($angka): string {
    return "Rp " . number_format(num: $angka, decimals: 0, decimal_separator: ',', thousands_separator: '.');
}
class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
    public function hitungSubtotal(): float|int {
        return $this->hargaBarang * $this->jumlahBeli;
    }
    public function hitungTotalDenganDiskon($persenDiskon): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}
$data = [
    'namaPembeli' => 'Farras',
    'namaBarang' => 'Makanan',
    'hargaBarang' => 15000,
    'jumlahBeli' => 10,
];
$belanja = new Belanja();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];
//output
echo "<h2> STRUK BELANJA WARUNG MANG AAA </h2>";
echo "Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "Subtotal: " . formatRupiah(angka: $belanja->hitungSubtotal()) . "<br>";
echo "Total (Diskon 10%): " . formatRupiah(angka: $belanja->hitungTotalDenganDiskon(persenDiskon: 10)) . "<br>";
?>