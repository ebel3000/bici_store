<?php

class Autenticacion
{

    /* Verifica las credenciales del usuario y de ser correcto guarda los datos en una sección */


    public function log_in(string $usuario, string $password)
    {
        //Instanciar la clase Usuario con el metodo
        $datosUsuario = (new Usuario())->usuario_x_username($usuario);


        //Comprobaciones si el usuario existe, y si la contraseña es correcta
        //Si confirma que la contraseña es igual, crea la sesion (datosLogin)

        if ($datosUsuario) {
            if (password_verify($password, $datosUsuario->getPassword())) {
                $datosLogin['username'] = $datosUsuario->getNombre_usuario();
                $datosLogin['id'] = $datosUsuario->getId();
                $_SESSION['loggedIn'] = $datosLogin;
                return TRUE;
            } else {
                return False;
            }
        } else {
            return False;
        }
    }

    //Metodo LogOut

    public function log_out()
    {
        if (isset($_SESSION['loggedIn'])) {
            unset($_SESSION['loggedIn']);
        }
    }


    //Verificar si el usuario está logeado


    public function verify()
    {
        if (isset($_SESSION['loggedIn'])) {
            return TRUE;
        } else {
            header('Location: index.php?sec=login');
        }
    }
}
