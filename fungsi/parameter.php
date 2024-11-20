<?php

function biodata($nama, $ttl, $tgl, $jk, $agama, $alamat, $hobi){
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $ttl<br>";
    echo "Tanggal Lahir : $tgl <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi <br>";
}

biodata("Dhea", "Bandung", "24 Februari", "Perempuan", "Islam", "Cangkuang", "Ngegalau");

echo "<br> <hr> <br>";

function menghitung($ang1, $ang2) {
    echo "Bilangan 1 : $ang1 <br>";
    echo "Bilangan 2 : $ang2 <br>";
    $hasil = $ang1 + $ang2;
    echo "Hasilnya : $hasil";
}

menghitung(10,20);

?>