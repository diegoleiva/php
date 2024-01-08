<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renombrar Archivo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta_actual = $_POST["ruta_actual"];
        $nuevo_nombre = $_POST["nuevo_nombre"];

        if (file_exists($ruta_actual)) {
            $directorio = dirname($ruta_actual);
            $nueva_ruta = $directorio . '/' . $nuevo_nombre;

            // Intentar renombrar el archivo
            if (rename($ruta_actual, $nueva_ruta)) {
                echo "<p>El archivo ha sido renombrado correctamente.</p>";
            } else {
                echo "<p>Error al intentar renombrar el archivo.</p>";
            }
        } else {
            echo "<p>El archivo no existe en la ruta especificada.</p>";
        }
    }
    ?>
</body>
</html>
