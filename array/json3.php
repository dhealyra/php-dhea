<?php

$datajson = '[
    {
        "nama": "Nurul Huda",
        "alamat": "BLK"
    },
    {
        "nama": "Dhea",
        "alamat": "Bandung"
    }
    ]';

    $list = json_decode($datajson);

    foreach ($list as $key) {
        echo "Nama : {$key->nama} <br>";
        echo "Alamat : {$key->alamat} <br>";
        echo "<hr>";
    }

?>