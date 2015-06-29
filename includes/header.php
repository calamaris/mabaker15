<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52331342-1', 'auto');
  ga('send', 'pageview');

</script>
<header data-0="top:0px; position:fixed;" data-500="top:-103px; position:fixed;">
	<div class="iw">
		<a href="index.php">
			<div id="logo" data-0="bottom: -60px; height:224px; background-image: url(shared/img/logoMabaker.png);" data-300="bottom: -80px;" data-303="bottom:-30px; height:102px; background-image: url(shared/img/MaBakerLogo.png);"></div>
		</a>
		<nav>
			<ul>
				<a href="productos.php">
					<li id="prod"><span class="tProducto">Productos</span>
						<div id="prodSubmenu">
							<ul>
								<a href="catalogoProductos.php"><li onmouseover="miniatura('productos')"><strong class="tCatalogo">Catálogo de productos</strong></li></a>
								<a href="chocolate.php"><li onmouseover="miniatura('chocolate')" class="tChoco">Chocolate</li></a>
								<a href="seccionFondant.php"><li onmouseover="miniatura('fondant')" class="tFondant">Fondant</li></a>
								<a href="gelatinaArtistica.php"><li onmouseover="miniatura('gelatina')" class="tgelatina">Gelatina artística</li></a>
								<a href="galletasDecoradas.php"><li onmouseover="miniatura('galletas')" class="tGalleta">Galletas decoradas</li></a>
								<a href="bombones.php"><li onmouseover="miniatura('bombon')" class="tBombon">Bombón</li></a>
								<a href="pastelCrema.php"><li onmouseover="miniatura('pastel')" class="tPastel">Pastel de crema</li></a>
								<a href="panaderia.php"><li onmouseover="miniatura('panaderia')" class="tPanaderia">Panadería</li></a>					
							</ul>
							<div id="miniaturaSmenu">
								<img src="shared/img/miniaturas/pastel.png" width="200" alt="">
							</div>
						</div>
					</li>
				</a>
				<a href="empresa.php"><li id="empresa">Empresa</li></a>
				<a href="videorecetas.php">
					<li id="videorecetas">Videorecetas</li>
				</a>
				<a href="contacto.php">
					<li id="contacto">Contacto</li>
				</a>
				
			</ul>
			<div id="redesZ">
				<a href="https://www.youtube.com/channel/UCGGyimOFvydG6xazUESCeeA" target="_blank"><div  class="btnRedes" id="youtube"></div></a>
				<a href="http://issuu.com/mabakerandchef" target="_blank"><div class="btnRedes" id="issuu"></div></a>
				<div class="btnRedes" id="pinterest"></div>
				<a href="https://www.facebook.com/MaBakerAndChef?notif_t=fbpage_fan_invite" target="_blank"><div class="btnRedes" id="facebook"></div></a>
				<a href="https://twitter.com/MaBakerAndChef" target="_blank"><div class="btnRedes" id="twitter"></div></a>
				<a href="https://plus.google.com/+Mabakerandchefcolorysabor/about" target="_blank"><div class="btnRedes" id="goggle"></div></a>
				<div class="btnRedes" id="mail"></div>
			</div>
		</nav>
		<div id="menuMovil" onclick="toggleActive('nav')">
			<span class="menuLine"></span>
			<span class="menuLine"></span>
			<span class="menuLine"></span>
		</div>

		<div id="langSelector">
			<span>Idioma</span>
			<div class="lang active" id="es" onclick="selecIdioma('es')">es</div>
			<div class="lang" id="en" onclick="selecIdioma('en')">en</div>
		</div>
	</div>

</header>