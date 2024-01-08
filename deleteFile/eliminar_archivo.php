<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Archivo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta = $_POST["ruta"];

        if (file_exists($ruta)) {
            // Mostrar el nombre del archivo antes de borrarlo
            echo "<h2>Se eliminará el archivo: " . basename($ruta) . "</h2>";

            // Intentar borrar el archivo
            if (unlink($ruta)) {
                echo "<p>El archivo ha sido eliminado correctamente.</p>";
            } else {
                echo "<p>Error al intentar eliminar el archivo.</p>";
            }
        } else {
            echo "<p>El archivo no existe en la ruta especificada.</p>";
        }
    }
    ?>
</body>
</html>
