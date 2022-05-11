<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Mahasiswa_model','mhs1');

        // Buat object model 1 dan nilai nya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Faiz';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('Mahasiswa_model','mhs2');

        // Buat object model 2 dan nilai nya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='Nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan object yanng kita buat tadi kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim kedalam view, disana datanya diambil dari object yang kita simpan kedalam array
        $data['list_mhs'] = $list_mhs;
        //render data dan kirim data ke dalam view 
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    } 
}
?>