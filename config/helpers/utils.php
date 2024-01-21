<?php

class Utils
{
    public static function urlActual()
    {
        $host = $_SERVER["HTTP_HOST"];
        $url = $_SERVER["REQUEST_URI"];
        $urlactual = "http://" . $host . $url;

        return $urlactual;
    }
    public static function isAdmin()
    {
        if (!isset($_SESSION['admin'])) {
            # code...
            //en caso de NO ser administrador lo regresamos a la pagina de inicio
            echo '<script> Swal.fire({ icon: "warning", title: "Error de Session!", text: "No tienes una Cuenta ADMINISTRADORA para ingresar!",})
            window.location.replace("' . baseUrl . '");
            </script>';
        } else {
            return true;
        }
    }
    public static function deleteSession($namesession)
    {
        if (isset($_SESSION[$namesession])) {
            $_SESSION[$namesession] = null; //declaramos la variable vacia
            unset($_SESSION[$namesession]);
        }
        return $namesession;
    }
    public static function sidebarCategorias()
    { }
}
