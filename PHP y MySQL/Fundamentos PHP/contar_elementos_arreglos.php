<?php 

    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
        'Junio', 'Julio', 'Agosto','Septiembre', 'Octubre',
        'Noviembre', 'Diciembre');

    // echo count($meses);
    $ultimo_mes = count($meses) - 1;
    //$ultimo_mes = count($meses) - 2;
    echo $meses[$ultimo_mes];

?>