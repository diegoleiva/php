// Ejemplo de autenticación simple
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
if ($usuario == "admin" && $contraseña == "secreto") {
    // Acceso permitido
} else {
    // Acceso denegado
}
