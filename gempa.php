<?php
class Gempa{
    private $lokasi;
    private $skala;

    //konstraktor untuk mengahantarkan variabel atau parameter ke dalam file lain
    public function __construct ($lokasi, $skala){
        $this->lokasi = $lokasi;
        $this->skala = $skala;
    }
    private function dampak($skala){
        $this->skala = $skala;
        if ($skala >= 0  && $skala <= 2)
        $dampak = 'Tidak terasa';
    else if ($skala > 2 && $skala <= 4)
    $dampak = 'Bangunan retak retak';
    else if ($skala > 4 && $skala <= 6)
    $dampak = 'Bangunan roboh';
    else $dampak = 'berpotensi tsunami';
    return $dampak;
}
public function cetak(){
    echo 'Lokasi : '.$this->lokasi;
    echo '<br> skala : '.$this->skala;
    echo '<br> Dampak : '.$this->dampak($this->skala);
    echo '<br>';
}


}
?>