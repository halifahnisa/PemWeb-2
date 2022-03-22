<?php
    require_once 'libfungsi.php';
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $nama_kuliah = $_POST['matkul'];
    $uts = $_POST['nilaiuts'];
    $uas = $_POST['nilaliuas'];
    $tugas = $_POST['nilaitugas'];
    $total = $uts + $uas + $tugas;
    $_nilai = $total/3;
    $hasil_ujian = kelulusan($_nilai);
    $grade = grade($_nilai);

    echo "Nama : $nama_siswa";
    echo "<br /> Mata Kuliah : $nama_kuliah";
    echo "<br /> Nilai UTS : $uts";
    echo "<br /> Nilai UAS : $uas";
    echo "<br /> Nilai Tugas : $tugas";
    echo "<br /> Keterangan : $hasil_ujian";
    echo "<br /> Grade : $grade";
    echo "<br /> Date Telah di $proses";
?>