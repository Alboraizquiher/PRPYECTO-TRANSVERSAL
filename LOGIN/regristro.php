<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $usuario = $_POST['usuario']; // correo o número
    $password = $_POST['password'];
    
    echo "<h2>Registro exitoso</h2>";
    echo "<p>Nombre: $nombre $apellido</p>";
    echo "<p>Fecha de Nacimiento: $fecha_nacimiento</p>";
    echo "<p>Género: $genero</p>";
    echo "<p>Usuario: $usuario</p>";
}
?>
