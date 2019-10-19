<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Info-Mx</title>
    <meta name="viewport" content="width=device-width,
    user=scalable=no, initial-scale=1.0, maximum-scale=1.0,
    minimum-scale=1.0">
    <link rel="stylesheet" href="css/estiloPrincipal.css">
    <script src="js/functions.js"></script>
    <script src="js/jquery.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="contenedor">
        <h1 class="logo">Info-Mx</h1>
        <span class="icon_menu" id="btn_menu"><img class="icon_menu2" src="image/menu.png"></span>
        <nav class="nav" id="nav">
					<ul class="menu">
            <li class="menu_item"><a class="menu_link select" href="index.html">Inicio</a></li>
            <li class="menu_item"><a class="menu_link" href="mapa.html">Mapa</a></li>
            <li class="menu_item"><a class="menu_link" href="acercade.html">Acerca de</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="banner">
      <img src="image/banner.jpg" class="banner_img">
      <div class="contenedor">
        <h2 class="banner_titulo"><img src="image/logo.jpeg"></h2>
        <p class="banner_txt">Es una aplicacion web que permite el acceso a la transparencia de la información pública.</p>
      </div>
    </div>
    <script src="js/menu.js"></script>
    <main class="main">
      <div class="contenedor">
        <section class="infoG">
					<article class="info_columnaG">
            <h2 class="info_titulo">Estado de Morelos</h2>
						<p>Salario de Servidores Públicos</p>
						<input type="button" onclick="getData('controller/getSueldos.php')" value="Ver Salarios"/>

						<br><br>
						<p>Presupuesto por Municipio</p>
						<input type="button" onclick="getData2('controller/getPresupuesto.php')" value="Ver Presupuesto"/>

						<br><br>
						<form class="" action="muni.html" method="post">
							<p>Ver información de Municipios</p>
							<input type="submit" value="Ver Información"/>
						</form>



          </article>
          <article class="info_columnaG">
            <h2 class="info_titulo">Gráficas</h2>

				        <div class="grafica">
				          <canvas id="bar-chart" class="graf" readonly></canvas>
				         </div>

				            <!--<canvas id="bar-chart" width="400" height="300" style="background-color: aqua;"></canvas>-->
          </article>
        </section>
      </div>
    </main>
    <footer class="footer">
      <div class="social">
        <div class="icon-">
          <img src="image/facebook.png" alt="" class="imgs">
        </div>
        <div class="icon-">
          <img src="image/instagram.png" alt="" class="imgs">
        </div>
        <div class="icon-">
          <img src="image/twitter.png" alt="" class="imgs">
        </div>
        <p class="copy">&copy; Data-FreeMex - Todos los derechos reservados</p>
      </div>
    </footer>
		<script src="view/js/chart.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  </body>
</html>
