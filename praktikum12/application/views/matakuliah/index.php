<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<?php
$username = $this->session->userdata('username');
if($username){
    echo "<h2> Selamat Datang $username<?h2>";
}
?>
<body>
<div class="col-md-12">
    <h3>Matakuliah</h3>
    <table  border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th> 
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mk){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mk -> nama ?></td>
                <td><?php echo $mk -> sks ?></td>
                <td><?php echo $mk -> kode ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= "<?php echo base_url('index.php/matakuliah/form')?>" class="btn btn-primary btn-lg active">Tambah</a>
</div>
</body>
</html>