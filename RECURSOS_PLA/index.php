<?php
$idioma = "es";
if (isset($_GET["idioma"])){ $idioma = $_GET["idioma"]; }
include ("contenido/contenido_$idioma.php"); ?>
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
</head>
<body>	
<?php include('components/header.php'); ?>
	
	<div class="wraper">
	<?php include('components/nav.php'); ?>
		<div class="content">
			<div class="slider">
				<img src="img/iem_1.jpg" /><img src="img/iem_2.jpg" />
			</div>
			<div class="sections" id="index">
			<?php readfile("contenido/contenido_index_$idioma.html")?>;
		    </div>
		    <br><br>
		</div>
		<?php include('components/footer.php'); ?>		
	</div>
</body>
</html> 
