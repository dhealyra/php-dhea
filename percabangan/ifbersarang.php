<?php

$jurusan = "RPL";
$kelas = "10 RPL";

if($jurusan == "RPL") {
    echo "Ini Jurusan RPL<br>";  
    if($kelas == "10 RPL") {
        echo "Ini Kelas 10 RPL";
    } elseif ($kelas == "11 RPL") {
        echo "Ini Kelas 11 RPL";
    } elseif($kelas == "12 RPL") {
        echo "Ini Kelas 12 RPL";
    } else {
        echo "Kelas Tidak Tersedia";
    }

} elseif($jurusan == "TKRO") {
    echo "Ini Jurusan TKRO<br>";
    if($kelas == "10 TKRO") {
        echo "Ini Kelas 10 TKRO";
    } elseif ($kelas == "11 TKRO") {
        echo "Ini Kelas 11 TKRO";
    } elseif($kelas == "12 TKRO") {
        echo "Ini Kelas 12 TKRO";
    } else {
        echo "Kelas Tidak Tersedia";
    }

} elseif($jurusan == "TBSM") {
    echo "Ini Jurusan TBSM<br>";
    if($kelas == "10 TBSM") {
        echo "Ini Kelas 10 TBSM";
    } elseif ($kelas == "11 TBSM") {
        echo "Ini Kelas 11 TBSM";
    } elseif($kelas == "12 TBSM") {
        echo "Ini Kelas 12 TBSM";
    } else {
        echo "Kelas Tidak Tersedia";
    }

} else {
    echo "Jurusan Tidak Ada";
}
?>