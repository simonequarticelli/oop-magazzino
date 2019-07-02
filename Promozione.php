<?php

//funzione disponibile per più classi
trait Promozione {

  public $sconto;

  function __parents($_sconto){
    $this->sconto = $sconto;
    parent::__construct($_prezzo);
  }

  public function calcolaSconto($sconto, $prezzo){
    //controllo che i parametri passati alla funzione siano numeri
    if (!is_int($sconto) && !is_int($prezzo)) {
      throw new Exception('Is not a number');
    }
    return $prezzo * $sconto / 100;
  }
}

?>
