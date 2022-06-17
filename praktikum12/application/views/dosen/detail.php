<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detai Dosen</title>
</head>
<body>
    <div class="col-nd-12">
    <h3>Detail Dosen</h3>
    <table  border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tmp lahir</th>
                <th>Tgl lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dosen -> id ?></td>
                <td><?php echo $dosen -> nama ?></td>
                <td><?php echo $dosen -> gender ?></td>
                <td><?php echo $dosen -> tmp_lahir ?></td>
                <td><?php echo $dosen -> tgl_lahir ?></td>
                <td><?php echo $dosen -> nidn ?></td>
                <td><?php echo $dosen -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-colum align-item-center text-center ">
                   <img src="<?=base_url()?>uploads/photos/<?=$dosen->id?>.jpg" width="300"/>
                   <div class="mt-4">
                        <h4><?=$dosen->nama?></h4>
                        <p>Foto Dosen</p>
                        <?php echo $error;?>
                        <br/> <br/>
                        <a href="https://www.instagram.com/anisahalifah/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                        <br/> <br/>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?=$dosen->id?>"/>
                        <br/> <br/>
                        <input type="submit" value="upload foto" class="btn btn-primary"/>
</form>
                   </div> 
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>