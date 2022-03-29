<?php
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril','Mayo',
        'Junio', 'Julio', 'Agosto','Septiembre', 'Octubre',
        'Noviembre', 'Diciembre');

    $alejandro = array('telefono' => 54743221, 'edad' => 20, 'pais' => 'mexico');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo foreach</title>
</head>
<body>
	<ul>
		<?php
			#Con foreach podemos recorrer arreglos muy facil.
			foreach($meses as $mes){
			    echo '<li>' . $mes . '</li>';
			}
            echo '</ul><br><ul>';
			#foreach nos permite recorrer arreglos asosiativos.
			foreach($alejandro as $dato => $valores){
				echo '<li>' . $dato . ' : ' . $valores . '</li>';
			}

		?>
	</ul>
</body>
</html>