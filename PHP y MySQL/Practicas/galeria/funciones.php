<?php
    function conexion($tabla, $usuario, $pass){
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;	
        } catch (PDOException $e) {
            return false;
        }
    }

    #Limpiar y convertir datos (espacios en blanco, barras y caracteres especiales) en entidades HTML.
    function limpiarDatos($datos){
        //Eliminamos los espacios en blanco al inicio y final de la cadena
        $datos = trim($datos);

        //Quitamos las barras escapandolas con comillas
        $datos = stripslashes($datos);

        //Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
        $datos = htmlspecialchars($datos);
        return $datos;
    }
?>