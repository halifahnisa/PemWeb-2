<?php 
class Matakuliah extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Matakuliah_model','mk1');

        $this->mk1->id=1;
        $this->mk1->nama='Basis Data';
        $this->mk1->sks='3';
        $this->mk1->kode='2';

        $this->load->model('Dosen_model','mk2');

        $this->mk2->id=2;
        $this->mk2->nama='PemWeb';
        $this->mk2->sks='2';
        $this->mk2->kode='5';

        $this->load->model('Dosen_model','mk3');

        $this->mk3->id=3;
        $this->mk3->nama='Jaringan Komputer';
        $this->mk3->sks='2';
        $this->mk3->kode='7';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;
        
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    } 
}
?>