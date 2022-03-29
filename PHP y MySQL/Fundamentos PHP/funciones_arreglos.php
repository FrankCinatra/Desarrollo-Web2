<?php
    $amigo = array('telefono' => 6545647, 'edad'=>20, 'pais'=>'mexico');

    $semana = array('Lunes', 'Martes', 'Miercoles',	'Jueves',
        'Viernes', 'Sabado', 'Domingo');

    //Extrae el arreglo asociativo como variables
    extract($amigo);
    echo $telefono . '<br>';
    echo $edad . '<br>'; 
    echo $pais . '<br>';

    //elimina el último valor del array
    $ultimo_dia = array_pop($semana);
    foreach ($semana as $dia) {
        echo $dia . '<br />';
    }
    //Separa los elementos según el parametro metido antes del array
    echo join('~~', $semana);
    echo '<br>';
    //Cuenta los registros del array
    echo count($semana) . '<br>';
    //Reordena el array
    rsort($semana);
    echo join(', ', $semana) . '<br>';
    /*Extrae e invierte el arreglo, no lo reordena
    solo extrae e invierte sus valores*/
    $semana_reverse = array_reverse($semana);
    echo join(', ', $semana_reverse);
?>