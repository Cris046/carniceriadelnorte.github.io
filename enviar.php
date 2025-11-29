<?php
$conexion = new mysqli("localhost", "root", "", "contactos");

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $mensaje);

if ($stmt->execute()) {
    echo "<h2>Gracias por tu mensaje. ¡Se envió correctamente!</h2>";
} else {
    echo "Error al enviar el mensaje.";
}

$stmt->close();
$conexion->close();
?>
