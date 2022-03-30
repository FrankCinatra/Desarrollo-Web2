<?php
    #Conexión a BD por PDO
    try{
        //Parametros(      direccion/ubicacion; nombre de BD; usuario; contraseña     )
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
        //Metodo Query (metodo desaconsejado)
        /*$resultados = $conexion->query("SELECT * FROM usuarios");

        foreach($resultados as $fila){
            echo $fila['nombre'] . ' ¬¬ ' . $fila['email'] . "<br>";
        }*/

        #Prepare Statement
        $nombre = 'Thomas';
        $statement = $conexion->prepare("SELECT * FROM usuarios WHERE nombre=:nombre");
        $statement->execute(array(':nombre'=>$nombre));

        $resultados = $statement->fetch();
        print_r($resultados);

    }catch(PDOException $e){
        // Obtener errores
        echo "Error: " . $e->getMessage();
    }
?>