<?php

class manusia {
    private $nama = "Ardi";
    Private $kelas = "SI 2";
    Private function m_nama() {
        return $this->nama;
    }
    public function tampilkan_nama() {
        return $this->m_nama();
    }
    function tampilkan_kelas() {
        return $this->kelas;
    }
}
$manusia = new manusia();
echo "Nama: ".$manusia->tampilkan_nama()."<br/>";
echo "Kelas: ".$manusia->tampilkan_nama();
?>