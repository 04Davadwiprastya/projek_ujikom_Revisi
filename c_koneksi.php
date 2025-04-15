<?php

class Koneksi {
    // Properti kelas
    private $server = "sql212.infinityfree.com";
     private $username = "if0_38657279";
     private $password = "galaxyallstar12"; 
     private $db = "if0_38657279_ujikom_todolist";
     public $koneksi;

    // Konstruktor kelas
    public function __construct() {
        $this->koneksi = new mysqli($this->server, $this->username, $this->password, $this->db);

        // Mengecek koneksi
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        } else {
            echo "Koneksi ke database " . $this->db . " berhasil";
        }
    }
}

// Membuat objek koneksi
$koneksi = new Koneksi();

?>
