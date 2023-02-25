<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="calestilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="calendario.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Calendario</title>
</head>
<body>

<div class="cab">
		<header>
			<div>
      <img src="icons/calendar.png" alt="Menu" id="iconmenu"
						height="40px"
						
					>
			</div>
			<div>
				<h1 class="titphp">Calendario</h1>
			</div>
		</header>
	</div>
		<div id="main">
			<div id="navbar">
				<img src="icons/logo_uni_2016.png" alt="Logo Uni"
				height="50px">
				<ul id="listnav" class="nav-menu">
				<li id="opcnav"><a id="botnav" href="Menu.html" title="Menu"><img src="icons/homeblack.png" alt="Inicio" height="15px"> Inicio</a>
				<li id="opcnav"><a id="botnav" href="miinfo.php" title="Mi Perfil" target="blank"><img src="icons/user.png" alt="Mi Información"
					height="15px"> Mi Perfil</a>
				<li id="opcnav"><a id="botnav" href="Asistencia.html" title="Asistencia"><img src="icons/asistencia.png" alt="Asistencia"
					height="15px"> Asistencia</a>
				<li id="opcnav"><a id="botnav" href="Calendario.php" title="Calendario" target="blank" > <img src="icons/calendar.png" alt="Calendario"
					height="15px"> Calendario</a>
				<li id="opcnav">En Proceso...
				</ul>
				
			</div>
		

		<!-- Esta es la parte del calendario -->

		<div id="calendario">
  			<div id="anterior" onclick="mesantes()"></div>
			<div id="posterior" onclick="mesdespues()"></div>
			<h2 id="titulos"></h2>
			<table id="diasc">
			<tr id="fila0"><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
			<tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
			<tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					</table>
					<div id="fechaactual"><i onclick="actualizar()">HOY: </i></div>
					<div id="buscafecha">
						<form action="#" name="buscar">
						<p>Buscar ... MES
							<select name="buscames">
							<option value="0">Enero</option>
							<option value="1">Febrero</option>
							<option value="2">Marzo</option>
							<option value="3">Abril</option>
							<option value="4">Mayo</option>
							<option value="5">Junio</option>
							<option value="6">Julio</option>
							<option value="7">Agosto</option>
							<option value="8">Septiembre</option>
							<option value="9">Octubre</option>
							<option value="10">Noviembre</option>
							<option value="11">Diciembre</option>
							</select>
						... AÑO ...
							<input type="text" name="buscaanno" maxlength="4" size="4" />
						... 
							<input type="button" value="BUSCAR" onclick="mifecha()" />
						</p>
						</form>
					</div>
				</div>
 	 </div>
	 


    
</body>
</html>