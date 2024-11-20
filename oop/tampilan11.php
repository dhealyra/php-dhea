<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Background for the entire page */
        body {
            font-family: Poppins;
        }

        /* Style for the main container */
        .container {
            margin-top: 30px;
            max-width: 600px;;
        }

        /* Main title styling */
        h2 {
            color: #133E87;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Card styling */
        .card {
            background-color: white;
            border: 1px solid #133E87;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        /* Card header styling */
        .card-header {
            background-color: #B7E0FF;
            color: 133E87;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #133E87;
        }

        /* Form labels and input fields */
        .form-label {
            color: black;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #133E87;
            border-radius: 5px;
        }

        /* Button styling */
        .btn-outline-primary {
            background-color: #C4E1F6;
            color: black;
            font-weight: bold;
            border-color: #133E87;
            transition: background-color 0.3s;
        }

        .btn-outline-primary:hover {
            background-color: #d63384;
            border-color: #133E87;
        }
    </style>
    <title>Form Raport</title>
</head>
<body>
    <form action="tampilan11h.php" method="post">
    <div class="container">
        <h2>Raport Siswa</h2>

        <div class="card">
        <div class="card-header">
            Raport Siswa
        </div>
        <div class="card-body">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">

            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="kelas">

            <label for="jurusan" class="form-label">Jurusan</label>
            <select name="jurusan" class="form-control" id="">
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
            </select>
            
            <br>

            <div class="card">
                <div class="card-header">
                    Nilai Matematika
                </div>
                <div class="card-body">
                    <label for="nilai" class="form-label">Nilai Harian</label>
                    <input type="number" name="hmtk" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai Tugas</label>
                    <input type="number" name="tmtk" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UTS</label>
                    <input type="number" name="utsmtk" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UAS</label>
                    <input type="number" name="uasmtk" id="" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Nilai Bahasa Indonesia
                </div>
                <div class="card-body">
                    <label for="nilai" class="form-label">Nilai Harian</label>
                    <input type="number" name="hindo" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai Tugas</label>
                    <input type="number" name="tindo" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UTS</label>
                    <input type="number" name="utsindo" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UAS</label>
                    <input type="number" name="uasindo" id="" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Nilai Bahasa Inggris
                </div>
                <div class="card-body">
                    <label for="nilai" class="form-label">Nilai Harian</label>
                    <input type="number" name="hing" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai Tugas</label>
                    <input type="number" name="ting" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UTS</label>
                    <input type="number" name="utsing" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UAS</label>
                    <input type="number" name="uasing" id="" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Nilai Produktif
                </div>
                <div class="card-body">
                    <label for="nilai" class="form-label">Nilai Harian</label>
                    <input type="number" name="hpro" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai Tugas</label>
                    <input type="number" name="tpro" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UTS</label>
                    <input type="number" name="utspro" id="" class="form-control">
                    <label for="nilai" class="form-label">Nilai UAS</label>
                    <input type="number" name="uaspro" id="" class="form-control">
                </div>
            </div>
            <input type="submit" alue="Kirim" name="kirim" class="btn btn-outline-primary m-2">
        </div>
    </div>
    </form>
</body>
</html>