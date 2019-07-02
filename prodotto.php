<?php

//creo classe prodotto
class prodotto {

  //informazioni prodotto
  public $nome;
  public $produttore;
  public $scadenza;
  public $posizione;
  public $prezzo;

  public function __construct($_nome, $_produttore, $_scadenza, $prezzo){
    //no dollaro nella variabile
    $this->nome = $_nome;
    $this->produttore = $_produttore;
    $this->scadenza = $_scadenza;
    $this->prezzo = 'euro '.$prezzo;
  }

  public function getNome(){
    return $this->nome;
  }

}

?>
