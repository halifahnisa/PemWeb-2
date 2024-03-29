<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class="col-nd-12">
    <h3>Detail Mahasiswa</h3>
    <table  border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th> 
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $siswa -> id ?></td>
                <td><?php echo $siswa -> nim ?></td>
                <td><?php echo $siswa -> nama ?></td>
                <td><?php echo $siswa -> gender ?></td>
                <td><?php echo $siswa -> tmp_lahir ?></td>
                <td><?php echo $siswa -> tgl_lahir ?></td>
                <td><?php echo $siswa -> ipk ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="align-item-center text-center">
                   <img src="<?=base_url()?>uploads/photos/<?=$siswa->id?>.jpg" width="300"/>
                   <div class="mt4">
                        <h4><?=$siswa->nama?></h4>
                        <p>Foto Mahasiswa</p>
                        <?php echo $error;?>
                        <?php echo form_open_multipart('mahasiswa/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmahasiswa" value="<?=$sisw->id?>"/>
                        <input type="submit" value="upload foto" class="btn btn-primary"/>
                   </div> 
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>