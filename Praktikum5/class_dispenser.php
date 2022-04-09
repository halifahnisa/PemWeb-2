<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namamMinuman;

    public function isi($vol){
        return $this->volume = $vol;
    }
    public function harSe($hs){
        return $this->harga_segelas = $hs;
    }
    public function volGe($vlg){
        return $this->volume_gelas = $vlg;
    }
    public function namMin($nm){
        return $this->nama_minuman = $nm;
    }
}