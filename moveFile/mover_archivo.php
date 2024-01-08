<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mover Archivo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta_actual = $_POST["ruta_actual"];
        $nueva_ruta = $_POST["nueva_ruta"];

        if (file_exists($ruta_actual)) {
            // Intentar mover el archivo
            if (rename($ruta_actual, $nueva_ruta)) {
                echo "<p>El archivo ha sido movido correctamente.</p>";
            } else {
                echo "<p>Error al intentar mover el archivo.</p>";
            }
        } else {
            echo "<p>El archivo no existe en la ruta especificada.</p>";
        }
    }
    ?>
</body>
