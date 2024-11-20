<?php

$datanov = '[
    {
        "No" : 1001,
        "judul" : "Dilan 1991",
        "Genre" : "Romance",
        "penulis" : "Pidi Bala",
        "rilis" : "20 November 2024",
        "penerbit" : "Airlangga"
    },
    {
        "No" : 1002,
        "judul" : "Laskar Pelangi",
        "Genre" : "Pendidikan",
        "penulis" : "Andrea Hirata",
        "rilis" : "2005",
        "penerbit" : "Bentang Pustaka"
    },
    {
        "No" : 1003,
        "judul" : "Hujan",
        "Genre" : "Petualangan",
        "penulis" : "Tere Liye",
        "rilis" : "2016",
        "penerbit" : "Gramedia"
    },
    {
         "No" : 1004,
         "judul" : "Secret Admirer",
        "Genre" : "Romance",
        "penulis" : "Aidah Harisah",
        "rilis" : "2018",
        "penerbit" : "Rainbook"
    },
    {
        "No" : 1005,
        "judul" : "Girls In The Dark",
        "Genre" : "Romance",
        "penulis" : "Rikako Akiyoshi",
        "rilis" : "2015",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1006,
        "judul" : "Harry Potter",
        "Genre" : "Petualangan",
        "penulis" : "J.K Rowling",
        "rilis" : "1997",
        "penerbit" : "Bloomsbury" 
    },
    {
        "No" : 1007,
        "judul" : "The Great Gatsby",
        "Genre" : "Drama",
        "penulis" : "F. Scott Fitzgerald ",
        "rilis" : "1925",
        "penerbit" : "Charles Scribners Sons " 
    },
    {
        "No" : 1008,
        "judul" : "Bumi Manusia",
        "Genre" : "Sejarah",
        "penulis" : "Pramoedya Ananta Toer",
        "rilis" : "1980",
        "penerbit" : "Hasta Mitra" 
    },
    {
        "No" : 1009,
        "judul" : "Supernova",
        "Genre" : "Ilmiah",
        "penulis" : "Dee Lestari",
        "rilis" : "2001",
        "penerbit" : "KPG" 
    },
    {
        "No" : 1010,
        "judul" : "Perahu Kertas",
        "Genre" : "Drama",
        "penulis" : "Dee Lestari",
        "rilis" : "2009",
        "penerbit" : "Bentang Pustaka" 
    },
    {
        "No" : 1011,
        "judul" : "Lelaki Harimau",
        "Genre" : "Drama",
        "penulis" : "Eka Kurniawan",
        "rilis" : "2004",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1012,
        "judul" : "Ayat-Ayat Cinta",
        "Genre" : "Romance",
        "penulis" : "Habiburrahman El Shirazy",
        "rilis" : "2004",
        "penerbit" : "Republika" 
    },
    {
        "No" : 1013,
        "judul" : "Marmut Merah Jambu ",
        "Genre" : "Komedi",
        "penulis" : "Raditya Dika",
        "rilis" : "2010",
        "penerbit" : "Bukune" 
    },
    {
        "No" : 1014,
        "judul" : "Negeri 5 Menara",
        "Genre" : "Inspirasi",
        "penulis" : "Ahmad Fuadi",
        "rilis" : "2009",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1015,
        "judul" : "Ronggeng Dukuh Paruk",
        "Genre" : "Sejarah",
        "penulis" : "Ahmad Tohari",
        "rilis" : "1982",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1016,
        "judul" : "5 CM",
        "Genre" : "-",
        "penulis" : "Donny Dhirgantoro",
        "rilis" : "2005",
        "penerbit" : "Grasindo" 
    },
    {
        "No" : 1017,
        "judul" : "Gadis Pantai",
        "Genre" : "Sosial",
        "penulis" : "Pramoedya Ananta Toer",
        "rilis" : "1982",
        "penerbit" : "Hasta Mitra" 
    },
    {
        "No" : 1018,
        "judul" : "Pulang",
        "Genre" : "Sejarah",
        "penulis" : "Leila S. Chudori ",
        "rilis" : "2012",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1019,
        "judul" : "Cantik Itu Luka",
        "Genre" : "Drama",
        "penulis" : "Eka Kurniawan",
        "rilis" : "2002",
        "penerbit" : "Gramedia" 
    },
    {
        "No" : 1020,
        "judul" : "Tentang Kamu",
        "Genre" : "Inspirasi",
        "penulis" : "Tere Liye",
        "rilis" : "2016",
        "penerbit" : "Republika" 
    }   
]';

$novel = json_decode($datanov);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> <h3>Kumpulan Novel Terbaru</h3> </center>
    <table>
        <?php
            foreach ($novel as $key) {
                ?>
                    <tr>
                        <td>No</td>
                        <td>:</td>
                        <td><?php echo "{$key->No}"; ?> </td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td><?php echo "{$key->judul}"; ?> </td>
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td>:</td>
                        <td><?php echo "{$key->Genre}"; ?> </td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td>:</td>
                        <td><?php echo "{$key->penulis}"; ?> </td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td><?php echo "{$key->penerbit}"; ?> </td>
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td>:</td>
                        <td><?php echo "{$key->rilis}"; ?> </td>
                    </tr>
                    <tr>
                        <td>-----------</td>
                        <td>-</td>
                        <td>---------------------------</td>
                    </tr>
                    
                    
                    
        <?php
            }
        ?>
    </table>
</body>
</html>

<?php
