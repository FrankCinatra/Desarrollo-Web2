<?php
	/*if( file_exists('documento.txt') ) {
	    echo "El archivo si existe";
	}else{
	    echo "El archivo no existe";
	    // Creamos un archivo
	    fopen('documento.txt', 'w+');
	}*/

    //Leer y agregar informacion a un archivo.
    //$contenido = file_get_contents('documento.txt');
    //echo $contenido;

    //file_put_contents('documento.txt', "Hola Mundo! \n", FILE_APPEND);

    //Numeros del 1 al 10 en archivo.
    file_put_contents('documento.txt', '');
    for($i=1; $i <= 10; $i++) {
        file_put_contents('documento.txt', "$i \n", FILE_APPEND);
    }

    //Convirtiendo un archivo a un arreglo en donde cada linea es un elemento del arreglo.
    $archivo = file('documento.txt');
    echo "<pre>";
    print_r($archivo);
    echo "</pre>";
?>