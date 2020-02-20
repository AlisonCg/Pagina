<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página Web con HTML5</title>
	<link rel="stylesheet" type="text/css" href="css/estilost.css">
	<script>
	function mostrar(id) {
	  obj = document.getElementById(id);
	  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
	}
	</script>
</head>
<body>
	<div class="main-container">
		<header>
			<img src="multimedia/Logo_Naku.png" align="left">
			<nav>
				<table align="right">
					<tr>
						<style type="text/css">
						</style>
						<td><b><big><a href="index.html"> Inicio<img class="Inicio" src="multimedia/Inicio.png"></a><BR><BR><BR><BR></big></b></td>
						<td><b><big><a href="#" onclick="mostrar('divTexto1'); return false" /> Nosotros<img class="Inicio" src="multimedia/Nosotros.png"></a><div id="divTexto1" style="visibility:hidden"><BR><a name="h" class="uno" href="Somos.html"> ♣ ¿Quiénes Somos? </a>
						<BR><a class="uno" href="Preguntas.html"> ♣ Preguntas Frecuentes </a></div></big></b></td>
						<td><b><big><a href="Servicios_bienes.html" target="_top"> Servicios/Bienes <img class="Inicio" src="multimedia/S_B.png"></a><BR><BR><BR><BR></big></b></td>
						<td><b><big><a href="Casos De Exito.html" target="_top"> Casos De Éxito<img class="Inicio" src="multimedia/Exito.png"></a><BR><BR><BR><BR></big></b></td>
						<td><b><big><a href="Contacto.html" target="_top"> Contacto<img class="Inicio" src="multimedia/Contacto.png"></a><BR><BR><BR><BR></big></b></td>
					</tr>
				</table>
			</nav>
			<h2 class="frase"> "La Moda Es Parte De Tu Vida" </h2>
		</header>

		<section>
			<article>
				<img class="img2" src="multimedia/look.gif">
				<BR><BR>
				<h1 class="t_3"><a class="t_3" href="https://www.trendencias.com/street-style/outfits-geniales-y-perfectos-para-pasar-la-semana"> Ve Outfits Geniales  </a></h1>				
			</article>
			<aside>
				<video width="350" height="270" controls="">
				  <source src="multimedia/video.mp4" type="video/mp4">
				  <source src="multimedia/video.ogg" type="video/ogg">
				</video>
				<BR><BR>
				<h1 class="t_3">¡JORYCK te dice cómo definir tu estilo!  </h1>	
			</aside>
			<article>
				<img class="img2" src="multimedia/stilo2.gif">
				<BR><BR>
				<h1 class="t_3"><a class="t_3" href="Somos.html"> Acerca de Nakú </a></h1>	
			</article>
			<aside>
				<h1 class="t_3">¡ORGANIZATE!  </h1>	
				<BR><BR>
				<h1 class="t_1"> Prueba esta aplicaciones que las vas a amar </h1>
				<BR><BR>
				<h3 class="t_4"><a href="https://apps.apple.com/us/app/stylebook/id335709058"> ♥ Stylebook </a></h3>
				<BR><BR>	
				<h3 class="t_4"><a href="https://play.google.com/store/apps/details?id=net.fashionfreax&hl=es"> ♥ Fashion Freax Street Style App </a></h3>	
				<BR><BR>
				<h3 class="t_4"><a href="https://play.google.com/store/apps/details?id=com.android21buttons"> ♥ 21 Buttons - La red social de moda y tendencias </a></h3>	
				<BR><BR>
				<h3 class="t_4"><a href="https://play.google.com/store/apps/details?id=com.chicisimo"> ♥ Chicisimo </a></h3><BR><BR>	
				<h3 class="t_4"><a href="https://play.google.com/store/apps/details?id=com.asos.app"> ♥ ASOS </a></h3>	

			</aside>
			</aside>
		</section>
		<footer>
			<table>
				<tr>
					<td class="t_1">
						INSTITUCIONAL
						<table>
							<tr><td class="t_2"><a class="a2" href="Somos.html"> Quienes Somos </a></td></tr>
							<tr><td class="t_2"><a class="a2" href="Contacto.html"> Contacto </a></td></tr>
							<tr><td class="t_2"><a class="a2" href="Terminos_condiciones.html"> Términos y condiciones </a></td></tr>
							<tr><td></td></tr>
							<tr><td><BR></td></tr>
						</table>
					</td>
					<td class="t_1"> REDES SOCIALES 
						<table>
							<tr><td class="o"> Facebook <BR>
								• Nakú Style
							</td></tr>
							<tr><td class="o"> Instagram 
								<BR>
								• Nakú_Sty
							</td></tr>
							<tr><td class="o"> Youtube 
								<BR>
								• Nakú is my life
							</td></tr>
							<tr><td></td></tr>
						</table>
					</td>
					<td class="t_1"> CAMPAÑAS
						<table>
							<tr><td class="o"> Apps  </td></tr>
							<tr><td class="t_2"><a class="a2" href="https://chicisimo.es/">♥ Chicisimo ♥</a><BR><BR></td></tr>
							<tr><td></td></tr>
							<tr><td></td></tr>
							<tr><td><BR></td></tr>
						</table>
					</td>
				</tr>
			</table>
		</footer>		
	</div>
</body>
</html>
