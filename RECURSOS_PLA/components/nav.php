<?php
$inicio ="LA ESCUELA";
$seccion1="CURSOS Y HORARIOS";
$seccion2="SITUACIÓN Y CONTACTO";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>       
            <li><a class="navboton" href="index.php"><?php echo $inicio ??null; ?></a></li>
            <li><a class="navboton" href="cursos.php"><?php echo $seccion1 ??null; ?></a></li>
            <li><a class="navboton" href="contacto.php"><?php echo $seccion2 ??null; ?></a></li>
        </ul>
    </nav>
</body>
</html>