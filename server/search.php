<?php

// Función para escanear y filtrar archivos por extensión.
function obtenerArchivos($directorio, $extension)
{
  $rutas_archivos = array();
  if (is_dir($directorio)) {
    $contenido = scandir($directorio);
    foreach ($contenido as $archivo) {
      if (pathinfo($archivo, PATHINFO_EXTENSION) === $extension) {
        $ruta_archivo = $directorio . '/' . $archivo; // Usamos '/' en lugar de DIRECTORY_SEPARATOR para rutas web
        $rutas_archivos[] = $ruta_archivo;
      }
    }
  }
  return $rutas_archivos;
}

$resultado = array(
  'php' => obtenerArchivos('../assets/php', 'php'),
  'js' => obtenerArchivos('../assets/js', 'js'),
  'css' => obtenerArchivos('../assets/css', 'css'),
);

header('Content-Type: application/json');

// print_r($rutas_archivos_php);
// Imprime el contenido como un array en formato JSON
echo json_encode($resultado, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
