<?php
    //Muestra caracteres especiales de html
    $texto = '<b>Hola Carlos</b>';
    echo htmlspecialchars($texto) . '<br>';
    //No muestra espacios en blanco al inicio y final de String
    $texto = ' Hola ';
    echo trim($texto) . '<br>';
    //Imprime longitud de String
    $texto = ' Hola Carlos ';
    echo strlen($texto) . '<br>';
    //Imprime desde que caracter y cuantos mas apartir de ese caracter
    echo substr($texto, 0, 4) . '<br>';
    //Convierte a mayusculas
    echo strtoupper($texto) . '<br>';
    //Convierte a minusculas
    echo strtolower($texto) . '<br>';
    //Regresa la posición del parametro (letra) solicitado
    echo strpos($texto, 'o') . '<br>';
?>