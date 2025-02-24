

<?php
$server = '';
$username = 'root';
$password = '';
$db = 'ejemplo';

$login = new mysqli($server, $username, $password, $db);
if ($conexion->connect_error) {
    die('Error en la conexión' . $conexion->connect_error);
}else{

    echo 'Conexión exitosa';
}

?>

 