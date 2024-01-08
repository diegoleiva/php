<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Archivo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ruta = $_POST["ruta"];

        if (file_exists($ruta)) {
            echo "<h2>Contenido de: " . basename($ruta) . "</h2>";
            echo "<pre>" . htmlspecialchars(file_get_contents($ruta)) . "</pre>";
        } else {
            echo "<p>El archivo no existe en la ruta especificada.</p>";
        }
    }
    ?>
</body>
</html>
