<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
        label {
            font-weight: 600;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="date"], select, textarea {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 8px;
        }
        .btn {
            border-radius: 6px;
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
        <form action="latihan12h.php" method="post">
        <div class="card">
            <div class="card-body">
                <img src="../img/smk.png" alt="Logo SMK" class="img">
            </div>
            <div class="card-footer">
                <marquee behavior="" direction="right">
                    PPDB SMK ASSALAAM BANDUNG
                </marquee>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                -Data Diri
            </div>
            <div class="card-body">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" id="" class="form-control">
                    <option selected>Pilih Jurusan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                </select>
                <br>
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                <br>
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <br>
                <input type="radio" name="jk" value="Laki-Laki" id="">
                <label for="laki">Laki-Laki</label>
                <input type="radio" name="jk" value="Perempuan" id="">
                <label for="laki">Perempuan</label>
                <br>
                <br>
                <label for="ttl" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat" placeholder="Tempat Lahir" class="form-control">
                <br>
                <label for="ttl" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control">
                <br>
                <label for="hp" class="form-label">No Handphone Siswa</label>
                <input type="text" name="nosiswa" class="form-control">
                <br>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                -Alamat Calon Pendaftar
            </div>
            <div class="card-body">
                <label for="prov" class="form-label">Provinsi</label>
                <select name="provinsi" id="" class="form-control">
                        <option selected>Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                    </select>
                <br>
                <label for="kab" class="form-label">Kabupaten/Kota</label>
                <select name="kabupaten" id="" class="form-control">
                        <option selected>Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                    </select>
                <br>
                <label for="kec" class="form-label">Kecamatan</label>
                    <select name="kecamatan" id="" class="form-control">
                        <option selected>Pilih Kecamatan</option>
                        <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                        <option value="Bojongloa Kidul">Bojongloa Kidul</option>
                        <option value="Buahbatu">Buahbatu</option>
                        <option value="Cibeunying Kaler">Cibeunying Kaler</option>
                        <option value="Cibeunying Kidul">Cibeunying Kidul</option>
                        <option value="Cibiru">Cibiru</option>
                        <option value="Cicendo">Cicendo</option>
                        <option value="Cidadap">Cidadap</option>
                        <option value="Cinambo">Cinambo</option>
                        <option value="Coblong">Coblong</option>
                        <option value="Gedebage">Gedebage</option>
                        <option value="Kiaracondong">Kiaracondong</option>
                        <option value="Lengkong">Lengkong</option>
                        <option value="Mandalajati">Mandalajati</option>
                        <option value="Panyileukan">Panyileukan</option>
                        <option value="Rancasari">Rancasari</option>
                        <option value="Regol">Regol</option>
                        <option value="Sukajadi">Sukajadi</option>
                        <option value="Sukasari">Sukasari</option>
                        <option value="Sumur Bandung">Sumur Bandung</option>
                        <option value="Ujung Berung">Ujung Berung</option>
                    </select>
                <br>
                <label for="desa"class="form-label">Desa/Kelurahan</label>
                    <select name="desa" id="" class="form-control">
                        <option selected>Pilih Desa/Kelurahan</option>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
                <br>
                <label for="almt" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id=""></textarea>
                <br>
                <label for="" class="form-label">Kode Pos</label>
                <input type="text" name="kodepos" placeholder="Kode Pos" class="form-control">
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                -Data Asal Sekolah
            </div>
            <div class="card-body">
                <label for="" class="form-label">Nama Asal Sekolah</label>
                <input type="text" name="assek" class="form-control" placeholder="Nama Asal Sekolah">
                <br>
                <label for="" class="form-label">Alamat Sekolah</label>
                <textarea name="alamatsekolah" class="form-control" id=""></textarea>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                -Data Orang Tua
            </div>
            <div class="card-body">
                <label for="namao" class="form-label">Nama Lengkap Ayah/Ibu/Wali</label>
                <br>
                <div class="row">
                    <div class="col-2">
                        <select name="ortu" id="">
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Wali">Wali</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="namaortu" placeholder="Nama Lengkap">
                    </div>
                </div>
                <br>
                <label for="kerja" class="form-label">Pekerjaan Ayah/Ibu/Wali</label>
                <input type="text" name="pekerjaan" class="form-control" id="" placeholder="Pekerjaan">
                <br>                
                <label for="kerja" class="form-label">Nomor HP yang bisa dihubungi</label>
                <input type="text" name="hportu" class="form-control" id="" placeholder="Nomor HP">
                <br>
                <label for="alamat">Alamat Lengkap</label>
                <textarea name="alamato" placeholder="Alamat Lengkap" class="form-control" id=""></textarea>
                <br>
                <input type="submit" value="Simpan & Daftar" name="save" class="btn btn-outline-primary m-2">
                <input type="reset" value="Reset" class="btn btn-outline-warning">
            </div>
        </div>
        </form>
    </div>
</body>
</html>