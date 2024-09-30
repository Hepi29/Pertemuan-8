<?php

class bangun_ruang {
    public $user;
    public $pass;
    public $bangun;

    function __construct() {
        echo "Selamat datang di aplikasi Bangun Ruang CLI\n";
        echo "Silahkan login terlebih dahulu:\n";
    }

    public function login() {
        echo "Masukan Username: ";
        $this->user = trim(fgets(STDIN));
        echo "Masukan Password: ";
        $this->pass = trim(fgets(STDIN));

        if ($this->user = "admin" && $this->pass = "1234") {
            $this->aplikasi();
        } else {
            echo "Mohon maaf, username atau password salah!";
            $this->login();
        }
    }

    public function aplikasi() {
        echo "Selamat datang anda telah berhasil login di aplikasi Bangun Ruang CLI\n";
        echo "Silahkan pilih salah satu bangun ruang:\n";
        echo "1. persegi\n";
        echo "2. persegi panjang\n";
        echo "3. segitiga\n";
        echo "4. lingkaran\n";
        echo "5. belah ketupat\n";

        echo "Pilih nomor bangun ruang: ";
        $this->bangun = trim(fgets(STDIN));

        switch ($this->bangun) {
            case 1:
                echo "Bangun Ruang: Persegi";
                break;
            case 2:
                echo "Bangun Ruang: Persegi Panjang";
                break;
            case 3:
                echo "Bangun Ruang: Segitiga";
                break;
            case 4:
                echo "Bangun Ruang: Lingkaran";
                break;
            case 5:
                echo "Bangun Ruang: Belah Ketupar";
                break;
            case 6:
                echo "Bangun Ruang Tidak Ada!";
        }
    }

    public function persegi() {
        
    }
}
?>