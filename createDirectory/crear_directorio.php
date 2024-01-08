<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Directorio</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_directorio = $_POST["nombre_directorio"];

        // Verificar si el directorio ya existe
        if (file_exists($nombre_directorio)) {
            echo "<p>El directorio ya existe.</p>";
        } else {
            // Intentar crear el directorio
            if (mkdir($nombre_directorio, 0777, true)) {
                echo "<p>Se creó el directorio correctamente.</p>";
            } else {
                echo "<p>Error al intentar crear el directorio.</p>";
            }
        }
    }
    ?>
</body>
</html>
