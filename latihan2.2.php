<?php

class Belanja {
    public $namaPembeli ; 
    public $namaBarang ;
    public $hargaBarang ;
    public $jumlahBarang ;
    public $totalBayar;
    public $diskon ;
    public $pajak ;


    public function totalHarga(): float|int  {
        return  $this->hargaBarang * $this->jumlahBarang; 
         }
    public function totalDiskon(): float|int {
        return $this->totalHarga() * $this->diskon;
     }
    public function totalBayar(): float|int {
        return $this->totalHarga() - $this->totalDiskon();
    }
     public function totalAkhir(): float|int {
        return $this->totalBayar() * (1 + $this->pajak);
    }

}
$belanja1 = new Belanja();

$belanja1->namaPembeli ="mifth";
$belanja1->namaBarang ="sampo";
$belanja1->hargaBarang =9000;
$belanja1->jumlahBarang =2;
$belanja1->diskon =0.1;
$belanja1->pajak =0.02;


$belanja2 = new Belanja();

$belanja2->namaPembeli ="fakran";
$belanja2->namaBarang ="hp";
$belanja2->hargaBarang =50000 ;
$belanja2->jumlahBarang =2;
$belanja2->diskon =0.01;



echo "<pre>";
echo "Subtota :Rp".$belanja1->totalHarga() . "<br>";
echo "diskon: Rp" . $belanja1->totalDiskon() . "<br>";
echo "harga akhir:Rp" . $belanja1->totalBayar() . "<br>";
echo "pajak 2% :" . "<br>" ;
echo "harga yang harus di bayar: ".$belanja1->totalAkhir() ."<br>";
echo "<pre>";
echo "Subtotal: Rp" . $belanja2->totalHarga() . "<br>";
echo "diskon: Rp" . $belanja2->totalDiskon() . "<br>";
echo "harga akhir Rp" . $belanja2->totalBayar() . "<br>";
echo "pajak 2% :" . "<br>" ;
echo "harga yang harus di bayar: " . $belanja2->totalAkhir() ."<br>";
