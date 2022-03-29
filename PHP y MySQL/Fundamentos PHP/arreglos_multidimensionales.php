<?php

    #Tiene arreglos dentro de otros arreglos.
    $amigos = array(
        array('Alejandro', 20),
        array('Cesar', 21),
        array('Manuel', 18)
    );
    #Todavía es posible agregar arreglos dentro de los arreglos
    #que esta dentro del arreglo
    
    #Accedemos primero al arreglo amigos y luego al primer
    #elemento de amigos, despues al primer valor del arreglo.
    echo $amigos[0][0] . '<br />';
    echo $amigos[1][0] . '<br />';
    echo $amigos[2][0] . '<br />';

?>