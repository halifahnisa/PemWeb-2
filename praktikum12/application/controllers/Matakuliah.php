<?php 
class Matakuliah extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Matakuliah_model');
        $matakuliah = $this->Matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    } 
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }   
    public function form(){
        //render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form'); 
        $this->load->view('layouts/footer');
    }

    public  function save(){
        $this->load->model('Matakuliah_model', 'matakuliah'); 
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data_matakuliah['nama'] = $_nama;
        $data_matakuliah['sks']=$_sks;
        $data_matakuliah['kode']=$_kode;

        if((!empty($_idedit))){
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{
            //data baru
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah','refresh');
    }
}
?>