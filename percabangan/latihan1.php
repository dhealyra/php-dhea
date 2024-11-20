<?php

$nama = "Dhea";
$kelas = "xi rpl 1";

$bindo = 20;
$binggris = 20;
$mtk = 20;
$produktif = 20;
$rata2 = $bindo + $binggris + $mtk + $produktif;
$rata2 /=4;

echo "<table>";
echo "<tr> 
        <td>Nama</td>
        <td>:</td> 
        <td>$nama</td>
    </tr>";
echo "<tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas</td>
    </tr>";
echo "</table>";

echo "<table>";
echo "<tr>
        <td>Nilai B. Indonesia</td>
        <td>:</td>
        <td>$bindo</td>
    </tr>";

echo "<tr>
        <td>Nilai B. Inggris</td>
        <td>:</td>
        <td>$binggris</td>
    </tr>";

echo "<tr>
        <td>Nilai Matematika</td>
        <td>:</td>
        <td>$mtk</td>
    </tr>";

echo "<tr>
        <td>Nilai Produktif</td>
        <td>:</td>
        <td>$produktif</td>
    </tr>";

echo "<tr>
        <td>Rata-rata</td>
        <td>:</td>
        <td>$rata2</td>
    </tr>";

echo "</table>";

echo "<hr width='30%' align='left'>";
echo "Status : ";
if ($rata2 > 75) {
    echo "*Anda Lulus*";
} else {
    echo "*Anda Gagal*";
}


?>