<?php
if(isset($_POST['path']) && isset($_FILES['file'])) {
    $directorio_destino = $_POST['path'] . '/';
    $archivo_nombre = $_FILES['file']['name'];
    $archivo_temporal = $_FILES['file']['tmp_name'];
    $archivo_destino = $directorio_destino . $archivo_nombre;

    // Crear directorios si no existen
    if (!file_exists($directorio_destino)) {
        mkdir($directorio_destino, 0777, true);
    }

    // Mover el archivo al directorio de destino
    if(move_uploaded_file($archivo_temporal, $archivo_destino)) {
        echo "El archivo se subió correctamente a $archivo_destino";
    } else {
        echo "Error al subir el archivo. Por favor, intenta de nuevo.";
    }
} else {
    echo "Por favor, ingresa una ruta y selecciona un archivo.";
}
?>
