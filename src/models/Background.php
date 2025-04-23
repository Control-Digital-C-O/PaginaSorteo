<?php

namespace Models;

class Background
{
  private $backgroundStyle;

  public function __construct()
  {
    // Lógica para determinar el fondo, por ejemplo, según la hora del día
    $hour = date('H');
    if ($hour >= 6 && $hour < 18) {
      $this->backgroundStyle = 'day';
    } else {
      $this->backgroundStyle = 'night';
    }
  }

  public function getStyle()
  {
    return $this->backgroundStyle;
  }
}
