<?php 

    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
        'Junio', 'Julio', 'Agosto','Septiembre', 'Octubre',
        'Noviembre', 'Diciembre');

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php

		#ciclo foreach recorremos un arreglo y ejecutar instrucciones por cada elemento.
		#Forma mas facil de recorrer arreglos en PHP.
		foreach($meses as $mes){
			echo '<li>' . $mes . '</li>';
		}

		?>
	</ul>
</body>
</html>