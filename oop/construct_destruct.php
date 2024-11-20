<?php

class Kucing {
    
    // method awal
    public function __construct(){
        echo "Halo, saya kucing <br>";
    }

    // method di akhir
    public function __destruct(){
        echo "meoowww";
    }
}

$cetak = new Kucing;
?>