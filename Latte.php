<?php

require_once 'Prodotto.php';
require_once 'Promozione.php';

//sottoclasse Latte
class Latte extends prodotto{

  use Promozione;

  public $scadenza;

  function __construct($_scadenza){
    $this->scadenza = $_scadenza;
  }
}

?>
