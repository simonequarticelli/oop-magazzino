<?php

trait Debug{

  public function srampa(){

    $type = get_class($this);
    $as_array = get_object_vars($this);

    echo '<pre';
    echo 'tipo = ' . $type . '<br>';
    foreach ($as_array as $key => $value) {
      echo 'Proprietà: ' . $key . 'Valore: ' . $value;
    }
    echo '</pre';

  }
}

?>
