<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Directorio con Contenido</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_directorio = $_POST["nombre_directorio"];

        // Verificar si el directorio existe
        if (file_exists($nombre_directorio)) {
            // Función personalizada para borrar directorios recursivamente
            function borrarDirectorio($dir) {
                $directorio = opendir($dir);
                
                while (($archivo = readdir($directorio)) !== false) {
                    if ($archivo != "." && $archivo != "..") {
                        $ruta = $dir . "/" . $archivo;
                        
                        if (is_dir($ruta)) {
                            borrarDirectorio($ruta);
                        } else {
                            unlink($ruta);
                        }
                    }
                }
                
                closedir($directorio);
                
                rmdir($dir);
            }

            // Llamar a la función para borrar el directorio y su contenido
            borrarDirectorio($nombre_directorio);

            echo "<p>Se borró el directorio y su contenido correctamente.</p>";
        } else {
            echo "<p>El directorio no existe.</p>";
        }
    }
    ?>
</body>
</html>
