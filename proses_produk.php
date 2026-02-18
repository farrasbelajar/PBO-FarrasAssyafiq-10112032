<?php

class Produk {
public $nama;
public $harga;
}
$produk1 = new Produk();

$produk1->nama = 
$nama = $_POST['nama'];
$produk1->harga = 
$harga =$_POST['harga'];


echo "<h2>data produk warung A</h2>";
echo "Nama Produk : " . $nama . "<br>";
echo "Harga : Rp " . $harga .  "<br>" ;

$nama = htmlspecialchars($_POST['nama']);
$harga = htmlspecialchars($_POST['harga']);
?>
