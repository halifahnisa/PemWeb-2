<?php 
class Matakuliah extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Matakuliah_model');
        $matakuliah = $this->Matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        
        //$this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        //$this->load->view('layouts/footer');
    } 
}
?>