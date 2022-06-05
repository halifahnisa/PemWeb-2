<?php
class Matakuliah_model extends CI_Model{

// Buat Property atau variable 
public $id, $nama, $sks, $kode;

public function getAll(){
    $query = $this->db->get('matakuliah');
    return $query->result();
}
}
?>