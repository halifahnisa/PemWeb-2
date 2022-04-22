<?php
include_once 'atas.php'?>
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
                    <a href="array_buah.php" class="nav-link ">
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
                    <a href="array_pop.php" class="nav-link ">
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
                    <a href="variabel_konstan.php" class="nav-link ">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel Konstan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_system.php" class="nav-link">
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
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
<a href="form_belanja.php" class="nav-link ">
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
                    <a href="form_siswa.php" class="nav-link">
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
              <li class="nav-item menu-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 4</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_lingkaran.php" class="nav-link ">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link ">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_nilaimahasiswa.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 5</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="account_bank.php" class="nav-link ">
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
            <h1 class="m-0">Data Nilai Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
              <li class="breadcrumb-item active">Data Nilai Mahasiswa</li>
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
          <div class="col-12 d-flex">
            <div class="">
            <?php
class nilaiMahasiswa {
    var $nim;    
    var $matkul;
    var $nilai;

    function __construct($nim, $matkul, $nilai) {
        $this-> nim = $nim;
        $this-> matkul = $matkul;
        $this-> nilai = $nilai;
    }
    
    
    function kelulusan($keterangan) {
        if($keterangan > 55){
            return 'Anda Lulus';
        }else{
            return 'Anda Tidak Lulus';
        };
    }
    
    function grade($keterangan){
        if ($keterangan >= 85 && $keterangan == 100) {
            return 'A';
        }else if($keterangan >= 70 && $keterangan <= 84){
            return 'B';
        }else if($keterangan >= 56 && $keterangan <= 69){
            return 'C';
        }else if($keterangan >= 36 && $keterangan <= 55){
            return 'D';
        }else if($keterangan >= 10 && $keterangan <= 35){
            return 'E';
        }else{
            return 'I'
        }
}?>
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
<?require_once 'bawah.php' 

?>