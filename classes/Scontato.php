<?php
require_once 'Abbigliamento.php';

class Scontato extends Abbigliamento {

    public $sconto;

    public function __construct($brand, $_size, $_giacenza = 20, $_sconto){
    parent::__construct($brand, $_size, $_giacenza);
    }

    public function prezzoFinale($_sconto){
        $this->sconto = $_sconto;
        return $this->prezzo * (1 - $_sconto/100);
    }

}



?>
