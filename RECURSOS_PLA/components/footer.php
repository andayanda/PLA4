<?php
if (isset($_GET["idioma"])){ $idioma = $_GET["idioma"]; }
include ("contenido/contenido_$idioma.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <ul>
            <li style="font-size: 1.0em; color: black"><?php echo $comparte ??null; ?> </li><br>
            <li>
                <img src="img/facebook_logo.png" alt="facebook" title="Comparteix a facebook"/></a>&nbsp&nbsp
                <img src="img/twitter_logo.png" alt="twitter" title="Comparteix a twitter"/></a>&nbsp&nbsp
                <img src="img/google_plus_logo.png" alt="google+" title="Comparteix a google+"/></a>
            </li>
        </ul>
    </footer>
    
</body>
</html>