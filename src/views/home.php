<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <style>
        body.day {
            background-color: #ffffff;
            color: #000000;
        }
        body.night {
            background-color: #000000;
            color: #ffffff;
        }
    </style>
</head>
<body class="<?php echo $backgroundStyle; ?>">
    <h1>Bienvenido a la Página de Sorteo</h1>
    <p>Contenido de la página de inicio.
        <?php echo $backgroundStyle; ?>
    </p>
    <br>
    <h2>Aca esta lo de mercado pago.</h2>
    <p>
        <?php echo $mp?>
    </p>
</body>
</html>
