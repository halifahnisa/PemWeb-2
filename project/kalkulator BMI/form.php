<?php
require_once 'class_bmiPasien.php';
$pasien1 = new BmiPasien(1, "2022-01-10", "P001", "Ahmad", "Bogor","2008-08-05","ahmad@mail.com", "L", 69.8, 1.69);
$pasien2 = new BmiPasien(2, "2022-01-10", "P002", "Rina", "Bogor","2005-02-15","rina@mail.com", "P", 55.3, 1.65);
$pasien3 = new BmiPasien(3, "2022-01-11", "P003", "Lutfi", "Bogor","2001-05-05","lutfi@mail.com", "L", 45.2, 1.71);
$array = [$pasien1, $pasien2, $pasien3];

if (isset($_POST['submit'])) {
    $kode = "P004";
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenisKelamin = $_POST['gender'];
    $tanggal = date("Y-m-d");
    $beratBadan = (float)$_POST['bb'];
    $tinggiBadan = $_POST['tb']/100;
    $email = $_POST['email'];

    $pasien_baru = new BmiPasien(count($array)+1, $tanggal, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $jenisKelamin, $beratBadan, $tinggiBadan);
    $array[] = $pasien_baru;
};
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <h1>form pasien</h1>
        <hr>
        <div class="container-fluid row">
            <div class="col-6">
                <form method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-form-label">Nama :</label> 
                        <div class="col-4">
                            <input id="nama" name="nama" placeholder="Nama Panggilan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-3 col-form-label">Tempat Lahir :</label> 
                        <div class="col-4">
                            <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-3 col-form-label">Tanggal Lahir :</label> 
                        <div class="col-4">
                            <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Jenis Kelamin :</label> 
                        <div class="col-5">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                                <label for="gender_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bb" class="col-3 col-form-label">Berat Badan :</label> 
                        <div class="col-4">
                            <input id="bb" name="bb" placeholder="Kg" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tb" class="col-3 col-form-label">Tinggi Badan :</label> 
                        <div class="col-4">
                            <input id="tb" name="tb" placeholder="cm" type="number" min="0" max="300" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-3 col-form-label">Email :</label> 
                        <div class="col-4">
                            <input id="email" name="email" placeholder="Email Anda" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-3 col-4">
                            <button name="submit" type="kirim" class="btn btn-success">kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Range BMI</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>< 18.5</td>
                            <td>Kekurangan Bobot</td>
                        </tr>
                        <tr>
                            <td>18.5 - 23.9</td>
                            <td>Sehat</td>
                        </tr>
                        <tr>
                            <td>24 - 26.9</td>
                            <td>Kelebihan Bobot</td>
                        </tr>
                        <tr>
                            <td>27 - 29.9</td>
                            <td>Obesitas 1</td>
                        </tr>
                        <tr>
                            <td>30 ></td>
                            <td>Obesitas 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Gender</th>
                    <th>Berat (Kg)</th>
                    <th>Tinggi (cm)</th>
                    <th>Nilai BMI</th>
                    <th>Status BMI</th>
                </tr>
            </thead>
            <?php foreach ($array as $a) :?>
            <tbody>
                <tr>
                    <td><?= $a->pasien->id;?></td>
                    <td><?= $a->tanggal;?></td>
                    <td><?= $a->pasien->kode;?></td>
                    <td><?= $a->pasien->nama;?></td>
                    <td><?= $a->pasien->gender;?></td>
                    <td><?= $a->berat;?></td>
                    <td><?= ($a->tinggi * 100);?></td>
                    <td><?= number_format($a->nilaiBMI(),2);?></td>
                    <td><?= $a->statusBMI();?></td>
                </tr>
            </tbody>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>