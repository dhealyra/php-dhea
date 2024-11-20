<?php

// buat kelas
class kucing{
    // buat peroperty
    var $warna;
    var $jenis;

    // buat method
    public function makan(){
        echo "Kucing suka makan whiskas";
    }

    public function minum(){
        echo "Kucing suka minum air";
    }
}

$cetak = new kucing();

// Panggil Method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

// panggil property
echo $cetak->warna = "Kuning";
echo "<br>";
echo $cetak->jenis = "Anggora";