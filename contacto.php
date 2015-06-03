<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<title>Ma Baker and Chef</title>
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" href="shared/css/contacto.css">
</head>
<body >
	<?php include("includes/header.php"); ?>

	<div id="skrollr-body">
	
		<div id="fixHeader" data-0="height:154px" data-310="height:59px"></div>
		
		<section class="topBanner" id="contacto">
			<div class="iw">
				<h1>Contacto</h1>
				<h2>¿Buscas <strong>Sabor</strong> y <strong>Color</strong> <br> <strong>¡Contactanos!</strong></h2>

				<div class="zonaDatosC">
					<a href="#">
						<div class="cluster telefono">
							<span class="icono">
								<img src="shared/img/contacto/phoneIcon.png" width="100%" alt="phoneIcon" />
							</span>
							<span class="dato">
								Tels.: (52 55)43.35 03.41 al 44 <br>
								TEL: 01 800 2630 300
							</span>
						</div>
					</a>
					<a href="#">
						<div class="cluster mail">
							<span class="icono">
								<img src="shared/img/contacto/mailIcon.png" width="100%" alt="phoneIcon" />
							</span>
							<span class="dato">
								ventas@mabakerandchef.com
							</span>
						</div>
					</a>
				</div>
			</div>
			</section>	
			<section>
				<div class="iw">
					<article class="zona formulario">
						<p class="txt">
							A continuación le presentamos un formulario de contacto con el cual podrá enviarnos sus datos y con mucho gusto nos contactaremos con usted a la brevedad
						</p>
						<div id="formZone">
							<form name="fvalida" id="formaFormat" method="get" enctype="application/x-www-form-urlencoded" action="recibe.php" target="_self">
								<label for="nombre">nombre y apellido</label>
								<input type="text" name="nombre" class="input">
								<div class="medioInput rigthPadd">
									<label for="ciudad">ciudad</label>
									<input type="text" name="ciudad" class="input">
								</div>
								<div class="medioInput">
									<label for="estado">estado</label>
									<input type="text" name="estado" class="input">
								</div>
								<div class="tresCuartosIn rigthPadd">
									<label for="pais" class="label2">pais</label>
									<input type="text" name="pais" class="input">
								</div>
								<div class="unCuartoIn">
									<label for="codigoPostal" class="label2">C.P.</label>
									<input type="text" name="codigoPostal" class="input">
								</div>
								<div class="tresCuartosIn rigthPadd">
									<label for="correo">correo</label>
									<input type="text" name="correo" class="input">
								</div>
							
								
								<div id="radioZone" class="unCuartoIn">
									<label for="atencion">Atencion</label>
									<input type="radio" name="atencion" value="distribuidor">Distribuidor  <br>
									<input type="radio" name="atencion" value="mayorista">Mayorista  <br>
									<input type="radio" name="atencion" value="publico">Publico <br>
									<input type="radio" name="atencion" value="otro">Otro 
								</div>
								<label for="comentario">Comentarios</label>
								<textarea name="" id="" cols="30" rows="10" class="input"></textarea>
								<input type="submit" name="submit" id="submitBtn">
							</form>
						</div>
					</article>
					<article class="zona mapa">
						<div id="visitanosTxt">... o <strong>visitanos </strong> en </div>
						<div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3760.0719487616807!2d-99.0623528!3d19.5385244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d56ba0b98375b35!2sMa+Baker+and+Chef!5e0!3m2!1ses-419!2smx!4v1417302271251" width="100%" frameborder="0" style="border:0"></iframe>
							
						</div>
						<p id="direccion">Miguel Hidalgo 57, Col. Santa Clara, <br>
								Ecatepec, Estado de Mexico, <br>
								 C.P. 55540</p>
					</article>
				</div>
			</section>	
		

		<?php include("includes/footer.php"); ?>
	
	</div> <!-- skrollrBody -->
</body>
</html>