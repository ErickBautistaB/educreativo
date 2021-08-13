<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
	  <link rel="stylesheet"  href="css/bootstrap.min.css">
	  <link rel="stylesheet"  href="css/estiloss.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	  <script src="js/jquery.js"></script>
	  <script src="js/bootstrap.min.js"></script>
   <title>servicios educreativos</title>

</head>
<body onunload="actualizar almacenamiento('campos no salvados')", onoffline="alert('la coneccion a internet se ha perdido!');">

    <header data-aos="zoom-out-down" data-aos-duration="3000">
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu"><img src="https://scontent.fmex30-1.fna.fbcdn.net/v/t1.18169-9/12289694_1102757276454393_5014321609263742120_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeH1NVMmCAxfL9Dx4XTolv8bQyTOWEJdt-lDJM5YQl236c_3ea_Bn8XeNGOjNZU6f5bfL19rGB1ZiiWzZ88k1teZ&_nc_ohc=nhBPp4O3A4YAX-uu9XO&_nc_ht=scontent.fmex30-1.fna&oh=f53c26657581bfbf165e72b497ad47a9&oe=61286678" width="50px" height="50px"></label>	
		<nav class="menu" data-aos="fade-up" data-aos-anchor-placement="center-center">
			<ul>
				<li><a href="index.html #II">Inicio</a></li>
				<li><a href="index.html #Qu">Quienes somos</a></li>
				<li><a href="index.html #Of">Lo que ofrecemos</a></li>
				<li><a href="index.html #Cu">Cursos</a></li>
			</ul>
		</nav>	

	</header>
<p id="II">.</p><br>
<table >

  <tr>

  	<th data-aos="flip-up" data-aos-duration="3000"><img src="https://scontent.fmex30-1.fna.fbcdn.net/v/t1.18169-9/12289694_1102757276454393_5014321609263742120_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeH1NVMmCAxfL9Dx4XTolv8bQyTOWEJdt-lDJM5YQl236c_3ea_Bn8XeNGOjNZU6f5bfL19rGB1ZiiWzZ88k1teZ&_nc_ohc=nhBPp4O3A4YAX-uu9XO&_nc_ht=scontent.fmex30-1.fna&oh=f53c26657581bfbf165e72b497ad47a9&oe=61286678" width="100" height="100" class="rounded mx-auto d-block" align="left" id="II" alt="Imagen de Educreativos"></th>

    <th data-aos="flip-up" data-aos-duration="3000"><a href="https://www.facebook.com/educreativos.mx"><img src="https://image.flaticon.com/icons/png/512/3583/3583414.png" align="left" width="100" height="100" class="rounded mx-auto d-block"><h3>Servicios<br>Educreativos</h3></a></th>

    <th data-aos="flip-up" data-aos-duration="3000"><a href="https://wa.me/7712668296?texto=Quisiera%20consultar%20sobre%20los%20cursos"><img src="https://image.flaticon.com/icons/png/512/4053/4053281.png" align="left" width="100" height="100" class="rounded mx-auto d-block"><h3>771 266 8296</h3></a></th>

    <th data-aos="flip-up" data-aos-duration="3000"><a href="mailto:educreativos@gmail.com?Subject=Interesado%20en%20el%20curso"><img src="https://image.flaticon.com/icons/png/512/5208/5208148.png" align="left" width="100" height="100" class="rounded mx-auto d-block"><h3>educreativos.mx@gmail.com</h3></a></th>

  </tr>
</table>

<main>
		<?php  
		if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['psw']) && !empty($_POST['psw'])) {
			$escu=$_POST['uname'];
			$ps=$_POST['psw'];
			if($escu=="e1" and $ps=123){
			?>
			<br>
				<img src="http://www.cuh.edu.mx/portal/dist/img/cuhhero.jpg">
				<br>
				<!-- Container for the image gallery -->
				<div class="container_galeria">

				  <!-- Full-width images with number text -->
				  <div class="mySlides">
				    <div class="numbertext">1 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic6/imagen1.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
				    <div class="numbertext">2 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic1/imagen1.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
				    <div class="numbertext">3 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic2/imagen1.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
				    <div class="numbertext">4 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic5/imagen1.jpg" style="width:100%">
				  </div>

				  <div class="mySlides">
				    <div class="numbertext">5 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic3/imagen1.png" style="width:100%">
				  </div>

				  <div class="mySlides">
				    <div class="numbertext">6 / 6</div>
				      <img src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic4/imagen1.jpg" style="width:100%">
				  </div>

				  <!-- Next and previous buttons -->
				  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				  <a class="next" onclick="plusSlides(1)">&#10095;</a>

				  <!-- Image text -->
				  <div class="caption-container">
				    <p id="caption"></p>
				  </div>

				  <!-- Thumbnail images -->
				  <div class="row">
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic6/imagen1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Psicologia">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic1/imagen1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Administración">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic2/imagen1.jpg" style="width:100%" onclick="currentSlide(3)" alt="Contaduria">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic5/imagen1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Sistemas">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic3/imagen1.png" style="width:100%" onclick="currentSlide(5)" alt="Derecho">
				    </div>
				    <div class="column">
				      <img class="demo cursor" src="http://www.cuh.edu.mx/pagina/assets/img/licenciatura/lic4/imagen1.jpg" style="width:100%" onclick="currentSlide(6)" alt="Educación">
				    </div>
				  </div>
				</div>
<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			// Next/previous controls
			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			// Thumbnail image controls
			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("demo");
			  var captionText = document.getElementById("caption");
			  if (n > slides.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";
			  }
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";
			  dots[slideIndex-1].className += " active";
			  captionText.innerHTML = dots[slideIndex-1].alt;
			}

</script>
<br>
		<section>
			<div id='inicio' style='text-align:left' data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
			  <p>La formación y la capacitación de las personas son actividades complejas que requieren de mucha atención y esfuerzo, tanto de aquellos que transmiten conocimientos, como de los que los reciben.</p><!--parrafos -->
			  <hr><!--linea -->
				<p> En la actualidad existen muchas formas de enseñanza que han ayudado a que diferentes empresas e instituciones educativas puedan conseguir mejores resultados en sus programas de formación y capacitación; cada uno con diferentes necesidades y metas, pero todos persiguiendo la eficacia y la eficiencia.</p>
				<hr>
				<p>La tecnología educativa de nuestros tiempos y el uso de medios de comunicación como el internet, han facilitado el camino hacia una educación más completa, más rápida, e incluso, más barata y con mejores resultados en los estudiantes y empleados de empresas. Estamos hablando de la formación y capacitación a distancia y semipresencial, más conocida como e-Learning y b-Learning.</p>
				<p>Algunos de los beneficios de estas modalidades de enseñanza son los siguientes:
				<ul>
				<li>La educación virtual es rápida.</li>
				<li>Es flexible con el tiempo, ya que los usuarios pueden ingresar cuando les sea posible desde cualquier dispositivo con internet.</li>
				<li>Rompe con las barreras geográficas que eran un obstáculo para integrarse a ciertas universidades o centros de capacitación.</li>
				<li>La información y contenidos se pueden actualizar más rápido que la de los materiales impresos.</li>
				</ul></p>
				<p>El uso de las computadoras e internet nos ofrece grandes pero también grandes compromisos.</p> 
  		</div>

		</section>
				
			<?php
			}
			else{
			?>
			<h3>Ha ocurrido un herrro, Contraseña incorrecta.</h3>
			<?php
			}
		}
		else{
			?>
			<h3>Ha ocurrido un herrro, Contraseña incorrecta.</h3>
			<?php
		}
		?>
		

		    
		
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
</body>
</html>