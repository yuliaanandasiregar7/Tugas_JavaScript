<?php
require_once 'abstrack2D.php';

// Kelas Lingkaran
class Lingkaran extends Bentuk2D {
    public $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        return "Lingkaran";
    }

    public function luasBidang() {
        return 3.14 * pow($this->jari2, 2);
    }

    public function kelilingBidang() {
        return 2 * 3.14 * $this->jari2;
    }
    public function keterangan() {
        return "Dapat menghitung luas atau keliling";
    }
}

?>
