<?php
    $conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

    if($conexion->connect_errno){
        die('Lo siento hubo un problema con el servidor');
    }else{
        $sql = "INSERT INTO usuarios(nombre, edad) VALUES('Isra', 15)";
        $conexion->query($sql);
        if($conexion->affected_rows >= 1){
            echo 'Filas agregadas: ' . $conexion->affected_rows;
        }
    }
?>