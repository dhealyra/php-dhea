<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Form Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat" value="bandung"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis" value="laki-laki">
                        <label for="">Laki-Laki</label>
                        <input type="radio" name="jenis" value="perempuan">
                        <label for="">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/K">SMK</option>
                            <option value="Kuliah">Kuliah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" value="Membaca">
                        <label for="">Membaca</label>
                        <input type="checkbox" name="hobi" value="Menulis">
                        <label for="">Menulis</label>
                        <input type="checkbox" name="hobi" value="Nge-push">
                        <label for="">Nge-Push</label>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita2" id="">
                            <option value="programmer">programmer</option>
                            <option value="dokter">dokter</option>
                            <option value="mekanik">mekanik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata</td>
                    <td>:</td>
                    <td><textarea name="bijak" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="KIRIM"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $tmpl = $_POST['tempat'];
        $tgl = $_POST['tanggal'];
        $jk = $_POST['jenis'];
        $alamat = $_POST['alamat'];
        $agm = $_POST['agama'];
        $penter = $_POST['pendidikan'];
        $status = $_POST['status'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cita2'];
        $kata = $_POST['bijak'];


        echo "Nama : $nama";
        echo "<br>";
        echo "Tempat Lahir : $tmpl";
        echo "<br>";
        echo "Tanggal Lahir : $tgl";
        echo "<br>";
        echo "Jenis Kelamin : $jk";
        echo "<br>";
        echo "Alamat : $alamat";
        echo "<br>";
        echo "Agama : $agm";
        echo "<br>";
        echo "Pendidikan Terakhir : $penter";
        echo "<br>";
        echo "Status : $status";
        echo "<br>";
        echo "Hobi : $hobi";
        echo "<br>";
        echo "Cita-Cita : $cita";
        echo "<br>";
        echo "Kata-Kata Bijak : $kata";

    }
?>