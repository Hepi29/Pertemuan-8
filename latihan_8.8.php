<?php

class manusia {
    protected $nama = "Ardi";
    var $kelas = "SI 2";
    Protected function nama() {
        return "Nama: ".$this->nama;
    }
    public function tampilkan_nama() {
        return $this->nama();
    }
    protected function tampilkan_kelas() {
        return "Kelas: ".$this->kelas;
    }
}
$manunsia = new manusia();
echo $manusia->tampilkan_nama()."<br/>";
echo $manusia->tampilkan_kelas();
?>