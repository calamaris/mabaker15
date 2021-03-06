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
		
		<section class="topBanner" id="panaderiaBanner">
			<div class="iw">
				
			</div>
		</section>
		<section class="productosS fondant">
			<div class="iw">
				<div class="navegacionWrapp">
					<div class="navegacion">
						<a href="productos.php" class="tProducto">Productos</a> > <a href="panaderia.php" class="tPanaderia">Panaderia</a> 
					</div>
				</div>
				<div class="titulo">
					<h1 class="tPanaderiaS">Panaderia</h1>
					<h2></h2>

					
				</div>
				<section class="cuadricula productos">
					
						<div id="contenedorProds">					
						   						
																																																															
							<a href="brilloParaPan.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/BrilloPan.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tBrillo">
											Brillo para 
										</div>
										<div class="texto2" id="tBrillo2">
											Pan y Fruta
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="mermeladasHorneables.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/MermeladaHorneable.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tMermelada">
											Mermelada
										</div>
										<div class="texto2" id="tMermelada2">
											Horneable
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="coberturaChocolate.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/CoberturaParaChocolate.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tCoberturaChoco">
											Cobertura 
										</div>
										<div class="texto2" id="tCoberturaChoco2">
											para Chocolate
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="moldesSilicona.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/MoldesSilicona.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tMoldesSilicona">
											Moldes
										</div>
										<div class="texto2" id="tMoldesSilicona2">
											de Silicona
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="saborPan.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/SaborPan.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tSaborPan">
											Sabor 
										</div>
										<div class="texto2" id="tSaborPan2">
											para Pan
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="coberturaDona.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/CoberturaparaDona.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tCoberturaDona">
											Cobertura 
										</div>
										<div class="texto2" id="tCoberturaDona2">
											para Dona
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="colorEnPolvo.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/ColoresparaPan.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tColorPolvo">
											Color 
										</div>
										<div class="texto2" id="tColorPolvo2">
											en Polvo
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="vainillaOscura.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/VainillaOscura.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tVainilla">
											Vainilla Oscura 
										</div>
										<div class="texto2" id="tVainilla2">
											
										</div>
									</div>
								</div> 
							</a> <!-- producto -->
							<a href="moldesTruffly.php">
								<div class="btnProducto" >
									<img src="shared/img/productos/productos320/MoldesTruffly.png" width="100%"  />
									<div class="texto">
										<div class="texto1" id="tMoldesTruffly">
											Moldes
										</div>
										<div class="texto2" id="tMoldesTruffly2">
											Truffly
										</div>
									</div>
								</div> 
							</a> <!-- producto -->						

							
							
							
						</div> <!-- contenedorBtnsProductos -->
				

					<!-- <a href="producto.html"><div id="btnTodosProductos">
						· TODOS<strong> NUESTROS </strong>PRODUCTOS ·
					</div></a> -->
						
				</section>
			</div>
		</section>

		<?php include("includes/footer.php"); ?>
	
	</div> <!-- skrollrBody -->
	<script src="shared/js/main.js"></script>
	<script src="shared/js/skrollr.js"></script>
	<script>
			
			window.localStorage.setItem('seccionOrigen','Panadería');
			window.localStorage.setItem("link","panaderia.php");
			
	</script>
</body>
</html>