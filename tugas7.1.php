<?php

// CLASS inti nya
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    // constructor untuk isi data awal
    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    // method 
    public function hitungGaji() {
        return $this->gaji;
    }
}

// class anak 1
class Programmer extends Employee {

    // polymorphism (method sama tapi isi beda)
    public function hitungGaji() {
        if ($this->lamaKerja < 1) {
            return $this->gaji; // tidak ada bonus
        } elseif ($this->lamaKerja <= 10) {
            // bonus 1% per tahun
            return $this->gaji + ($this->gaji * 0.01 * $this->lamaKerja);
        } else {
            // bonus 2% per tahun
            return $this->gaji + ($this->gaji * 0.02 * $this->lamaKerja);
        }
    }
}

// kelas anak 2
class Direktur extends Employee {

    public function hitungGaji() {
        // bonus + tunjangan berdasarkan lama kerja
        return $this->gaji 
            + ($this->gaji * 0.5 * $this->lamaKerja) 
            + ($this->gaji * 0.1 * $this->lamaKerja);
    }
}

// clas anak 3
class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stok;
    public $terjual;

    // constructor tambahan
    public function __construct($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual) {
        parent::__construct($nama, $gaji, $lamaKerja); // ambil dari parent
        $this->hargaBarang = $hargaBarang;
        $this->stok = $stok;
        $this->terjual = $terjual;
    }

    public function hitungGaji() {
        // hitung persentase penjualan
        $persen = ($this->terjual / $this->stok) * 100;

        if ($persen > 70) {
            // bonus 10%
            $bonus = $this->hargaBarang * 0.10 * $this->terjual;
        } else {
            // bonus 3%
            $bonus = $this->hargaBarang * 0.03 * $this->terjual;
        }

        return $this->gaji + $bonus;
    }
}

// data daari post
$nama = $_POST['nama'];
$gaji = $_POST['gaji'];
$lamaKerja = $_POST['lamaKerja'];
$jenis = $_POST['jenis'];

// objek
if ($jenis == "programmer") {
    $obj = new Programmer($nama, $gaji, $lamaKerja);
} elseif ($jenis == "direktur") {
    $obj = new Direktur($nama, $gaji, $lamaKerja);
} else {
    $hargaBarang = $_POST['hargaBarang'];
    $stok = $_POST['stok'];
    $terjual = $_POST['terjual'];

    $obj = new PegawaiMingguan($nama, $gaji, $lamaKerja, $hargaBarang, $stok, $terjual);
}


echo "Nama: $nama <br>";
echo "Jenis: $jenis <br>";
echo "Gaji Akhir: " . $obj->hitungGaji();

?>