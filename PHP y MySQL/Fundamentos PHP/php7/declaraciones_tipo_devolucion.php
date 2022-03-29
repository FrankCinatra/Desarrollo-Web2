<?php
    declare(strict_types=1);
    //                     :Tipo de valor devuelto
    function obtenerEdad() :int{
	    //$edad = '23'; //marca error a menos que se convierta en Entero
        $edad = 23;
	    return $edad;
    }

    echo obtenerEdad();
?>