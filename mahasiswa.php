<?php
require_once 'person.php';
class Mahasiswa extends Person{
    public $semester;
    public $jurusan;
    public function __construct($nama, $gender, $semeter, $jurusan){
        parent::__construct($nama, $gender);
        $this->semester = $semeter;
        $this->jurusan = $jurusan;
    }
    public function cetak(){
        parent::cetak();
        echo '<br> Semsterter : '.$this->semester;
        echo '<br> Jurusan : '.$this->jurusan;
        echo '<hr>';

}
}
?>