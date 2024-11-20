<?php

class gajiKaryawan {

    public $gaji;
    public $tunj;
    public $total;
    public $totalgaji;

    public function jabatan($nama, $jabatan) {
        switch ($jabatan) {
            case 'Direktur':
                $this->gaji = 10000000;
                break;

            case 'Manager':
                $this->gaji = 7500000;
                break;
            
            case 'Karyawan':
                $this->gaji = 5000000;
                break;

            case 'OB':
                $this->gaji = 2500000;
                break;
            
            default:
                $this->gaji = 0;
                break;
        }

        echo "Nama Karyawan : $nama <br>";
        echo "Jabatan : $jabatan <br>";
        echo "Gaji pokok : $this->gaji <br>";
    }

    public function tunjangan($pendidikan) {
        switch ($pendidikan) {
            case 's1':
                $this->tunj = 1000000;
                break;

            case 'SMA':
                $this->tunj = 750000;
                break;

            case 'SMP':
                $this->tunj = 500000;
                break;

            case 'SD':
                $this->tunj = 250000;
            
            default:
                $this->tunj = 0;
                break;
        }

        echo "Pendidikan : $pendidikan <br>";
        echo "Tunjangan Pendidikan : $this->tunj";
    }

    public function potongan($tabung, $pinjam){
        $this->total = $tabung + $pinjam;
        echo "Tabungan : $tabung <br>";
        echo "Pinjaman : $pinjam <br>";
        echo "Total Potongan : $this->total <br>";
    }

    public function Total(){
        $this->totalgaji = $this->gaji + $this->tunj - $this->total;
        echo "Total Gaji Bersih : $this->totalgaji";
    }
}

$cetak = new gajiKaryawan();

echo "<center><h3> Penggajihan Karyawan </h3></center>";
echo "<br>";
echo "<br>";
echo "<b> Gaji Pokok </b>";
echo "<br>";
echo "<br>";
echo $cetak->jabatan("Dhea", "Direktur");
echo "<hr>";
echo "<br>";
echo "<b> Tunjangan </b>";
echo "<br>";
echo "<br>";
echo $cetak->tunjangan("SMA");
echo "<hr>";
echo "<br>";
echo "<b> Potongan Gaji </b>";
echo "<br>";
echo "<br>";
echo $cetak->potongan(50000, 200000);
echo "<hr>";
echo "<br>";
echo "<b> Total Gaji Bersih </b>";
echo "<br>";
echo "<br>";
echo $cetak->Total();
echo "<hr>";




?>