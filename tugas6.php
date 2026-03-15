<?php

// CLASS untuk menghitung volume bangun ruang
class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    // method menghitung volume
    public function volume() {

        $volume = 0;

        // percabangan nya
        if ($this->jenis == "Bola") {

            // rumus bola = 4/3 π r³
            $volume = (4/3) * pi() * pow($this->jari,3);

        } elseif ($this->jenis == "Kerucut") {

            // rumus kerucut = 1/3 π r² t
            $volume = (1/3) * pi() * pow($this->jari,2) * $this->tinggi;

        } elseif ($this->jenis == "Limas Segi Empat") {

            // rumus limas = 1/3 × sisi² × tinggi
            $volume = (1/3) * pow($this->sisi,2) * $this->tinggi;

        } elseif ($this->jenis == "Kubus") {

            // rumus kubus = sisi³
            $volume = pow($this->sisi,3);

        } elseif ($this->jenis == "Tabung") {

            // rumus tabung = π r² t
            $volume = pi() * pow($this->jari,2) * $this->tinggi;

        }

        return $volume;
    }
}


// ARRAY data bangun ruang
$dataBangun = [

    [
        "jenis" => "Bola",
        "sisi" => 0,
        "jari" => 7,
        "tinggi" => 0
    ],

    [
        "jenis" => "Kerucut",
        "sisi" => 0,
        "jari" => 14,
        "tinggi" => 10
    ],

    [
        "jenis" => "Limas Segi Empat",
        "sisi" => 8,
        "jari" => 0,
        "tinggi" => 24
    ],

    [
        "jenis" => "Kubus",
        "sisi" => 30,
        "jari" => 0,
        "tinggi" => 0
    ],

    [
        "jenis" => "Tabung",
        "sisi" => 0,
        "jari" => 7,
        "tinggi" => 10
    ]

];


// ini untuk table nya
echo "<table border='1' cellpadding='6'>";

echo "<tr>
<th>No</th>
<th>Jenis Bangun Ruang</th>
<th>Sisi</th>
<th>Jari-jari</th>
<th>Tinggi</th>
<th>Volume</th>
</tr>";

$no = 1;

// perulangan seperti coding kamu
foreach ($dataBangun as $d) {

    $bangun = new BangunRuang();

    $bangun->jenis = $d["jenis"];
    $bangun->sisi = $d["sisi"];
    $bangun->jari = $d["jari"];
    $bangun->tinggi = $d["tinggi"];

    $volume = $bangun->volume();

    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$bangun->jenis."</td>";
    echo "<td>".$bangun->sisi."</td>";
    echo "<td>".$bangun->jari."</td>";
    echo "<td>".$bangun->tinggi."</td>";
    echo "<td>".$volume."</td>";
    echo "</tr>";

}

echo "</table>";

?>
