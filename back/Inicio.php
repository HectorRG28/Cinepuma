<?php
// 1. Iniciar la sesión
session_start();

// 2. Comprobar si la sesión está iniciada
if ( !isset($_SESSION['usuario']) ) {
    
// 3. Redirigir esta pagina si no hay sesión iniciada
    header('Location: login.php');
    exit();
}
?>
