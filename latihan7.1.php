<?php 
class Produk {
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo(){
        return "Produk: $this->nama - Rp " . number_format($this->harga, 0, ",", ".");
    }
}

class ProdukDigital extends Produk {
    public $ukuranFile;

    public function __construct($nama, $harga, $ukuranFile){
        parent::__construct($nama, $harga); // inheritance
        $this->ukuranFile = $ukuranFile;
    }

    public function getInfo(){ // overriding
        return "Produk Digital: $this->nama - Rp " 
        . number_format($this->harga, 0, ",", ".") 
        . " | Ukuran File: $this->ukuranFile MB";
    }
}

$p1 = new Produk("Laptop", 1200000);
$p2 = new ProdukDigital("Ebook PHP", 20000, 100);

echo $p1->getInfo();
echo "<br>";
echo $p2->getInfo();
?>

<?php
$data = [
    ["tipe"=>"produk","nama"=>"Buku","harga"=>5000],
    ["tipe"=>"digital","nama"=>"Ebook","harga"=>10000,"size"=>25],
]; 

foreach($data as $d){

    if($d["tipe"] =="produk"){
        $obj = new Produk($d["nama"], $d["harga"]);
    } else {
        $obj = new ProdukDigital($d["nama"], $d["harga"], $d["size"]);
    }

    echo $obj->getInfo()."<br>";
}
?>