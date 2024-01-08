<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Atributos de Archivo</title>
</head>
<body>
    <?php
    function mostrarAtributosArchivo($ruta) {
        // Obtener información sobre el archivo usando stat
        $atributos = stat($ruta);

        // Mostrar información detallada
        echo "<h2>Atributos del archivo: " . basename($ruta) . "</h2>";
        echo "<pre>";
        print_r($atributos);
        echo "</pre>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta_archivo = $_POST["ruta_archivo"];

        // Verificar si el archivo existe
        if (file_exists($ruta_archivo)) {
            mostrarAtributosArchivo($ruta_archivo);
        } else {
            echo "<p>El archivo no existe en la ruta especificada.</p>";
        }
    }
    ?>
</body>
</html>
