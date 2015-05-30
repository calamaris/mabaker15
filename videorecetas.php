<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<script src="https://apis.google.com/js/platform.js"></script>
	<title>Ma Baker and Chef</title>
	<?php include("includes/head.php"); ?>
	<!-- <link rel="stylesheet" href="shared/css/productoBase.css"> -->
	
	<link rel="stylesheet" href="shared/css/productos.css">
	<link rel="stylesheet" href="shared/css/videorecetas.css">
</head>
<body >
	<?php include("includes/header.php"); ?>

	<div id="skrollr-body">
	
		<div id="fixHeader" data-0="height:154px" data-310="height:59px"></div>
		
		<section class="topBanner" id="videorecetasBanner">
			<div class="iw">
				
			</div>
		</section>
		<section class="vrWrapper">
			<div class="iw">
				
				<div class="titulo">
					<h1>Videorecetas</h1>
				</div>
				<aside class="ytSubscribe">
					<h2>Suscribete a nuestro canal</h2>
					<div class="g-ytsubscribe" data-channel="mabakerandchef" data-layout="full" data-count="undefined"></div>
				</aside>
				
			</div>
		</section>
		<section class="vrSection">
			<div class="iw">
				<div id="contenedorVr">
						 <a href="vRecetas-chocolate.php"> <div class="btnVreceta" id="Vchocolate"></div></a> 
						 <a href="vRecetas-pastelFondant.php"> <div class="btnVreceta" id="Vfondant"></div></a> 
						 <a href="vRecetas-gelatinaArtistica.php"> <div class="btnVreceta" id="Vgelatina"></div></a> 
						 <a href="vRecetas-panaderia.php"> <div class="btnVreceta" id="Vpanaderia"></div></a> 
						 <a href="vRecetas-galletaDecorada.php"> <div class="btnVreceta chico" id="Vgalletas"></div></a> 
						 <a href="vRecetas-pastel.php"> <div class="btnVreceta chico" id="vPastel"></div></a> 
						 <a href="#"> <div class="btnVreceta chico" id="VcupCakes"></div></a> 
						 <a href="vRecetas-eventos.php"> <div class="btnVreceta chico" id="Veventos"></div></a> 
				</div>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>
	
	</div> <!-- skrollrBody -->
	<script src="shared/js/main.js"></script>
	<script src="shared/js/skrollr.js"></script>
	<script>
			
			window.localStorage.setItem('seccionOrigen','Chocolate');
			window.localStorage.setItem("link","chocolate.php");
			
	</script>
</body>
</html>