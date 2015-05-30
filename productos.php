<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<title>Ma Baker and Chef</title>
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" href="shared/css/productoBase.css">
	<link rel="stylesheet" href="shared/css/productos.css">
</head>
<body >
	<?php include("includes/header.php"); ?>

	<div id="skrollr-body">
	
		<div id="fixHeader" data-0="height:154px" data-310="height:59px"></div>
		
		<section class="topBanner" id="productosBanner">
			<div class="iw">
				
			</div>
		</section>
		<section class="productosS chocolates">
			<div class="iw">
				<div class="navegacionWrapp">
					<div class="navegacion">
						<a href="productos.php">Productos</a> > <!-- <a href="chocolate.php">Chocolates</a> > -->
					</div>
				</div>
				<div class="titulo ">
					<h1 class="homeProductos">Productos</h1>
					<h2 class="homeProductos">Encuentra la gama de productos necesarios por categoria</h2>

					
				</div>
				<section class="cuadricula productos">

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
							</a>
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
				

					<a href="catalogoProductos.php"><div id="btnTodosProductos">
						· TODOS<strong> NUESTROS </strong>PRODUCTOS ·
					</div></a>
						
				</section>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>


	
	</div> <!-- skrollrBody -->
	<script src="shared/js/main.js"></script>
	<script src="shared/js/skrollr.js"></script>

	<script>
			window.localStorage.setItem('seccionOrigen','');
			window.localStorage.setItem("link","");

	</script>
</body>
</html>