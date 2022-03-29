<?php
    //Se coloca el parametro y su valor aunado a un =>
    $alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' => 'mexico');

    echo $alex['telefono'] . '<br>';
    //En los asosiativos podemos modificar sus valores accediendo a ellos.
    $alex['telefono'] = '111111';
    echo $alex['telefono'];

?>