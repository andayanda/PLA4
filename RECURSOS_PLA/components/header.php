<?php
$idioma = "es";
if (isset($_GET["idioma"])){ $idioma = $_GET["idioma"]; }
include ("contenido/contenido_$idioma.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <header>
		<img src="img/IEM_logo.png">
        <h1><?php echo $h1 ??null; ?> </h1>
        <span><a href="?lang=es">ESP</a> | <a href="?lang=ca">CAT</a></span>
	</header>    
</body>
</html>