<?php 
class Dosen extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Dosen_model','dsn1');

        // Buat object model 1 dan nilai nya
        $this->dsn1->id=1;
        $this->dsn1->nidn='01102211';
        $this->dsn1->pendidikan='S2';

        $this->load->model('Dosen_model','dsn2');

        $this->dsn2->id=2;
        $this->dsn2->nidn='02221130';
        $this->dsn2->pendidikan='S2';

        $this->load->model('Dosen_model','dsn3');

        $this->dsn3->id=3;
        $this->dsn3->nidn='01123564';
        $this->dsn3->pendidikan='S1';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;
        
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    } 
}
?>