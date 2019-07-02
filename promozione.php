<?php

require_once 'prodotto.php';

class promozione extends prodotto {

  public $sconto;

  public function calcolaSconto(){
    //controllo che i parametri passati alla funzione siano numeri
    if (!is_int($this->prezzo) && !is_int($this->sconto)) {
      throw new Exception('Is not a number');
    }
    return $this->prezzo * $this->sconto / 100 - $this->prezzo;
  }
}

?>
