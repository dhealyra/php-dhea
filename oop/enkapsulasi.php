<?php

class contoh{

    public $nama = "Dhea";

    public function perkenalan() {
        echo "Assalamu'alaikum <br>";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo $cetak->nama;