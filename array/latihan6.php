<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "Pidi Bala",
        "rilis" => "20 November 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "rilis" => "2005",
        "penerbit" => "Bentang Pustaka"
    ],
    [
        "judul" => "Hujan",
        "penulis" => "Tere Liye",
        "rilis" => "2016",
        "penerbit" => "Gramedia"
    ],
    [
        "judul" => "Secret Admirer",
        "penulis" => "Aidah Harisah",
        "rilis" => "2018",
        "penerbit" => "Rainbook"
    ],
    [
        "judul" => "Girls In The Dark",
        "penulis" => "Rikako Akiyoshi",
        "rilis" => "2015",
        "penerbit" => "Gramedia" 
    ],
];


foreach ($novel as $buku) {
    echo "Judul : ".$buku['judul']."<br>";
    echo "Penulis : ".$buku['penulis']."<br>";
    echo "Tanggal Rilis : ".$buku['rilis']."<br>";
    echo "Penerbit : ".$buku['penerbit']."<br>";
    echo "<hr>";
}