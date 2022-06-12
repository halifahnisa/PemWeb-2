<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller{
    // Membuat method index 
    public function index(){
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getAll();
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    } 
    public function detail($id){
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getById($id);
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');  
    }
    public function form(){
        //render view
        $this->load->view('layouts/header');
        $this->load->view('dosen/form');
        $this->load->view('layouts/footer');
    }
    public  function save(){
        $this->load->model('Dosen_model', 'dosen'); 
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

        $data_dosen['nama'] = $_nama; 
        $data_dosen['gender'] = $_gender;
        $data_dosen['tmpt_lahir'] = $_tmp_lahir;
        $data_dosen['tgl_lahir'] = $_tgl_lahir;
        $data_dosen['nidn'] = $_nidn;
        $data_dosen['pendididkan'] = $_pendidikan;

        if((!empty($_idedit))){
            $data_dosen['id'] = $_idedit;
            $this->dosen->update($data_dosen);
        }else{
            //data baru
            $this->dosen->simpan($data_dosen);
        }
        redirect('dosen','refresh');
    }
     public function edit($id){
         $this->load->model('Dosen_model','dosen');
         $obj_dosen = $this->dosen->getById($id);
         $data['obj_dosen'] = $obj_dosen;
        
         $this->load->view('layouts/header');
         $this->load->view('dosen/edit', $data);
         $this->load->view('layouts/footer');
     }
    
   public function delete($id){
       $this->load->model('Dosen_model','dosen');
       //Smengecek data dosen berdasarkan id
       $data_dosen['id'] = $id;
       $this->dosen->delete($data_dosen);
       redirect('dosen','refresh');
   }
   public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }   
}
?>