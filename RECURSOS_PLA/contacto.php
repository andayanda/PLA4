<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
	<script src="js/form.js" type="text/javascript"></script>
</head>
<body>
	<header>
		<img src="img/IEM_logo.png">
		<h1>Instituto<br>de Estudios Modernos</h1>
	</header><br>
	<div class="wraper">
		<nav>
			<ul>
				<li><a class="navboton" href="index.php">LA ESCUELA</a></li>
				<li><a class="navboton" href="cursos.php">CURSOS Y HORARIOS</a></li>
				<li><a class="navboton" href="contacto.php">SITUACIÓN Y CONTACTO</a></li>
			</ul>
		</nav>
		<div class="content">
			<div class="slider" >
				<img src="img/iem_3.jpg" /><img src="img/iem_4.jpg" />
		    </div>

		    <div class="sections">
		    	<h1 style="text-align:center">LOCALIZACIÓN DEL CENTRO Y CONTACTO</h1><br><br>
		    	<div class="contacto">
					<h2>CONTACTO</h2>
					<p>Los campos marcados con * son obligatorios.</p><br>
					<form id="form" name="form" method="get" action='#'>
						<label for="nombre">Nombre: * </label><input type="text" name="nombre" autofocus id="nombre" /><br><br>
						<label for="email">Email: * </label><input type="email" name="email" id="email" placeholder="nom@mail.com" /><br><br>
						<label for="telefono">Teléfono: </label><input type="tel" name="telefono" id="telefono"><br><br>
						<label>Mensaje: *</label><br><br>
						<textarea id="mensaje" name="mensaje" placeholder="Introduzca aquí su pregunta o comentario" ></textarea><br><br>
						<span>He leido y acepto la política de privacidad:</span><br><br>
						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()">Ver aquí</span><br><br>
						<input id="enviar" type="button" name="enviar" value="Enviar" onclick="validaFormulario()"/><br>
					</form>
					
					<div id="alerta">
						<span id="alertatext">En cumplimiento de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (LOPD), le informamos que los datos de carácter personal que usted nos comunique mediante este formulario de contacto serán confidenciales y, bajo ningún concepto, serán transmitidos a terceras personas.<br><br>
						<input type="button" onclick="ocultaAlert()"/>
					</div>
				</div>
		    </div>
		    <br><br>
		</div>
	
		<footer>
			<ul>
				<li style="font-size: 1.0em; color: black">Comparte en:</li><br>
				<li>
					<img src="img/facebook_logo.png" alt="facebook" title="Comparteix a facebook"/></a>&nbsp&nbsp
					<img src="img/twitter_logo.png" alt="twitter" title="Comparteix a twitter"/></a>&nbsp&nbsp
					<img src="img/google_plus_logo.png" alt="google+" title="Comparteix a google+"/></a>
				</li>
			</ul>
		</footer>
	</div>
</body>
</html> 
