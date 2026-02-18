<?php

class Produk {
public $pinjaman;
public $lama_angsuran;
public $terlambat;
}
$produk1 = new Produk();

$produk1->pinjaman = $_POST['pinjaman'];
$produk1->lama_angsuran = $_POST['lama_angsuran'];
$produk1->terlambat = $_POST['terlambat'];
$produk1->harga = 
$harga =$_POST['harga'];


echo "<h2>data produk warung A</h2>";
echo "Nama Produk : " . $nama . "<br>";
echo "Harga : Rp " . $harga .  "<br>" ;

$nama = htmlspecialchars($_POST['nama']);
$harga = htmlspecialchars($_POST['harga']);
?>