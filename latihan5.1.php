<?php 

$nilai = 101;

if ($nilai < 0 || $nilai > 100) {
    
    if ($nilai >= 60) {
        echo "Lulus";
    } else {
        echo "Tidak lulus";
    }

} else {
    echo "Nilai harus di antara 0 sampai 100";
}

?>