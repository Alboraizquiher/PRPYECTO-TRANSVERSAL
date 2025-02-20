<!--
 filepath: /c:/xampp2.0/htdocs/GitHub/PRPYECTO-TRANSVERSAL/LOGIN/registro.php -->
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


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica para guardar los datos en la base de datos
    // Por ejemplo, conectar a la base de datos y ejecutar una consulta SQL

    // Ejemplo de conexión a la base de datos y consulta SQL
    $conn = new mysqli("localhost", "root", "", "nombre_de_tu_base_de_datos");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, genero, usuario, password) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$genero', '$usuario', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}-->