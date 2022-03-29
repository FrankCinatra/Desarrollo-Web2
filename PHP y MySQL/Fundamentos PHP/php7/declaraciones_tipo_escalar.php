<?php
    declare(strict_types=1); //Evita que php convierta strings en numeros
    function cuadrado(int $numero){
	    return $numero * $numero;
    }

    //$numero = 'Carlos';   //Causa error
    //$numero = '5';          //No causa error pero devuelve el resultado
    $numero = 5;
    echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);
?>