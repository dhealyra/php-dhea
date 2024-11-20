<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_lengkap'];
        $kelaz = $_POST['kelas'];
        
        echo "Nama : $nama";
        echo "<br>";
        echo "Kelas : $kelaz";
       
    }
?>