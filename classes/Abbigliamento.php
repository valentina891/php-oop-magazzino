<?php
class Abbigliamento {
    public $marca;
    public $modello;
    public $taglia;
    public $colore;
    public $prezzo;
    public $giacenza;

    //inserisco le proprietà che voglio abbiamo valori di DEFAULT
    public function __construct($brand, $_size){
        $this->marca = $brand;
        $this->taglia = $_size;
        $this->giacenza = $_giacenza;
    }
    //decido che nel magazzino ci devono sempre essere min. 20 pezzi per capo:
    public function rimanenze($_giacenza){
        $this->giacenza = $_giacenza;
        if ($this->giacenza < 20) {
            echo "Attenzione, disponibilità inferiore al minimo";
        }
        return $this->giacenza;
    }

}
