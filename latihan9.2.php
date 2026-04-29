<?php

class manusia {
    // property
    protected $nama = "Ardi";
    public $kelas = "SI 2";

    // method protected
    protected function nama() {
        return "Nama : " . $this->nama;
    }

    // method public (akses dari luar class)
    public function tampilkan_nama() {
        return $this->nama();
    }

    // dibenarkan: dari protected jadi public
    public function tampilkan_kelas() {
        return "Kelas : " . $this->kelas;
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method public
echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas();

?>
