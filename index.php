<!-- provate a modellizzare le classi per gestire i prodotti di un magazzino,
usando i concetti di classi ed ereditarietà visti oggi a lezione. -->

<?php

require_once 'prodotto.php';
require_once 'promozione.php';

//istanza latte della classe prodotto
$latte = new prodotto('latte', 'parmalat', '01-01-2021', 2);

echo 'nome prodotto: '.$latte->getNome().'<br>';
echo 'produttore: '.$latte->produttore.'<br>';
echo 'data scandenza: '.$latte->scadenza.'<br>';
echo 'prezzo: '.$latte->prezzo.'<br>';

//istanza latte_promo dell'estensione promozione della classe prodotto
$latte_promo = new promozione();

$latte_promo->sconto = 20;

//provo a eseguire la funzione
try {
  echo $latte_promo->calcolaSconto();
//nel caso non siano due numeri stampo il messaggio impostato come errore
} catch (\Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
}

?>
