<?php

class Karyawan
{
    public $nama;
    public $golongan;
    public $jamLembur;

    
    public function __construct($nama, $pilihGol, $jamLembur)
    {
        $this->nama = $nama;
        $this->golongan = $this->setGolongan($pilihGol);
        $this->jamLembur = (int)$jamLembur;
    }

    public function setGolongan($pilih)
    {
        switch ($pilih) {
            case 1: return "Ib";
            case 2: return "Ic";
            case 3: return "Id";
            case 4: return "IIa";
            case 5: return "IIb";
            case 6: return "IIc";
            case 7: return "IId";
            case 8: return "IIIa";
            case 9: return "IIIb";
            case 10: return "IIIc";
            case 11: return "IIId";
            case 12: return "IVa";
            case 13: return "IVb";
            case 14: return "IVc";
            case 15: return "IVd";
            default: return "Ib";
        }
    }

    
    public function getGajiPokok()
    {
        switch ($this->golongan) {
            case "Ib": return 1250000;
            case "Ic": return 1300000;
            case "Id": return 1350000;
            case "IIa": return 2000000;
            case "IIb": return 2100000;
            case "IIc": return 2200000;
            case "IId": return 2300000;
            case "IIIa": return 2400000;
            case "IIIb": return 2500000;
            case "IIIc": return 2600000;
            case "IIId": return 2700000;
            case "IVa": return 2800000;
            case "IVb": return 2900000;
            case "IVc": return 3000000;
            case "IVd": return 3100000;
            default: return 0;
        }
    }

    
    public function getTotalGaji()
    {
        return $this->getGajiPokok() + ($this->jamLembur * 15000);
    }

    
    public function tampilkanHasil()
    {
        echo "\n=================================================================\n";
        echo "| Nama    | Gol  | Gaji Pokok | Lembur | Total Gaji            |\n";
        echo "=================================================================\n";

        echo "| " . str_pad($this->nama, 7) .
             " | " . str_pad($this->golongan, 4) .
             " | Rp" . str_pad(number_format($this->getGajiPokok(),0,",","."), 10) .
             " | " . str_pad($this->jamLembur, 6) .
             " | Rp" . str_pad(number_format($this->getTotalGaji(),0,",","."), 15) . " |\n";

        echo "=================================================================\n";
    }

    
    public function __destruct()
    {
        
    }
}


$karyawan = new Karyawan("Wiinny", 5, 5);


do {
    echo "\n===== MENU KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih: ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {

        case 1:
            if ($karyawan != null) {
                $karyawan->tampilkanHasil();
            } else {
                echo "Data kosong!\n";
            }
            break;

        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Pilih Golongan:\n";
            echo "1. Ib   2. Ic   3. Id\n";
            echo "4. IIa  5. IIb  6. IIc  7. IId\n";
            echo "8. IIIa 9. IIIb 10. IIIc 11. IIId\n";
            echo "12. IVa 13. IVb 14. IVc 15. IVd\n";
            echo "Masukkan pilihan (1-15): ";
            $gol = trim(fgets(STDIN));

            if ($gol < 1 || $gol > 15) {
                echo "Golongan tidak valid!\n";
                break;
            }

            echo "Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            $karyawan = new Karyawan($nama, $gol, $jam);

            echo "Data berhasil ditambahkan!\n";
            break;

        case 3:
            if ($karyawan != null) {
                echo "Update Data\n";

                echo "Nama baru: ";
                $nama = trim(fgets(STDIN));

                echo "Pilih Golongan:\n";
                echo "1. Ib   2. Ic   3. Id\n";
                echo "4. IIa  5. IIb  6. IIc  7. IId\n";
                echo "8. IIIa 9. IIIb 10. IIIc 11. IIId\n";
                echo "12. IVa 13. IVb 14. IVc 15. IVd\n";
                echo "Masukkan pilihan (1-15): ";
                $gol = trim(fgets(STDIN));

                if ($gol < 1 || $gol > 15) {
                    echo "Golongan tidak valid!\n";
                    break;
                }

                echo "Jam Lembur baru: ";
                $jam = trim(fgets(STDIN));

                $karyawan = new Karyawan($nama, $gol, $jam);

                echo "Data berhasil diupdate!\n";
            } else {
                echo "Data belum ada!\n";
            }
            break;

        case 4:
            if ($karyawan != null) {
                unset($karyawan);
                $karyawan = null;
                echo "Data berhasil dihapus!\n";
            } else {
                echo "Data sudah kosong!\n";
            }
            break;

        case 5:
            echo "Program selesai.\n";
            break;

        default:
            echo "Menu tidak valid!\n";
    }

} while ($menu != 5);

?>