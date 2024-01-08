<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Directorio</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_directorio = $_POST["nombre_directorio"];

        // Verificar si el directorio existe
        if (file_exists($nombre_directorio)) {
            // Intentar borrar el directorio
            if (rmdir($nombre_directorio)) {
                echo "<p>Se borró el directorio correctamente.</p>";
            } else {
                echo "<p>Error al intentar borrar el directorio. Asegúrate de que esté vacío.</p>";
            }
        } else {
            echo "<p>El directorio no existe.</p>";
        }
    }
    ?>
</body>
</html>
