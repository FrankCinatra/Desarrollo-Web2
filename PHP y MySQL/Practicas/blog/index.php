<?php
    require 'admin/config.php';
    require 'functions.php';
    $conexion = conexion($bd_config);

    if(!$conexion) {
        header('Location: error.php');
    }
    // 2.- Convertimos todo el codigo en funciones para poder reutilizarlas en la paginacion del admin

    // Obtenemos los post
    $posts = obtener_post($blog_config['post_por_pagina'], $conexion);

    // Si no hay post entonces redirigimos
    if(!$posts){
        header('Location: error.php');
    }

    require 'views/index.view.php';
?>