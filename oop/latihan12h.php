<?php

if (isset($_POST['save'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $jekel = $_POST['jk'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $nohp = $_POST['nosiswa'];
    $email = $_POST['email'];

    $prov = $_POST['provinsi'];
    $kab = $_POST['kabupaten'];
    $kec = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $ala = $_POST['alamat'];

    $naSek = $_POST['assek'];
    $alSek = $_POST['alamatsekolah'];

    $jeOr = $_POST['ortu'];
    $naOr = $_POST['namaortu'];
    $kerOr = $_POST['pekerjaan'];
    $noOr = $_POST['hportu'];
    $alOr = $_POST['alamato'];

    class PPDB {
        public $ttl;
        public $alamat;

        public function ttLahir($tempt, $tgl){
            $this->ttl =  "$tempt, $tgl"; 
            echo "<td>".$this->ttl."</td>";
        }

        public function Alamat($al,$des, $kec, $kab, $prov){
            $this->alamat = "$al, $des, $kec, $kab, $prov";
            echo "<td>".$this->alamat."</td>";
        }
    }

    $cetak = new PPDB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: Poppins;
        }
        .container {
            max-width: 600px;
            margin-top: 30px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .card-header {
            background-color: #89cff0;
            color: black;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            padding: 10px;
            font-weight: 600;
        }
        .card-body {
            padding: 10px;
        }
        .card-footer{
            background-color: #89cff0;
            color: black;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            padding: 15px;
            font-weight: 600;
            text-align: center;
        }
        .img{
            max-width: 250px;
            display: block;
            margin: auto;
        }
    </style>
    <title>PPDB</title>
</head>
<body>
    
    <div class="container width:200px;">
        <div class="card"> 
            <div class="card-body">
                <img src="../img/smk.png" alt="Logo SMK" class="img">
            </div>
            <div class="card-footer">
                    PPDB SMK ASSALAAM BANDUNG
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                -Data Siswa
            </div>
            <div class="card-body">
                <table class="table max-width:100%;">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $jekel; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <?= $cetak->ttLahir($tempat, $tanggal) ?>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td><?= $nohp; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $email; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <?= $cetak->Alamat($ala, $desa, $kec, $kab, $prov) ?>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                -Asal Sekolah Siswa
            </div>
            <div class="card-body">
                <table class="table max-width:100%;">
                    <tr>
                        <td>Nama Sekolah</td>
                        <td>:</td>
                        <td><?= $naSek; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Sekolah</td>
                        <td>:</td>
                        <td><?= $alSek; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                -Data Orangtua 
            </div>
            <div class="card-body">
                <table class="table max-width:100%;">
                    <tr>
                        <td>Nama <?= $jeOr; ?></td>
                        <td>:</td>
                        <td><?= $naOr; ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><?= $kerOr; ?></td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td>:</td>
                        <td><?= $noOr; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $alOr; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>


<?php
}