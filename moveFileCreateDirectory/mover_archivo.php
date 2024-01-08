<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mover Archivo con Creación de Carpeta</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta_actual = $_POST["ruta_actual"];
        $nueva_ruta = $_POST["nueva_ruta"];

        if (file_exists($ruta_actual)) {
            $directorio_nuevo = dirname($nueva_ruta);

            // Verificar si el directorio de destino existe, si no, crearlo
            if (!file_exists($directorio_nuevo)) {
                if (mkdir($directorio_nuevo, 0777, true)) {
                    echo "<p>Se creó el directorio de destino correctamente.</p>";
                } else {
                    echo "<p>Error al intentar crear el directorio de destino.</p>";
                }
            }

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
</html>
