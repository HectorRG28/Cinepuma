<?php
session_start();

// --- 1. Control de Acceso ---
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
    // Si no está logeado, lo envía de vuelta al login
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h2>¡Hola, **<?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?>**!</h2>
    <p>Has iniciado sesión con éxito. Este contenido está protegido.</p>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>
</html>