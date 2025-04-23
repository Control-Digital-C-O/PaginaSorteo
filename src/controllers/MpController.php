<?php

namespace Controllers;

use Models\MercadoPago;

class MpController
{
  public function mostrarSaldo($accessToken)
  {
    $mp = new MercadoPago($accessToken);
    $resultado = $mp->obtenerSaldo();

    header('Content-Type: application/json');
    echo json_encode($resultado);
  }
}
