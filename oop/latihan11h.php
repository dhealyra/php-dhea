<?php

if (isset($_POST['kirim'])) {
    $mtkh = $_POST['hmtk'];
    $mtkt = $_POST['tmtk'];
    $mtkUTS = $_POST['utsmtk'];
    $mtkUAS = $_POST['uasmtk'];

    $indoh = $_POST['hindo'];
    $indot = $_POST['tindo'];
    $indoUTS = $_POST['utsindo'];
    $indoUAS = $_POST['uasindo'];

    $ingh = $_POST['hing'];
    $ingt = $_POST['ting'];
    $ingUTS = $_POST['utsing'];
    $ingUAS = $_POST['uasing'];

    $proh = $_POST['hpro'];
    $prot = $_POST['tpro'];
    $proUTS = $_POST['utspro'];
    $proUAS = $_POST['uaspro'];

    class rapot{
        public $rata2mtk;
        public $rata2indo;
        public $rata2inggris;
        public $rata2pro;
        public $rata2;
        public $grade;

        public function matematika($a, $b, $c, $d){
            $this-> rata2mtk = ($a + $b + $c + $d)/4;
            if ($this->rata2mtk >= 75) {
                $this->grade = "Tuntas";
            } else {
                $this->grade = "Tidak Tuntas";
            }
            echo "<td>".$this->rata2mtk."</td>";
            echo "<td>".$this->grade."</td>";
        }

        public function indonesia($a, $b, $c, $d){
            $this-> rata2indo = ($a + $b + $c + $d)/4;
            if ($this->rata2indo >= 75) {
                $this->grade = "Tuntas";
            } else {
                $this->grade = "Tidak Tuntas";
            }
            echo "<td>".$this->rata2indo."</td>";
            echo "<td>".$this->grade."</td>";
        }

        public function inggris($a, $b, $c, $d){
            $this ->  rata2inggris = ($a + $b + $c + $d)/4;
            if ($this->rata2inggris >= 75) {
                $this->grade = "Tuntas";
            } else {
                $this->grade = "Tidak Tuntas";
            }
            echo "<td>".$this->rata2inggris."</td>";
            echo "<td>".$this->grade."</td>";
        }

        public function produktif($a, $b, $c, $d){
            $this ->  rata2pro = ($a + $b + $c + $d)/4;
            if ($this->rata2pro >= 75) {
                $this->grade = "Tuntas";
            } else {
                $this->grade = "Tidak Tuntas";
            }
            echo "<td>".$this->rata2pro."</td>";
            echo "<td>".$this->grade."</td>";
        }

        public function keseluruhan(){
            $this->rata2 = ($this->rata2mtk + $this->rata2indo + $this->rata2inggris + $this->rata2pro)/4 ;
            echo "<td>".$this->rata2."</td>";
        }
    }

    $cetak = new rapot();


    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Raport</title>
    </head>
    <body>
        <table style="width: 500px;">
            <tr>
                <td>Mapel</td>
                <td>Harian</td>
                <td>Tugas</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>Rata-Rata</td>
                <td>Grade</td>
            </tr>
            <tr>
                <td>Matematika</td>
                <td><?= $mtkh; ?></td>
                <td><?= $mtkt; ?></td>
                <td><?= $mtkUTS; ?></td>
                <td><?= $mtkUAS; ?></td>
                <?= $cetak->matematika($mtkh, $mtkt, $mtkUTS, $mtkUAS) ?>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td><?= $indoh; ?></td>
                <td><?= $indot; ?></td>
                <td><?= $indoUTS; ?></td>
                <td><?= $indoUAS; ?></td>
                <?= $cetak->indonesia($indoh, $indot, $indoUTS, $indoUAS) ?>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td><?= $ingh; ?></td>
                <td><?= $ingt; ?></td>
                <td><?= $ingUTS; ?></td>
                <td><?= $ingUAS; ?></td>
                <?= $cetak->inggris($ingh, $ingt, $ingUTS, $ingUAS) ?>
            </tr>
            <tr>
                <td>Produktif</td>
                <td><?= $proh; ?></td>
                <td><?= $prot; ?></td>
                <td><?= $proUTS; ?></td>
                <td><?= $proUAS; ?></td>
                <?= $cetak->produktif($proh, $prot, $proUTS, $proUAS) ?>
            </tr>
            <tr>
                <th colspan="5">Rata-Rata</th>
                <td><?= $cetak->keseluruhan();?></td>
            </tr>
        </table>
    </body>
    </html>

<?php
}