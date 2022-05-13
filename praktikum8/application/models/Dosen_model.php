<?php
class Dosen_model extends CI_Model{

// Buat Property atau variable 
public $id, $nama, $nidn, $tmp_lahir, $tgl_lahir, $pendidikan;

public function getAll(){
    $query = $this->db->get('dosen');
    return $query->result();
}
public function getById($id){
    $query = $this->db->get_where('dosen',['id' => $id]);
    return $query->row();
}
}
?>