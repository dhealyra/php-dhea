<?php

// class induk
class kendaraan {
    
    public $warna = "biru";
    public function a(){
        echo "Saya adalah kendaraan";
    }

}

// class anak
class mobil extends kendaraan{

    public function b(){
        echo $this->a();
        echo "<br>";
        echo "Warna saya adalah $this->warna";
    }
}

$cetak = new mobil();
echo $cetak->b();


?>