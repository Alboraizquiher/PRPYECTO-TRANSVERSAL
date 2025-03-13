<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Credenciales estáticas para la verificación
    $usuario_correcto = "admin";
    $password_correcta = "1234";

    if ($usuario == $usuario_correcto && $password == $password_correcta) {
        echo "Inicio de sesión exitoso. Bienvenido, $usuario.";
    } else {
        echo "Error en el inicio de sesión. Usuario o contraseña incorrectos.";
    }
}
?>