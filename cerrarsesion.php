<?php
// 1. Iniciar la sesión para poder DESTRUIRLA.
session_start();

// 2. Destruir la sesión
session_destroy();

// 3. Redirigir al formulario de login
header('Location: Login.php');
exit();
?>