
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="icon" href="img/ico.png">

	<link rel="stylesheet" href="styles.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="main.js"></script>
	<style>
			
			/* Estilos para los botones de acceso */
			.log {
			  background-color: #01DFD7;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}
			
			button:hover {
				background-color:#2980b9;
			}
			
			</style>
</head>
<body bgcolor="#2e86c1">
   <div align="center"><img widht="200px" height="200px" src="img/logo.jpg"></div>
   <header>
		<div class="contenedor">
			<div class="logo">
			</div>
			<!--Menu principal de los eventos-->
			<nav class="navegar">
			<nav class="menu" id="menu">
				<ul>
					<li><a href="#">SellTicket</a></li>
					<li><a href="consulta_todos1.php?usuario=<?php echo $_REQUEST['usuario'];?>">Conciertos</a>
                    </li>
					<li><a href="consulta_todos2.php?usuario=<?php echo $_REQUEST['usuario'];?>">Teatro y Culturales</a>
					</li>
					<li><a href="consulta_todos3.php?usuario=<?php echo $_REQUEST['usuario'];?>">Deportes</a>
					</li>
						<li><a href="acceso.php?usuario=<?php echo $_REQUEST['usuario'];?>">Perfil</a></li>
                <ul>
					<li><a href="index.html">Salir</a></li>
				</ul>
			</nav>
			</nav>
		</div>
	</header>
	<!--Slider imagenes que van pasando-->
	<div class="w3-content w3-display-container">
  <img width=100% height=380px class="mySlides" src="img/ev1.jpg">
  <img width=100% height=380px class="mySlides" src="img/ev2.jpg"
  <img width=100% height=380px class="mySlides" src="img/ev5.jpg">
  <img width=100% height=380px class="mySlides" src="img/ev4.jpg">
  <img width=100% height=380px class="mySlides" src="img/ev3.jpg">
<!--Botones para ir y regresar a la imagen-->
  <button class="buttonleft" onclick="plusDivs(-1)">&#10094; Atras</button>
  <button class="buttonright" onclick="plusDivs(1)">Siguiente &#10095;</button>
</div>
<!--Codigo en javascript para la funcion de slider-->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>
<br>
	<!--Informacion del contenido-->
	<h1 align="center" style="color:#6e2c00">Lo mas buscado</h1>
	<table width="100%">
		<tr>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/n1.jpg"></div>
				<p><h2 style="color:#aab7b8">Kiss cancela conciertos</h2></p>
				<p style="color:#f4f6f7";>La banda de rock, Kiss, informó de la cancelación<br/>de sus conciertos en Australia y Nueva Zelanda, luego de<br/>que Paul Stanley, se enfermó de la garganta<br/>al contagiarse de gripe</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/n2.jpg"></div>
				<p><h2 style="color:#aab7b8">Palenque de la Feria de Querétaro</h2></p>
				<p style="color:#f4f6f7";>El grupo Duelo llegará al Palenque de la Feria de<br/>Querétaro 2019 en un concierto<br/>que no te puedes perder.</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/n3.jpg"></h2></p>
				<p><h2 style="color:#aab7b8">Tame Impala en el Foro Sol</h2></p>
				<p style="color:#f4f6f7";>Tame Impala anuncia hoy que regresará a México<br/>para su concierto más grande hasta la fecha,<br/>ahora en el Foro Sol.</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
		</tr>
		</table>
		<br>
		<br>
		<h1 align="center" style="color:#6e2c00">Descubre</h1>
		<table  width="100%">
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s1.jpg"></div>
				<p><h2 style="color:#aab7b8">Ballet Folklórico de México</h2></p>
				<p style="color:#f4f6f7";>Fue fundado por Amalia Hernández en 1952 y por seis<br/>décadas ha sido el conjunto emblemático del<br/>baile folclórico de este país</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s2.jpg"></div>
				<p><h2 style="color:#aab7b8">Festival Nacional EntreCoros</h2></p>
				<p style="color:#f4f6f7";>Casi se termina este evento, no pierdas la oportunidad de<br/>presenciar el talento de todos<br/>nuestros participantes</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s3.jpg"></h2></p>
				<p><h2 style="color:#aab7b8">7º Encuentro internacional de Clown</h2></p>
				<p style="color:#f4f6f7";> Deja salir a tu niño interior mientras te comunicas<br/>con el lenguaje más humano: las risa.<br/>15 espectáculos.</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
		<tr>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s4.jpg"></div>
				<p><h2 style="color:#aab7b8">The Book of Mormon</h2></p>
				<p style="color:#f4f6f7";>Es un musical satíricoCuenta la historia de dos jóvenes<br/>misioneros mormones que van a predicar<br/>la palabra de Dios</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s5.jpg"></div>
				<p><h2 style="color:#aab7b8">Indie Fest Campeche</h2></p>
				<p style="color:#f4f6f7";>Es un festival y movimiento de música alternativa en<br/>el que se da espacio a los artistas<br/>alternativos y/o independientes.</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
			<td width="50px" height="50px">
				<div class="ex1"><img src="img/s6.jpg"></h2></p>
				<p><h2 style="color:#aab7b8">Orquesta Sinfónica de Yucatán</h2></p>
				<p style="color:#f4f6f7";>Descubre y conoce la historia de Centro Cultural Universitario (UNAM), y consulta las actividades<br/>que se presentan en este lugar. Cómo llegar a Centro Cultural<br/>Universitario (UNAM)</p>
				<button class="btn">Ver más &dArr;</button>
			</td>
		</tr>
	</table>
<br>
<hr>
</body>
<!--Inicia pie de pagina--> 
            <footer>
                <h1>SellTicket</h1>
                <h2>Vamos a conectarnos:</h2>
                <br>
				<div class="iconos-sociales">
					<a href="#" target="_blank"><img alt="Sígueme en Facebook" height="50" width="50" src="https://2.bp.blogspot.com/-28mh2hZK3HE/XCrIxxSCW0I/AAAAAAAAH_M/XniFGT5c2lsaVNgf7UTbPufVmIkBPnWQQCLcBGAs/s1600/facebook.png" title="Sígueme en Facebook"/></a>
					<a href="#" target="_blank"><img alt="Sígueme en Instagrama!" height="50" width="50" src="https://1.bp.blogspot.com/-CUKx1kAd-ls/XCrI4UAvNqI/AAAAAAAAIBI/-i1neUt8kZwP6YOsFOXX5p0Bnqa29m-JgCLcBGAs/s1600/youtube2.png" title="Sígueme en Instagrama!"/></a>
					<a href="#" target="_blank"><img alt="Sígueme en Instagrama!" height="50" width="50" src="https://4.bp.blogspot.com/-Ilxti1UuUuI/XCrIy6hBAcI/AAAAAAAAH_k/QV5KbuB9p3QB064J08W2v-YRiuslTZnLgCLcBGAs/s1600/instagram.png" title="Sígueme en Instagrama!"/></a>
				<br>
				<br>
				<a href="vende_evento.html" style="color: #fdfefe ;">Vende tu evento con nosotros</a>
				<h3 align="center">&copy; Todos los dererechos reservados.</h3>
				</div>
            </footer>
		<!--Fin pie de pagina-->
</html>