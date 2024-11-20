<?php

class ppdb{

    public function data_diri($jurusan, $nama, $jk, $tempat, $tgl, $nohp, $email){
        echo "Jurusan : $jurusan <br>";
        echo "Nama Lengkap : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir : $tempat <br>";
        echo "Tanggal Lahir : $tgl <br>";
        echo "No handphone : $nohp <br>";
        echo "Email : $email <br>";
    }

    public function alamat($prov, $kab, $kec, $desa, $alamat, $pos){
        echo "Provinsi : $prov <br>";
        echo "Kabupaten : $kab <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa/Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode pos : $pos <br>";
    }

    public function asal_sekolah($namsek, $alsek) {
        echo "Nama Sekolah : $namsek <br>";
        echo "Alamat Sekolah : $alsek <br>";
    }

    public function orang_tua($namor, $kerja, $nohor, $alor){
        echo "Nama Orang Tua Ayah/Ibu/Wali : $namor <br>";
        echo "Pekerjaan Ayah/Ibu/Wali : $kerja <br>";
        echo "No Handphone : $nohor <br>";
        echo "Alamat : $alor <br>";
    }

}

$cetak = new ppdb();
echo "<b> Data Diri </b>";
echo "<br>";
echo $cetak->data_diri("RPL", "Dhea", "Perempuan", "Bandung", "24 Februari 2008", "08227588", "dhea@gmail");
echo "<hr>";
echo "<b> Alamat Calon Pendaftar</b>";
echo "<br>";
echo $cetak->alamat("Jawa Barat", "Bandung", "Dayeuhkolot", "Cangkuang Kulon", "Jl. Bahari", 30222);
echo "<hr>";
echo "<b> Data Asal Sekolah </b>";
echo "<br>";
echo $cetak->asal_sekolah("SMPN 2 Margahayu", "Gang Nata");
echo "<hr>";
echo "<b> Data Orang Tua </b>";
echo "<br>";
echo $cetak->orang_tua("Lin", "Pegawai Swasta", "08578357", "Cikambuy");


?>