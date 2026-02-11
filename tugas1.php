<?php

class KalkulatorSuhu {
    public $suhu; 

   
    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

   
    public function cToF() {
        return ($this->suhu * 9 / 5) + 32;
    }

    
    public function cToK() {
        return $this->suhu + 273;
    }
}


$kalkulator = new KalkulatorSuhu(18);

echo "Suhu Celsius: " . $kalkulator->suhu . "°C\n";
echo "Ke Fahrenheit: " . $kalkulator->cToF() . "°F\n";
echo "Ke Kelvin: " . $kalkulator->cToK() . " K\n";

?>
