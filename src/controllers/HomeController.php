<?php

namespace Controllers;

class HomeController
{
  public function index($array)
  {
    $backgroundStyle = $array['backgroundStyle'];
    $mp = $array['resultado'];
    // Lógica para manejar la solicitud de la página de inicio
    // Por ejemplo, cargar datos necesarios y renderizar la vista
    require_once __DIR__ . '/../views/home.php';
  }
}
