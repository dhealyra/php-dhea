<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center> <h1>Raport Siswa</h1> </center>
    <form action="latihan11h.php" method="post">
        <table align="center" width="500px">
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
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Nilai Matematika</b></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="hmtk" id=""></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="tmtk" id=""></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="utsmtk" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="uasmtk" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Nilai Bahasa Indonesia</b></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="hindo" id=""></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="tindo" id=""></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="utsindo" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="uasindo" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Nilai Bahasa Inggris</b></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="hing" id=""></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="ting" id=""></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="utsing" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="uasing" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><b>Nilai Produktif</b></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><input type="number" name="hpro" id=""></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><input type="number" name="tpro" id=""></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><input type="number" name="utspro" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><input type="number" name="uaspro" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Kirim" name="kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>