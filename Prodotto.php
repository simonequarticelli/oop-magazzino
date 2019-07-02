<?php

//creo classe prodotto
class Prodotto {

  //informazioni prodotto
  //variabili d'istanze
  public $nome;
  public $produttore;
  public $posizione;
  public $prezzo;
  public $id;

  function __construct($_nome, $_produttore, $prezzo){
    //no dollaro nella variabile
    $this->nome = $_nome;
    $this->produttore = $_produttore;
    $this->prezzo = 'euro '.$prezzo;
  }

}

?>
