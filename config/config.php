<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

define('MP_APPLICATION_NUMBER', $_ENV['MP_APLICATION_NUMBER']);
define('MP_USER_ID', $_ENV['MP_USER_ID']);
define('MP_PUBLIC_KEY', $_ENV['MP_PUBLIC_KEY']);
define('MP_ACCESS_TOKEN', $_ENV['MP_ACCESS_TOKEN']);
