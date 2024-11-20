<?php

$provinsi = "Jawa Tengah";
$kota = "Semarang";

if($provinsi == "Jawa Barat") {
    echo "Ini Provinsi Jawa Barat<br>";  
if($kota == "Bandung") {
        echo "Selamat Datang Di Kota Bandung";
    } elseif ($kota == "Cimahi") {
        echo "Selamat Datang Di Kota Cimahi";
    } elseif($kota == "Bogor") {
        echo "Selamat Datang Di Kota Bogor";
    } elseif ($kota == "Bekasi") {
        echo "Selamat Datang Di Kota Bekasi";
    } elseif ($kota == "Depok") {
        echo "Selamat Datang Di Kota Depok";
    } else {
        echo "Kota Tidak Ada";
    }

}  elseif($provinsi == "Jawa Timur") {
        echo "Ini Provinsi Jawa Timur<br>";  
        if($kota == "Surabaya") {
            echo "Selamat Datang Di Kota Surabaya";
        } elseif ($kota == "Malang") {
            echo "Selamat Datang Di Kota Malang";
        } elseif($kota == "Mojokerto") {
            echo "Selamat Datang Di Kota Mojokerto";
        } elseif ($kota == "Kediri") {
            echo "Selamat Datang Di Kota Kediri";
        } elseif ($kota == "Pasuruan") {
            echo "Selamat Datang Di Kota Pasuruan";
        } else {
            echo "Kota Tidak Ada";
        }

} elseif($provinsi == "Jawa Tengah") {
            echo "Ini Provinsi Jawa Tengah<br>";  
            if($kota == "Semarang") {
                echo "Selamat Datang Di Kota Semarang";
            } elseif ($kota == "Pekalongan") {
                echo "Selamat Datang Di Kota Pekalongan";
            } elseif($kota == "Tegal") {
                echo "Selamat Datang Di Kota Tegal";
            } elseif ($kota == "Salatiga") {
                echo "Selamat Datang Di Kota Salatiga";
            } elseif ($kota == "Surakarta") {
                echo "Selamat Datang Di Kota Surakarta";
            } else {
                echo "Kota Tidak Ada";
            } 
        } else {
            "Provinsi Tidak Ada";
        }       
?>