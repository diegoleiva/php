<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecutar Stored Procedure</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger el parámetro enviado desde el formulario
        $parametro = $_POST["parametro"];

        // Conectar a la base de datos (ajusta los detalles de conexión según tu entorno)
        $servername = "tu_servidor";
        $username = "tu_usuario";
        $password = "tu_contraseña";
        $dbname = "tu_base_de_datos";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión a la base de datos: " . $conn->connect_error);
        }

        // Ejecutar el stored procedure
        $sql = "CALL TuStoredProcedure('$parametro')";
        $result = $conn->query($sql);

        if ($result === TRUE) {
            echo "<p>Stored Procedure ejecutado correctamente.</p>";
        } else {
            echo "<p>Error al ejecutar el Stored Procedure: " . $conn->error . "</p>";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
    }
    ?>
</body>
</html>
