<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Ma baker and chef">
	<meta name="keywords" content="">
	<title>Ma Baker and Chef</title>
	<?php include("includes/head.php"); ?>
	<!-- <link rel='alternate' hreflang='es' href='http://mabaker.com/us-es' /> -->
</head>
<body >

	<?php include("includes/header.php"); ?>

	<div id="skrollr-body">
	
		<div id="fixHeader" data-0="height:154px" data-300="height:59px"></div>
		<section id="slider">
			<div id="sliderWrapper" >
				<div class="slide" id="slide1"></div>
				<div class="slide" id="slide2"></div>
				<div class="slide" id="slide3"></div>
				<div class="slide" id="slide4"></div>
				<div class="slide" id="slide5"></div>
				<div class="slide" id="slide6"></div>
				<div class="slide" id="slide7"></div>
				<div class="slide" id="slide8"></div>
				<div class="slide" id="slide9"></div>
				<div class="slide" id="slide10"></div>
				<div class="slide" id="slide11"></div>	
				<div class="slide" id="slide12"></div>
				<div class="slide" id="slide13"></div>
				<div class="slide" id="slide14"></div>
				<div class="slide" id="slide15"></div>
				<div class="slide" id="slide16"></div>
				<div class="slide" id="slide17"></div>
				<div class="slide" id="slide18"></div>
				<div class="slide" id="slide19"></div>
				<div class="slide" id="slide20"></div>
				<div class="slide" id="slide21"></div>
				<div class="slide" id="slide22"></div>
				<div class="slide" id="slide23"></div>
				<div class="slide" id="slide24"></div>
				<div class="slide" id="slide25"></div>
				<div class="slide" id="slide26"></div>
				<div class="slide" id="slide27"></div>
				<div class="slide" id="slide28"></div>
			</div>
			<div id="flechaIzq" onclick="mueve('izq')"></div>
			<div id="flechaDer" onclick="mueve('der')"></div>
		</section>
		<section id="seccion1"> <!-- Tres Banners -->
			<article class="iw">
				<div class="banners" id="bannIzquierdo">
					<figure>
						<img src="shared/img/banner1.png" width="120%" alt="banner1.jpg" />
					</figure>
					<div class="texto">
						<h3>
							GALERÍA
						</h3>
						<div class="rombos"></div>
						<p> ¡Deja volar tu imaginación! Encuentra tu estilo y crea hermosos proyectos utilizando los productos de Ma Baker and Chef.</p>
					</div>
				</div>
				<a href="catalogoProductos.php">
					<div class="banners" id="bannCentral">
						<figure>
							<img src="shared/img/banner2.png" width="120%" alt="banner2.png" />
						</figure>
						<div class="texto">
							<h3>
								TODOS LOS PRODUCTOS
							</h3>
							<div class="rombos"></div>
							<p> En Ma Baker and Chef encontrarás una amplia gama de productos y colores para darle un toque único a todas tus creaciones.</p>
						</div>
					</div>
				</a>
				<a href="contacto.php">
				<div class="banners" id="bannDerecho">
					<figure>
						<img src="shared/img/Banner3.png" width="120%" alt="Banner3.png" />
					</figure>
					<div class="texto">
						<h3>
							CONTACTO
						</h3>
						<div class="rombos"></div>
						<p>¿Tienes alguna duda o sugerencia? Rellena el formulario con tus inquietudes, y te responderemos a la brevedad.</p>
					</div>
				</div>
				</a>
			</article>  
		</section>

		<section id="seccion2">  <!-- Productos -->
			<div class="iw">
				<a href="productos.php">
					<div id="contenedorProds">
                        <a href="chocolate.php">
						<div class="btnProducto" id="chocolate">
							<img src="shared/img/productos/btnChocolate.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Chocolate
								</div>
								<div class="texto2">
									BOMBONERIA
								</div>
							</div>
						</div> <!-- producto -->
                        <a href="gelatinaArtistica.php">
						<div class="btnProducto" id="gelatina">
							<img src="shared/img/productos/btnGelatina.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Gelatina
								</div>
								<div class="texto2">
									ARTÍSTICA
								</div>
							</div>
						</div> <!-- producto -->
						<a href="galletasDecoradas.php">
						<div class="btnProducto" id="galletas">
							<img src="shared/img/productos/btnGalletas.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Galletas
								</div>
								<div class="texto2">
									DECORADAS
								</div>
							</div>
						</div> <!-- producto -->
						<a href="seccionFondant.php">
						<div class="btnProducto" id="fondant">
							<img src="shared/img/productos/btnFondant.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Fondant
								</div>
							</div>
						</div> <!-- producto -->
						<a href="bombones.php">
						<div class="btnProducto" id="bombon">
							<img src="shared/img/productos/btnBombones.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Bombón
								</div>
								<div class="texto2">
									MALVAVISCOS
								</div>
							</div>
						</div> <!-- producto -->
						<a href="pastelCrema.php">
						<div class="btnProducto" id="pastel">
							<img src="shared/img/productos/btnPastel.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Pastel
								</div>
								<div class="texto2">
									DE CREMA
								</div>
							</div>
						</div> <!-- producto -->
						<a href="panaderia.php">
						<div class="btnProducto" id="panaderia">
							<img src="shared/img/productos/btnPanaderia.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Panaderia
								</div>
							</div>
						</div> <!-- producto -->
						<a href="postres.php">
						<div class="btnProducto" id="postres">
							<img src="shared/img/productos/btnPostres.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Postres
								</div>
							</div>
						</div> <!-- producto -->
						<a href="ingredientes.php">
						<div class="btnProducto" id="ingredientes">
							<img src="shared/img/productos/btnIngredientes.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Ingredientes
								</div>
							</div>
						</div> <!-- producto -->
						<a href="moldes.php">
						<div class="btnProducto" id="moldes">
							<img src="shared/img/productos/btnMoldes.jpg" width="100%"  />
							<div class="texto">
								<div class="texto1">
									Moldes
								</div>
							</div>
						</div> <!-- producto -->
						
					</div> <!-- contenedorBtnsProductos -->
				</a>

				<a href="catalogoProductos.php"><div id="btnTodosProductos">
					· TODOS<strong> NUESTROS </strong>PRODUCTOS ·
				</div></a>
			</div>
		</section>
		
		<section id="seccion3">
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
	
</body>
</html>