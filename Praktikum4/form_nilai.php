<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Nilai Siswa</h2>
        <hr/>
<form method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar - Dasar Pemograman</option>
        <option value="web">Pemograman Web</option>
        <option value="basdat">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </div>
</form>

<?php
require_once 'class_nilaiMahasiswa.php'
if($_POST) {
$ms = new nilaiMahasiswa ($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    
    echo"<br/>Mata Kuliah : ".$ms->matkul;
    echo"<br/>Nilai : ".$ms->nilai;
    echo "<br/>NIM : ".$ms->nim; 
    echo "<br/>Grade : ".$ms->grade($keterangan);
    echo "<br/>Hasil : ".$ms->hasil($keterangan);

?>
</body>
</html>