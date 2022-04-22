<?php
include_once 'atas.php';?>
<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                 Tugas Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 1</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="array_buah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Buah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_fungsi.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Fungsi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_pop.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Pop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_push.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Push</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_shift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Shift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_siswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Siswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_unshift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Unshift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_konstan.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel Konstan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_system.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel System</p>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="variabel_user.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">

                    <a href="form_belanja.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Belanja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_nilai.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_siswa.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 3</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="atas.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Atas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tampilan.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>tampilan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="bawah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>bawah</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 4</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_lingkaran.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_nilaimahasiswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 5</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="account_bank.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Account Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dispenser.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Dispenser</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Kalkulator Sehat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">kalkulator_sehat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-body row">
          <div class="d-flex row">
          <div class="card-body">
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
                  <div class="container-fluid row">
                      <div class="col-6">
                          <form method="POST">
                              <div class="form-group row">
                                  <label for="nama" class="col-5 col-form-label">Nama :</label> 
                                  <div class="col-6">
                                      <input id="nama" name="nama" placeholder="Nama Panggilan" type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tmp_lahir" class="col-5 col-form-label">Tempat Lahir :</label> 
                                  <div class="col-6">
                                      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tempat Lahir" type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tgl_lahir" class="col-5 col-form-label">Tanggal Lahir :</label> 
                                  <div class="col-6">
                                      <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" type="date" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-5">Jenis Kelamin :</label> 
                                  <div class="col-7">
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
                                  <label for="bb" class="col-5 col-form-label">Berat Badan :</label> 
                                  <div class="col-6">
                                      <input id="bb" name="bb" placeholder="Kg" type="text" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="tb" class="col-5 col-form-label">Tinggi Badan :</label> 
                                  <div class="col-6">
                                      <input id="tb" name="tb" placeholder="cm" type="number" min="0" max="300" class="form-control">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="email" class="col-5 col-form-label">Email :</label> 
                                  <div class="col-6">
                                      <input id="email" name="email" placeholder="Email Anda" type="text" class="form-control">
                                  </div>
                              </div> 
                              <div class="form-group row">
                                  <div class="offset-5 col-5">
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
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>



<?php
require_once 'bawah.php';
?>