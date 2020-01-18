<?php
class metodos {
  public function mostrarDatos() {
    $data = file_get_contents('jugadores.json');
    $data = json_decode($data);
    return $data;
  }
}

?>