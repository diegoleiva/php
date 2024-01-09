<?php
// Directorio donde se almacenarán los archivos
$directorio_destino = 'tu_directorio_destino/';

// Verificar si se envió un archivo
if(isset($_FILES['file'])) {
    $archivo_nombre = $_FILES['file']['name'];
    $archivo_temporal = $_FILES['file']['tmp_name'];
    $archivo_destino = $directorio_destino . $archivo_nombre;

    // Mover el archivo al directorio de destino
    if(move_uploaded_file($archivo_temporal, $archivo_destino)) {
        echo "El archivo se subió correctamente a $archivo_destino";
    } else {
        echo "Error al subir el archivo. Por favor, intenta de nuevo.";
    }
} else {
    echo "Por favor, selecciona un archivo.";
}
?>
