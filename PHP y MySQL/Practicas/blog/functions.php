<?php
    #Funcion para conectarnos a la base de datos.
    function conexion($bd_config){
        try {
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexion;

        } catch (PDOException $e) {
            return false;		
        }
    }
    function limpiarDatos($datos){
        //Eliminamos los espacios en blanco al inicio y final de la cadena
        $datos = trim($datos);

        //Quitamos los / escapandolas con comillas
        $datos = stripslashes($datos);

        //Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    # Funcion para obtener un post por ID
    function obtener_post_por_id($conexion, $id){
        $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
        $resultado = $resultado->fetchAll();
        return ($resultado) ? $resultado : false;
    }

    function id_articulo($id){
        return (int)limpiarDatos($id);
    }

    # Funcion para obtener la pagina actual
    function pagina_actual(){
        return isset($_GET['p']) ? (int)$_GET['p']: 1; 
    }

    # Funcion para obtener los post determinando cuantos queremos traer por pagina.
    function obtener_post($post_por_pagina, $conexion){
        //Determinamos desde que post se mostrara en pantalla
        $inicio = (pagina_actual() > 1) ? (pagina_actual() * $post_por_pagina - $post_por_pagina) : 0;

        //Preparamos nuestra consulta trayendo la informacion e indicandole desde donde y cuantas filas.
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT {$inicio}, {$post_por_pagina}");

        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    #Funcion para calcular el numero de paginas que tendra la paginacion.
    function numero_paginas($post_por_pagina, $conexion){
        //Calculamos el numero de filas / articulos que nos devuelve nuestra consulta
        $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
        $total_post->execute();
        $total_post = $total_post->fetch()['total'];

        //Calculamos el numero de paginas que habra en la paginacion
        $numero_paginas = ceil($total_post / $post_por_pagina);
        return $numero_paginas;
    }

    # Funcion para traducir la fecha de formato timestamp a español.
    function fecha($fecha){
        $timestamp = strtotime($fecha);
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        $dia = date('d', $timestamp);

        // -1 porque los meses en la funcion date empiezan desde el 1
        $mes = date('m', $timestamp) - 1;
        $year = date('Y', $timestamp);

        $fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $year;
        return $fecha;
    }

    function comprobarSession(){
        if (!isset($_SESSION['admin'])) {
            header('Location: ' . RUTA);
        }
    }
?>