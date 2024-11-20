<?php

class bangunDatar{

    
    public $luassegitiga;
    public $luaspersegi;
    public $luaspersegipanjang;
    public $luaslingkaran;
    
    
    public $kelilingsegitiga;
    public $kelilingpersegi;
    public $kelilingpersegipanjang;
    public $kelilinglingkaran;

}

class luas extends bangunDatar{
    
    public function segitiga($alas, $tinggi){
        echo "<b> Luas Segitiga </b> <br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Rumus : Alas x Tinggi : 2 <br>";
        $this->luassegitiga = $alas * $tinggi /2;
        echo "Luas : $this->luassegitiga <br>";
    }
    
    public function persegi($sisi){
        echo "<b> Luas Persegi </b> <br>";
        echo "Sisi : $sisi <br>";
        echo "Rumus : Sisi x Sisi <br>";
        $this->luaspersegi = $sisi * $sisi;
        echo "Luas : $this->luaspersegi <br>";
    }
    
    public function persegiPanjang($panjang, $lebar){
        echo "<b> Luas Persegi Panjang </b> <br>";
        echo "Panjang : $panjang  <br>";
        echo "Lebar : $lebar <br>";
        echo "Rumus : Panjang x Lebar <br>";
        $this->luaspersegipanjang = $panjang * $lebar;
        echo "Luas : $this->luaspersegipanjang <br>";
    }
    
    public function lingkaran($jari2) {
        echo "<b> Luas Lingkaran </b> <br>";
        echo "Jari-jari : $jari2 <br>";
        echo "Rumus : 3.14 x Jari-jari x Jari-jari <br>";
        $this->luaslingkaran = $jari2*$jari2*3.14;
        echo "Luas : $this->luaslingkaran";
    }
    

}

class keliling extends bangunDatar{
    
    public function segitiga($a, $b, $c){
        echo "<b> Keliling Segitiga </b> <br>";
        echo "Sisi 1 : $a <br>";
        echo "Sisi 2 : $b <br>";
        echo "Sisi 3 : $c <br>";
        echo "Rumus : Sisi + Sisi + Sisi <br>";
        $this->kelilingsegitiga = $a + $b + $c;
        echo "Keliling : $this->kelilingsegitiga <br>";
    }
    
    public function persegi($sisi){
        echo "<b> Keliling Persegi </b> <br>";
        echo "Sisi : $sisi <br>";
        echo "Rumus : 4 x Sisi <br>";
        $this->kelilingpersegi = $sisi * 4;
        echo "Keliling : $this->kelilingpersegi <br>";
    }
    
    public function persegiPanjang($panjang, $lebar){
        echo "<b> Keliling Persegi Panjang </b> <br>";
        echo "Panjang : $panjang  <br>";
        echo "Lebar : $lebar <br>";
        echo "Rumus : (2 x Panjang) + (2 x Lebar) <br>";
        $this->kelilingpersegipanjang = ($panjang * 2) + (2 * $lebar );
        echo "Keliling : $this->kelilingpersegipanjang <br>";
    }
    
    public function lingkaran($diameter) {
        echo "<b> Keliling Lingkaran </b> <br>";
        echo "Diameter : $diameter <br>";
        echo "Rumus : 3.14 x Diameter <br>";
        $this->kelilinglingkaran = $diameter*3.14;
        echo "Keliling : $this->kelilinglingkaran";
    }
    
}

$cluas = new luas();

echo $cluas->segitiga(8,10);
echo "<hr>";
echo $cluas->persegi(8);
echo "<hr>";
echo $cluas->persegiPanjang(8,10);
echo "<hr>";
echo $cluas->lingkaran(10);
echo "<hr>";

$cling = new keliling();
echo $cling->segitiga(8,10,9);
echo "<hr>";
echo $cling->persegi(8);
echo "<hr>";
echo $cling->persegiPanjang(8,10);
echo "<hr>";
echo $cling->lingkaran(10);



?>