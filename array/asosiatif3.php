<?php

$siswa = [
    [
        "nis" => "1001",
        "nama" => "dhea",
        "kelas" => "XI RPL 1",
        "eskul" => ["tari", "jurnalistik", "PMR"],

    ],
    [
        "nis" => "1002",
        "nama" => "hana",
        "kelas" => "XI RPL 1",
        "eskul" => ["EC"],
    ],
];

foreach ($siswa as $key) {
    echo "NIS : ".$key['nis']."<br>";
    echo "Nama : ".$key['nama']."<br>";
    echo "Kelas : ".$key['kelas']."<br>";
    echo "Eskul : ";
    foreach ($key['eskul'] as $eskul) {
        echo "<li>".$eskul."</li>";
    }
    echo "<br>";
    
}