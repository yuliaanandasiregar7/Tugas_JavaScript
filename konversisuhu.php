<?php
class konversisuhu
{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan)
    {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit()
    {
        if ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Fahrenheit') {
            return ($this->besaranSuhu * 9 / 5) + 32;
        }
    }

    public function FahrenheitToCelcius()
    {
        if ($this->satuanSuhuAwal === 'Fahrenheit' && $this->satuanSuhuTujuan === 'Celcius') {
            return ($this->besaranSuhu - 32) * 5 / 9;
        }
    }

    public function CelciusToRheamur()
    {
        if ($this->satuanSuhuAwal === 'Celcius' && $this->satuanSuhuTujuan === 'Rheamur') {
            return $this->besaranSuhu * 4 / 5;
        }
    }

    public function RheamurToCelcius()
    {
        if ($this->satuanSuhuAwal === 'Rheamur' && $this->satuanSuhuTujuan === 'Celcius') {
            return $this->besaranSuhu * 5 / 4;
        }
    }

    public function cetak()
    {
        $hasilKonversi = $this->fungsiKonversi();
        echo '<tr>';
        echo "<td>{$this->satuanSuhuAwal}</td>";
        echo "<td>{$this->besaranSuhu}</td>";
        echo "<td>{$this->satuanSuhuTujuan}</td>";
        echo "<td>{$hasilKonversi}</td>";
        echo '</tr>';
    }


    private function fungsiKonversi()
    {
        switch ($this->satuanSuhuAwal) {
            case 'Celcius':
                if ($this->satuanSuhuTujuan === 'Fahrenheit') {
                    return $this->CelciusToFahrenheit();
                } elseif ($this->satuanSuhuTujuan === 'Rheamur') {
                    return $this->CelciusToRheamur();
                }
                break;
            case 'Fahrenheit':
                if ($this->satuanSuhuTujuan === 'Celcius') {
                    return $this->FahrenheitToCelcius();
                }
                break;
            case 'Rheamur':
                if ($this->satuanSuhuTujuan === 'Celcius') {
                    return $this->RheamurToCelcius();
                }
                break;
        }
        return 0;
    }
}


?>