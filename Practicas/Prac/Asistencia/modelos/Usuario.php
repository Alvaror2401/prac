<?php

require_once "../config/conexion.php";

class Usuario{

    //constructor
    public function __construc(){

    }

    //metodo para registrar
    public function registrar($nombre, $apellidos, $login, $idDepartamento, $email, $password, $tipoUsuario, $claveAsistencia, $imagen, $fechaRegistro, $permisos){

        $validar=true;
        $sql="INSERT INTO usuarios(nombre, apellidos, login, idDepartamento, email, password, tipoUsuario, claveAsistencia, imagen, fecharegistro) VALUES('$nombre', '$apellidos', '$login', '$idDepartamento', '$email', '$password', '$tipoUsuario', '$claveAsistencia', '$imagen', '$fechaRegistro')";
        
        $idNuevo = retornarId($sql) or $validar=false;
        $elementos=0;

        while($elementos < count($permisos)){

            $sqlPermiso = "INSERT INTO usuariopermiso (idUsuairo, idPermiso) VALUES ('$idNuevo', '$permisos[$elementos]')";

            ejecutarConsulta($sqlPermiso) or $validar=false;

            $elementos=$elementos+1;
        }
            return $validar;
    }
}



// Metodo para editar
public function editar($idUsuario,$nombre,$apellidos,$login,$idDepartamento,$email,$password,$tipoUsuario,$claveAsistencia,$imagen){
    $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', login='$login', idDepartamento='$idDepartamento', email='$email', password='$password', tipoUsuario='$tipoUsuario', claveAsistencia='$claveAsistencia', imagen='$imagen' WHERE idUsuario='$idUsuario'";

    return ejecutarConsulta($sql);
}


// Metodo para desactivar
public function desativar($idUsuario){
    $sql="UPDATE usuarios SET estado ='0' WHERE idUsuario='$idUsuario'";

    return ejecutarConsulta($sql);
}

// Metodo para activar
public function desativar($idUsuario){
    $sql="UPDATE usuarios SET estado ='1' WHERE idUsuario='$idUsuario'";

    return ejecutarConsulta($sql);
}

//Metodo para listar

public function listar(){
    $sql="SELECT * from usuarios";

    return ejecutarConsulta($sql);
}

//Metodo para mostar usuario

public function mostrarUsuario($idUsuario){
    $sql = "SELECT * FROM usuarios WHERE idUsuario='$idUsuario'";

    return ejecutarConsultaFila($sql;)
}

//Metodo para listar permisos
public function listarPermiso($idUsuario){
    $sql ="SELECT * FROM usuariopermiso WHERE idUsuario='$idUsuario'";

    return ejecutarConsulta($sql);
}