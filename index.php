<?php
require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/src/controllers/HomeController.php';
require_once __DIR__ . '/src/controllers/MpController.php';
require_once __DIR__ . '/src/models/Background.php';
require_once __DIR__ . '/src/models/MercadoPago.php';

use Controllers\HomeController;
use Controllers\MpController;
use Models\Background;

// Crear instancia de la clase Background
$background = new Background();
$backgroundStyle = $background->getStyle();

// Instancia de mercado pago para mostrar en pantalla
$mpController = new MpController();
$resultado = $mpController->mostrarSaldo(MP_ACCESS_TOKEN);

// Crear instancia del controlador y llamar al método index
$controller = new HomeController();
$array = array(
    'backgroundStyle' => $backgroundStyle,
    'resultado' => $resultado,
);
$controller->index($array);
