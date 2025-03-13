<?php

  $server = "127.0.0.1";
  $user = "root";
$password = "";
$database = "auth_db";
$port = "3306";

$connection = new mysqli($server, $user, $password, $database,$port);

if ($connection->connect_error) {
    die("No funciona na " . $connection->connect_error);
}else{
    echo "Conectado exitosamente";
}
?>