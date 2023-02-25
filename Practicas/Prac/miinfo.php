



<?php
include '../landing2/db.php';
session_start();
$user = $_SESSION['usuario'];
$cn=new Cn();
// $mysqli=$cn->cn;
$conexion = $cn->Cn();

$sql = "SELECT id, user, password, Rol FROM users WHERE user='".$user."'";
$resultado_users = $conexion->query($sql);
$data_datosusers=$resultado_users->fetch_assoc();
// echo $data_datosusers["Rol"];

$sql = "SELECT * FROM datosusuarios WHERE codUsuario='".$user."'";
$resultado_datosUsuarios = $conexion->query($sql);
$data_datos=$resultado_datosUsuarios->fetch_assoc();


// echo $data_datos["Edad"];
// echo $data_datos["Nombre"];
// exit;


// while($data=$resultado_users->fetch_assoc()){

// 	$id=$data['id'];
// 	$user = $data['user'];
// 	$password = $data['password'];
// 	$rol = $data['Rol'];
// }

// while($data=$resultado_datosUsuarios->fetch_assoc()){

// 	$nombre=$data['Nombre'];
// 	$edad=$data['Edad'];
// }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="calestilo.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Mi Perfil</title>
</head>
<body>



	<div class="cab">
		<header>
			<div>
					<img src="icons/user.png" alt="Menu" id="iconmenu"
						height="40px"><h1 id="titphp">Mi Perfil</h1>
			</div>
			
		</header>
	</div>

	
			<div id="main">
				<div id="navbar">
					<a href="http://localhost/practicas/Prac/Menu.html"><img src="icons/logo_uni_2016.png" alt="Logo Uni"
					height="50px"></a>
					<ul id="listnav" class="nav-menu">
						<li id="opcnav"><a id="botnav" href="Menu.php" title="Menu"><img src="icons/homeblack.png" alt="Inicio" height="15px"> Inicio</a>
						<li id="opcnav"><a id="botnav" href="miinfo.html" title="Mi Perfil" target="blank"><img src="icons/user.png" alt="Mi Información"
							height="15px"> Mi Perfil</a>
						<li id="opcnav"><a id="botnav" href="Asistencia.html" title="Asistencia"><img src="icons/asistencia.png" alt="Asistencia"
							height="15px"> Asistencia</a>
						<li id="opcnav"><a id="botnav" href="Calendario.php" title="Calendario" target="blank" > <img src="icons/calendar.png" alt="Calendario"
							height="15px"> Calendario</a>
						<li id="opcnav">En Proceso...
						</ul>
					
				</div>
			
<div class = "container">

					<div class="card" >
	<div class="card-body">
		<div class= "container">
		<h5  class="card-title"><u><b>DATOS</b></u></h5>
		<p class="card-text">
			<div id="imgalumno">
				<img src="icons/user2.png" alt="Imagen Alumno"
				height="150px"
				id="fotoalumno">
				<p><img src="icons/estudiante.png" alt="Icono estudiante" id="iconestudiante" height="25px"> <?php echo $data_datosusers["Rol"]?></p>
			</div></p>
			<div id="infoalumno">
						
						<p class="alumnoinfo">CODIGO: <?php echo $user; ?></p>
						<p class="alumnoinfo">NOMBRE: <?php echo $data_datos["Nombre"]?></p>
						<p class="alumnoinfo">EDAD: <?php echo $data_datos["Edad"]?> </p>
						<p class="alumnoinfo">CORREO: <?php echo $data_datos["email"]?></p>
						<p class="alumnoinfo">TELEFONO: <?php echo $data_datos["telefono"]?></p>
						<p class="alumnoinfo">CARRERA: <?php echo $data_datos["carrera"]?></p>
						<p class="alumnoinfo">TURNO: <?php echo $data_datos["Turno"]?></p>
			</div>
		
	</div>
	</div>
	</div>

	<div class="card mt-3">
	<div class="card-body">
		<h5 class="card-title"><u><b>DATOS ADICIONALES</b></u></h5>
		<p class="card-text"><p class="titulodatos">Personales:</p>
					<p class="datos">DNI: <?php echo $data_datos["DNI"]?> </p>
					<p class="datos"> RUC: <?php echo $data_datos["RUC"]?></p>
					<p class="datos">Fecha de nacimiento: <?php echo $data_datos["cumpleaños"]?></p>
					<p class="datos">Lugar de Nacimiento: <?php echo $data_datos["birthplace"]?></p>
					<div class="datos"><p>Genero: <?php echo $data_datos["Genero"]?></p>
					<p class="titulodatos">Domicilio:</p>
					<p class="datos">Dirección: <?php echo $data_datos["domicilio"]?></p>
					<p class="datos">Telefono fijo: <?php echo $data_datos["telefonoCasa"]?></p></p>
		
	</div>
	</div>

</div>


				<div>	
				
				

				
		</div>
		</div>	


	


	
</body>
</html>