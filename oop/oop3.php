<?php

class bangun_datar {

    public $luassegitiga;
    public $luaspersegi;
    public $luaspersegipanjang;
    public $luaslingkaran;

    public function segitiga($alas, $tinggi){
        echo "<b> Segitiga </b> <br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Rumus : Alas x Tinggi : 2 <br>";
        $this->luassegitiga = $alas * $tinggi /2;
        echo "Luas : $this->luassegitiga <br>";
    }
    
    public function persegi($sisi){
        echo "<b> Persegi </b> <br>";
        echo "Sisi : $sisi <br>";
        echo "Rumus : Sisi x Sisi <br>";
        $this->luaspersegi = $sisi * $sisi;
        echo "Luas : $this->luaspersegi <br>";
    }
    
    public function persegiPanjang($panjang, $lebar){
        echo "<b> Persegi Panjang </b> <br>";
        echo "Panjang : $panjang  <br>";
        echo "Lebar : $lebar <br>";
        echo "Rumus : Panjang x Lebar <br>";
        $this->luaspersegipanjang = $panjang * $lebar;
        echo "Luas : $this->luaspersegipanjang <br>";
    }
    
    public function lingkaran($jari2) {
        echo "<b> Lingkaran </b> <br>";
        echo "Jari-jari : $jari2 <br>";
        echo "Rumus : 3.14 x Jari-jari x Jari-jari <br>";
        $this->luaslingkaran = $jari2*$jari2*3.14;
        echo "Luas : $this->luaslingkaran";
    }
    
}

$cetak = new bangun_datar();

echo $cetak->segitiga(8,10);
echo "<hr>";
echo $cetak->persegi(8);
echo "<hr>";
echo $cetak->persegiPanjang(8,10);
echo "<hr>";
echo $cetak->lingkaran(10);


