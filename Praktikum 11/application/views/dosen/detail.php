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
    </div>
</body>
</html>