<!-- provate a modellizzare le classi per gestire i prodotti di un magazzino,
usando i concetti di classi ed ereditarietà visti oggi a lezione. -->

<?php

//prodotto include Latte
require_once 'Prodotto.php';
require_once 'Latte.php';

//istanza latte della classe prodotto
//creo un oggetto ti tipo computer
$latte = new Prodotto('latte', 'parmalat', 2);

print_r($latte);

// per accedere "->"

echo '<pre>';
// echo 'nome prodotto: '.$latte->nome.'<br>';
// echo 'produttore: '.$latte->produttore.'<br>';
// echo 'prezzo: '.$latte->prezzo.'<br>';

//istanza latte_promo dell'estensione promozione della classe prodotto
$latte_promo = new Latte('01-01-2021');

print_r($latte_promo);
//provo a eseguire la funzione
try {
  echo $latte_promo->calcolaSconto(20);
//nel caso non siano due numeri stampo il messaggio impostato come errore
} catch (\Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

?>
