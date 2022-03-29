<?php
    /*Regresa 1 si el valor en la izquierda es mayor que el de la derecha
    Rregresa 0 si los valores en ambos lados son iguales
    Regresa -1 si el valor de la derecha es mayor que el de la izquierda
        <	=	 >
        1 	0 	-1*/

    echo 10 <=> 1;
    echo '<br>';
    echo 10 <=> 10;
    echo '<br>';
    echo 1 <=> 10;
    echo '<br>';

    $arreglo = [3,1,5,2,4];
    //Imprime datos de arreglo separados por la cadena proporcionada
    echo implode(' - ', $arreglo);
    echo '<br>';
    sort($arreglo);
    echo implode(' ~ ', $arreglo);
    echo '<br>';

    /*function comparar($a, $b){
        if($a == $b){
            return 0;
        }elseif($a > $b){
            return 1;
        }else{
            return -1;
        }
    }*/
    #Estas 2 funciones son iguales
    function comparar($a, $b){
        return $a <=> $b;
    }
    //Ordena el arreglo conforme a la funcion entregada como parametro String
    usort($arreglo, 'comparar');
    echo implode(' -- ', $arreglo);
?>