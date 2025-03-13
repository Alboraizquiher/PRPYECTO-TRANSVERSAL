<?php
session_start();

$user = new UserController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['username'] == '' || $_POST['password'] == '') {
        echo 'Username or password is empty';
        header('Location: ../../login.html');
    } else {
        $user->username = $_POST['username'];
        $user->password = $_POST['password'];
    }

    if (isset($_POST['login'])) {
        $user->login();
    } else if (isset($_POST['register'])) {
        $user->register();
    } else if (isset($_GET['logout'])) {
        $user->logout();
    }
}
class UserController
{
    public $username;
    public $password;

    public function __construct() {}
    public function login()
    {
        // Iniciar sesión para poder guardar los datos del usuario.
        // Devuelve un boolean en caso de que el login sea correcto o no.

        // Que el método reciba los datos del usuario y los compare con los datos de la base de datos.
        // Se utilizan variables fijas para probar el login antes de conectarlo con una base de datos.
        if ($this->username == 'admin' && $this->password == 'admin') {
            // En caso de crear clase User. Añadir un atributo boolean como 'admin' a la clase User.
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;

            //$this->admin = true; --> Por default estará en false siempre. Se cambiará a true si el usuario es admin.
            return true;
        } else if ($this->username == 'user' && $this->password == 'user') {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;

            return true;
        } else {
            echo 'Login failed';
            header('Location: ../../login.html');
            return false;
        }
    }

    public function register()
    {
        // Que el método reciba los datos del usuario y los guarde en la base de datos.
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];

        if ($this->username != '' && $this->password != '') {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;

            echo 'Register success';
            return true;
        } else {
            echo 'Register failed';
            header('Location: ../../loginnoregr.html');
            return false;
        }
    }
    public function logout()
    {
        // Un session destroy y no hay más misterio.
        session_destroy();
        echo 'Logout success';
        header('Location: ../../html.html');
    }
}
