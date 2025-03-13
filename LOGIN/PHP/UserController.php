<?php
class UserController
{
    // TODO: Preguntar José cómo llamar a los métodos de esta clase desde el front.
    // TODO: Preguntar José cómo redirigir al usuario a otro .html desde el back.
    /* TODO: Preguntar José si hay que crear una clase User y crearlo desde el método register. Si es así, 
            preguntar si hay que utilizar los métodos de esa nueva clase para el login (->getName y ->getPassword).*/
    public $username = $_POST['username'];
    public $password = $_POST['password'];
    function login()
    {
        // Iniciar sesión para poder guardar los datos del usuario.
        // Devuelve un boolean en caso de que el login sea correcto o no.
        session_start();

        // Que el método reciba los datos del usuario y los compare con los datos de la base de datos.
        // Se utilizan variables fijas para probar el login antes de conectarlo con una base de datos.
        if ($this->username == 'admin' && $this->password == 'admin') {
            // En caso de crear clase User. Añadir un atributo boolean como 'admin' a la clase User.
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;

            //$this->admin = true; --> Por default estará en false siempre. Se cambiará a true si el usuario es admin.
            return true;
            
        } else if ($this->username == 'user' && $this->password = 'user') {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;

            return true;
        } else {
            echo 'Login failed';
            return false;
        }
    }

    function register()
    {
        // Que el método reciba los datos del usuario y los guarde en la base de datos.
        
    }
    function logout()
    {
        // Un session destroy y no hay más misterio.
        session_destroy();
        echo 'Logout success';
    }
}
