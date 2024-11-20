<?php

function segitiga($alas, $tinggi){
    echo "<b> Segitiga </b> <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Rumus : Alas x Tinggi : 2 <br>";
    $hasil = $alas * $tinggi /2;
    echo "Hasil : $hasil <br>";
}

function persegi($sisi){
    echo "<b> Persegi </b> <br>";
    echo "Sisi : $sisi <br>";
    echo "Rumus : Sisi x Sisi <br>";
    $hasil = $sisi^2;
    echo "Hasil : $hasil <br>";
}

function persegiPanjang($panjang, $lebar){
    echo "<b> Persegi Panjang </b> <br>";
    echo "Panjang : $panjang  <br>";
    echo "Lebar : $lebar <br>";
    echo "Rumus : Panjang x Lebar <br>";
    $hasil = $panjang * $lebar;
    echo "Hasil : $hasil <br>";
}

function lingkaran($jari2) {
    echo "<b> Lingkaran </b> <br>";
    echo "Jari-jari : $jari2 <br>";
    echo "Rumus : 3.14 x Jari-jari x Jari-jari <br>";
    $hasil = $jari2*$jari2*3.14;
    echo "Hasil : $hasil";
}

segitiga(10, 8);
echo "<br>";
persegi(76);
echo "<br>";
persegiPanjang(18,7);
echo "<br>";
lingkaran(100);

?>