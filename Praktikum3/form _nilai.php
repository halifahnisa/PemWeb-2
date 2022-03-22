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
    <h2>Form Nilai Siswa</h2>
    <hr>
    <div class="container">
    <form class="form-horizontal" method="POST" action="nilai_siswa.php">

<div class="form-group row">
  <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
  <div class="col-8">
    <input id="nama" name="nama" placeholder="nama lengkap" type="text" class="form-control">
  </div>
</div>
<div class="form-group row">
  <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
  <div class="col-8">
    <select id="matkul" name="matkul" class="custom-select">
      <option value="ddp">Dasar-dasar Pemrograman</option>
      <option value="pemweb1">PemWeb1</option>
      <option value="bd">Basis Data</option>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="nilaiuts" class="col-4 col-form-label">Nilai UTS</label> 
  <div class="col-8">
    <input id="nilaiuts" name="nilaiuts" placeholder="nilai UTS" type="text" class="form-control">
  </div>
</div>
<div class="form-group row">
  <label for="nilaliuas" class="col-4 col-form-label">Nilai UAS</label> 
  <div class="col-8">
    <input id="nilaliuas" name="nilaliuas" placeholder="nilai UAS" type="text" class="form-control">
  </div>
</div>
<div class="form-group row">
  <label for="nilaitugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
  <div class="col-8">
    <input id="nilaitugas" name="nilaitugas" placeholder="nilai tugas" type="text" class="form-control">
  </div>
</div> 
<div class="form-group row">
  <div class="offset-4 col-8">
    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>
</form>
    </div>
</body>
</html>