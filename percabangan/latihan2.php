<?php

$nama = "Dhea";
$jk = "P";
$jenis = "Makanan";
$menu = "Ayam Goreng";
$jumlah = 2;


if ($jenis == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
    } elseif ($menu == "Mie Goreng") {
        $harga = 15000;
    } elseif ($menu == "Ayam Goreng") {
        $harga = 20000;
    } else {
        $harga = 0;
    }
} elseif ($jenis == "Minuman") {
    if ($menu == "Air Mineral") {
        $harga = 5000;
    } elseif ($jenis == "Fresh Tea") {
        $harga = 7000;
    } elseif ($menu == "Jus") {
        $harga = 10000;
    }
} else {
    echo "Jenis Makanan Tidak Ada";
    $harga = 0;
}

$total = $jumlah * $harga;

if ($total >= 50000) {
    $diskon = $total * 0.2;
} else {
    $diskon = 0;
}

$totalbayar = $total - $diskon;

echo "Nama : $nama";
echo "<br>";
echo "Jenis Kelamin : $jk";
echo "<br>";
echo "Jenis : $jenis";
echo "<br>";
echo "Menu : $menu";
echo "<br>";
echo "Harga : $harga";
echo "<br>";
echo "Jumlah : $jumlah";
echo "<br>";
echo "===============================";
echo "<br>";
echo "Total  : $total";
echo "<br>";
echo "Diskon : $diskon";
echo "<br>";
echo "===============================";
echo "<br>";
echo "Total Bayar : $totalbayar";






?>