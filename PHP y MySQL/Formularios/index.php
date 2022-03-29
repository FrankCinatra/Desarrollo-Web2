<?php
	if($_POST) {
		print_r($_POST);
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<!--action ('*.php') y method (post || get) null para actualizar esta misma pagina-->
	<!--Enviar a esta misma pag <-?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?-> -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="formulario_contacto" method="post">
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<input type="text" placeholder="Edad:" name="edad" id="edad">
		<br>

        <!-- Radio Button -->
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" id="hombre" value="hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>

        <!-- Combobox -->
		<select name="year" id="year">
            <?php
            for($i=1950; $i<=2022; $i++){
    			echo '<option value='.$i.'>'.$i.'</option>';
            }
            ?>
		</select>
		<br>

        <!-- Checkbox -->
		<label for="terminos">Terminos y Condiciones</label>
		<input type="checkbox" name="terminos" value="ok" id="terminos">
		<br>

		<input type="submit" name="btn-enviar" vale="Enviar">
	</form>
</body>
</html>