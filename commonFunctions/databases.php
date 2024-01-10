// Ejemplo de conexión y consulta a una base de datos MySQL
$conexion = new mysqli("localhost", "usuario", "contraseña", "basedatos");
$resultado = $conexion->query("SELECT * FROM tabla");
while ($fila = $resultado->fetch_assoc()) {
    // Procesar datos de la consulta
}
$conexion->close();
