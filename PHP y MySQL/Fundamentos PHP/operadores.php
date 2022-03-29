<?php 
    /*Operadores Aritméticos:
        +	Suma
        -	Resta
        *	Multiplicación
        /	División
    */

    $numero = 10;
    $numero2 = 6;
    $resultado = $numero + $numero2;
    echo $resultado;
    /*Operadores de Asignación:
        =
        +=
        -=
        *=
        /=
    */

    $numero = 10;
    $numero2 = 5;
    //$numero = $numero + 7;
    $numero += 7;
    echo $numero;

    /*Operadores de Comparación:
        ==          Compara valor
        ===         Compara valor y tipo de dato
        !=, <>      Diferente de
        !==         Diferente de (valor y tipo)
        >
        <
        >=
        <=
    */
    $numero = '10'; // String
    $variable = 'true';
    if($variable < true) {
        echo "string";
    }
    /*Operadores Lógicos:
        and, &&     Se cumplan todas las condiciones
        or, ||      Se cumplan 1 o varias de las condiciones
        xor         Solo una de varias condiciones se cumpla
        !           
    */
    $numero = 10;
    if($numero >= 10 && $numero < 20) {
        echo "Ejecuta";
    }
    /*Operadores de Incremento / Decremento:
        ++$x
        $x++
        --$x
        $x--
    */
    $numero = 10;
    //$numero = $numero + 1;
    $numero += 1;
    echo $numero--;
    echo "<br />";
    echo $numero;

    /*Operadores de Cadenas:
        .
        .=
    */
    $texto = 'Cadena de Texto';
    $texto .= ' Una segunda Cadena de Texto';
    echo $texto;
?>