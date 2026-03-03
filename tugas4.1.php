<?php

// ini CLASSnya yang nama class mahasiswa 

class Mahasiswa {

    // PROPERTY atau variable ini untuk menyimpan sebuah data 
    public $nama;
    public $kelas;
    public $mata_kuliah;
    public $nilai;

    // METHOD itu sama kaya fungsi untuk memproses data yang sudah ada
    public function cekKelulusan() {
        if ($this->nilai >= 75) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    // ini objek nya 
    $mhs1 = new Mahasiswa();
    $mhs1->nama = $_POST["nama1"];
    $mhs1->kelas = $_POST["kelas1"];
    $mhs1->mata_kuliah = $_POST["mapel1"];
    $mhs1->nilai = $_POST["nilai1"];

    $mhs2 = new Mahasiswa();
    $mhs2->nama = $_POST["nama2"];
    $mhs2->kelas = $_POST["kelas2"];
    $mhs2->mata_kuliah = $_POST["mapel2"];
    $mhs2->nilai = $_POST["nilai2"];

    $mhs3 = new Mahasiswa();
    $mhs3->nama = $_POST["nama3"];
    $mhs3->kelas = $_POST["kelas3"];
    $mhs3->mata_kuliah = $_POST["mapel3"];
    $mhs3->nilai = $_POST["nilai3"];


    $dataMahasiswa = [$mhs1, $mhs2, $mhs3]; // ini array nya untuk menyimpan data nya biar di manggil mudah


   
}

    // ini bisa di echo nya bisa memanggil pake $dataMahasiswa[0] sampai 2 karena mulai nya dari 0 atau bisa memanggilnya pake $mhs1 sampai 3 karena di objek nya gitu
 echo "<h2>HASIL NILAI MAHASISWA</h2>";

    echo "<hr>";
    echo "<b>Mahasiswa 1</b><br>";
    echo "Nama : " . $dataMahasiswa[0]->nama . "<br>";
    echo "Kelas : " . $dataMahasiswa[0]->kelas . "<br>";
    echo "Mata Kuliah : " . $dataMahasiswa[0]->mata_kuliah . "<br>";
    echo "Nilai : " . $dataMahasiswa[0]->nilai . "<br>";
    echo "Keterangan : <b>" . $dataMahasiswa[0]->cekKelulusan() . "</b><br>";

    echo "<hr>";
    echo "<b>Mahasiswa 2</b><br>";
    echo "Nama : " . $dataMahasiswa[1]->nama . "<br>";
    echo "Kelas : " . $dataMahasiswa[1]->kelas . "<br>";
    echo "Mata Kuliah : " . $dataMahasiswa[1]->mata_kuliah . "<br>";
    echo "Nilai : " . $dataMahasiswa[1]->nilai . "<br>";
    echo "Keterangan : <b>" . $dataMahasiswa[1]->cekKelulusan() . "</b><br>";

    echo "<hr>";
    echo "<b>Mahasiswa 3</b><br>";
    echo "Nama : " . $mhs3->nama . "<br>";
    echo "Kelas : " . $mhs3->kelas . "<br>";
    echo "Mata Kuliah : " . $mhs3->mata_kuliah . "<br>";
    echo "Nilai : " . $mhs3->nilai . "<br>";
    echo "Keterangan : <b>" . $mhs3->cekKelulusan() . "</b><br>";

?>
