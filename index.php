<!-- Crea e modella classi, a piacere, per gestire i prodotti di un magazzino. -->
<?php

require_once 'classes/Abbigliamento.php';
require_once 'classes/Scontato.php';




$pantNewSeason = new Abbigliamento('Nuova Stagione', '40', 0);
$pantNewSeason->prezzo = 250;
$pezzipantNewSeason = $pantNewSeason->rimanenze(38);
var_dump($pantNewSeason);
// var_dump($pezzipantNewSeason);


$pantSales = new Scontato('Articolo in saldo', '38', 0, 0);
$pantSales->prezzo = 500;
$pricePantSales = $pantSales->prezzoFinale(50);
$pezziPantSales = $pantSales->rimanenze(19);

var_dump($pantSales);
var_dump($pricePantSales);
// var_dump($pezziPantSales);





?>
