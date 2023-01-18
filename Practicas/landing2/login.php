
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilanding.css">
    <title>login</title>
</head>
<body>
    <header>
    <h1>Inicio de Sesión</h1>
    </header>

    <form action="validar.php" method="post">
        <p>Usuario <input type="text" placeholder="Ingrese su nombre" name=usuario></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
        <input type="submit" value="Ingresar">
    </form>
    
</body>
</html>