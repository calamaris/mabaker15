<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<title>Ma Baker and Chef</title>
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" href="shared/css/productos.css">
	<link rel="stylesheet" href="shared/css/videorecetas.css">
</head>
<body >
	<?php include("includes/header.php"); ?>

	<div id="skrollr-body">
	
		<div id="fixHeader" data-0="height:154px" data-310="height:59px"></div>
		
		<section class="topBanner" id="vrGalletaDeco">
			<div class="iw">
				
			</div>
		</section>
		<section class="productosS chocolates">
			<div class="iw">
				<div class="navegacionWrapp">
					<div class="navegacion">
						<a href="videorecetas.php">Videorecetas</a> > <a href="#">Galleta Decorada</a>
				</div>
				<div class="titulo full">
					<h2>Videorecetas de</h2>
					<h1>Galleta Decorada</h1>
				</div>
				<section id="videoContainer">
					
				</section>
		</section>

		<?php include("includes/footer.php"); ?>
	
	</div> <!-- skrollrBody -->
	<script src="shared/js/main.js"></script>
	<script src="shared/js/skrollr.js"></script>
	<script>
			
			$(document).ready(function(){
			    callJson("PLQyaS0EGI7dmVXvu1A-Ab2wl9IWcnayCb");
			});

	</script>
</body>
</html>