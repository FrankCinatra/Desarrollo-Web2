<?php
    $mes = 'Marzo';
    switch($mes){
	    case 'Diciembre':
		    echo "Feliz Navidad!";
	        break;
    	case 'Enero':
	    	echo "Feliz Año Nuevo";
	        break;
    	default:
	    	echo "En este mes no se celebra nada";
	        break;
    }
    # Alternativa a Switch

    /*if($mes == 'Diciembre') {
        echo "Feliz Navidad";
    }elseif($mes == 'Enero') {
        echo "Feliz Año Nuevo";
    }else{
        echo "En este mes no se celebra nada";
    }*/
?>