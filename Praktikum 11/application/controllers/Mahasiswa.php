<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
    //Membuat method index 
    public function index(){
        //akses model mahasiswa
        $this->load->model('Mahasiswa_model');
        $mahasiswa = $this->Mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        
        //render data dan kirim data ke dalam view 
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    } 

    public function detail($id){
        $this->load->model('Mahasiswa_model');
        $siswa = $this->Mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form(){
        //render view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/form'); 
        $this->load->view('layouts/footer');
    }

    public  function save(){
        $this->load->model('Mahasiswa_model', 'mahasiswa'); //1
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');

        $data_mahasiswa['nim'] = $_nim; 
        $data_mahasiswa['nama'] = $_nama;
        $data_mahasiswa['gender'] = $_gender;
        $data_mahasiswa['tmp_lahir'] = $_tmp_lahir;
        $data_mahasiswa['tgl_lahir'] = $_tgl_lahir;
        $data_mahasiswa['ipk'] = $_ipk;

        if((!empty($_idedit))){
            $data_mahasiswa['id'] = $_idedit;
            $this->mahasiswa->update($data_mahasiswa);
        }else{
            //data baru
            $this->mahasiswa->simpan($data_mahasiswa);
        }
        redirect('mahasiswa','refresh');
    }

    public function edit($id){
        $this->load->model('Mahasiswa_model','mahasiswa');
        $obj_mahasiswa = $this->mahasiswa->getById($id);
        $data['obj_mahasiswa'] = $obj_mahasiswa;
        
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/edit');
        $this->load->view('layouts/footer');
    }

    public function delete($id){
       $this->load->model('Mahasiswa_model','mahasiswa');
       //Smengecek data mahasiswa berdasarkan id
       $data_mahasiswa['id'] = $id;
       $this->mahasiswa->delete($data_mahasiswa);
       redirect('mahasiswa','refresh');
    }

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public  function upload(){
        $idmahasiswa=$this->input("idmahasiswa");
        $this->load->model('Mahasiswa_model', 'mahasiswa');
        $siswa = $this->mahasiswa->getById($_idmahasiswa);
        $data['siswa']=$siswa;

        $config['upload_path'] = './uploads/photos';
        $config['allowed_types'] = '/jpg/png';
        $config['max_size'] = 2894;
        $config['max_width'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $siswa->id;
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->ipload->data();
        }
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }  
}
?>