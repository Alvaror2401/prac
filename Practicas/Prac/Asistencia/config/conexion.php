<?php

require_once "config.php";

$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if (!$conexion->set_charset(DB_ENCONDE)){
    printf("Error cargando el conjunto de caracteres utf8: %s \n", $conxion->error);
    exit;
}

if(mysqli_connect_errno()){
    printf("Error en la conexion a la base de datos: %s \n", mysqli_connect_error());
    exit;
}

if(!function_exists('ejecutarConsulta')){
    function ejecutarConsulta($sql){
        global $conexion;

        $query = $conexion->query($sql);

        return $query;

    }

    function ejecutarConsultaFila($sql){
        global $conexion;

        $query = $conexion->query($sql);

        $row = query->fetch_assoc();

        return $row;
    }

    function retornarId($sql){
        global $conexion;

        $query=$conexion->query($sql);

        return $conexion->insert_id;

    }

    function limpiarCadena($string){
        global $conexion;
        $string = mysqli_real_escape_string($conexion, trim($string));

        return htmlspecialchars($string);
    }
}



