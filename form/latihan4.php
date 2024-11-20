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
            <h2>Nilai Ujian Nasional</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TSM">TSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Nilai Ujian</b></td>
                </tr>
                <tr>
                    <td>Nilai Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="bindo"></td>
                </tr>
                <tr>
                    <td>Nilai Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="binggris"></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk"></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nbindo = $_POST['bindo'];
    $nbing = $_POST['binggris'];
    $nmtk = $_POST['mtk'];
    $npro = $_POST['produktif'];

    $rata2 = $nbindo + $nbing + $nmtk + $npro;
    $rata = $rata2/4;

    if ($rata > 100) {
        $status = "nge-cheat";
    } elseif ($rata > 75 ) {
        $status = "Tuntas";
    } else {
        $status = "Gagal";
    }
    
    ?>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo "$nama"; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo"$kelas"; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo "$jurusan"; ?></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>:</td>
            <td><?php echo "$nbindo"; ?></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>:</td>
            <td><?php echo "$nbing"; ?></td>
        </tr><tr>
            <td>Nilai Matematika</td>
            <td>:</td>
            <td><?php echo "$nmtk"; ?></td>
        </tr><tr>
            <td>Nilai Produktif</td>
            <td>:</td>
            <td><?php echo "$npro"; ?></td>
        </tr><tr>
            <td>Rata-rata</Rata-rata></td>
            <td>:</td>
            <td><?php echo "$rata"; ?></td>
        </tr><tr>
            <td>Status</td>
            <td>:</td>
            <td><?php echo "$status"; ?></td>
        </tr>
    </table>

    <?php
}

?>
