<?php

$pemilik = [
    [
        "Nama" => "Safitri",
        "Buah" => [
            [
                "namabuah" => ["Anggur"],
                "jenis" => ["Anggur Hijau", "Anggur Putih"],
            ]
        ]
    ],
    [
        "Nama" => "Rahman",
        "Buah" => [
            [
                "namabuah" => ["Alpukat"],
                "jenis" => ["Alpukat Mentega", "Alpukat Biasa"],
            ],
            [
                "namabuah" => ["Apel"],
                "jenis" => ["Apel Hijau", "Apel Merah"],
            ]
        ]
    ],
];

foreach ($pemilik as $key) {
    echo "Nama Pemilik : ".$key["Nama"]."<br>";
    echo "Daftar Buah Kesukaan : <br>";
    
    foreach ($key['Buah'] as $buah) {
       
        foreach ($buah['namabuah'] as $namabuah) {
            echo "<li> ".$namabuah."</li>";
        }
        
        foreach ($buah['jenis'] as $jenis) {
            echo "<ol> - ".$jenis."</ol>";
        }
    }
    
    echo "<br>";
}
?>