<?php
require_once 'abstrack2D.php';

// Kelas Segitiga
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return "Keliling segitiga tidak dapat dihitung tanpa sisi";
    }
    public function keterangan() {
        return "Dapat menghitung luas";
    }
}
?>
