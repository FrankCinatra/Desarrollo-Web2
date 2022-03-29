<?php
    //Da error en caso de no encontrar y ya no se ejecuta nada
    #include 'vista.php';
    //Se ejecuta todo lo demas aunque de error en la busqueda del archivo
    #require 'vista.php';
    //Evita que se ejecute varias veces el código al llamarlo
    //varias veces por error
    include_once 'vista.php';

    function suma($numero, $numero2){
	    return $numero + $numero2;
    }
?>