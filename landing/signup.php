<?php
    require 'database.php';

//     $message = '';
// echo $_POST['usuario'];
// echo $_POST['clave'];
if (!empty($_POST['usuario']) && !empty($_POST['clave'])){
    // echo "hola"; exit;
    $sql = "INSERT INTO users (usuario, clave) VALUES (:usuario, :clave)"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario',$_POST['usuario']);
    $password = password_hash($_POST['clave'], PASSWORD_BCRYPT);
    $stmt->bindParam(':clave',$password);


    if ($stmt->execute()) {
        $message = 'Usuario creado satisfactoriamente';
    } else{
        $message = 'Lo sentimos, hubo un error creando tu cuenta';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/logestilos.css">
    <title>SignUp</title>
</head>
<body>
<header>
    <a href="index.php">Volver</a>
</header>

    <?php if (!empty($message)): ?>
        <p><?= $message ?> </p>
        <?php endif; ?>

    <h1>Sign Up</h1>
    <span>or <a href="login.php">Login</a></span>
    
    <form action="signup.php" method="post">
        <input type="text" name="Nombres" placeholder="Ingresa tu nombre y apellido">
        <input type="date" name="edad" placeholder="Ingresa tu fecha de nacimiento">
        <input type="email" name="email" placeholder="Ingresa tu correo electrónico">
        <input type="text" name="usuario" placeholder="Ingresa tu usuario">
        <input type="password" name="clave" placeholder="Ingresa una contraseña">
        <input type="password" name="confirmacontra" placeholder="Confirma tu contraseña">
        <input type="submit" value="Enviar">
        <!-- agrandar formulario con más detalles-->

    </form>

    
</body>
</html>