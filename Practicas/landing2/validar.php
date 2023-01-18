<?php
require_once 'db.php';
// $Cn=new Cn();
$cn=new Cn();
// $mysqli=$cn->cn;
$mysqli = $cn->Cn();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
// $_SESSION['usuario']=$usuairo;
$_SESSION['usuario']=$usuario;

// include('db.php')

$consulta="SELECT*FROM users where user='$usuario' and password='$contraseña'";
// $resultado=mysqli_query($conexion,$consulta);
$resultado=mysqli_query($mysqli,$consulta);


$filas=mysqli_num_rows($resultado);


if($filas){
    header("location:../Prac/Menu.html");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">error en la autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
// mysqli_close($conexion);
mysqli_close($mysqli);