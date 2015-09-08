<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IPCNA</title>
<style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map {
                width: 100%;
                height: 600px;
            }
        </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educator Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
 <link href='http://fonts.googleapis.com/css?family=Poiret+One|Lily+Script+One|Raleway:400,300,500,600,200,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
       			 <script type="text/javascript">
            	  // When the window has finished loading create our google map below
           			 google.maps.event.addDomListener(window, 'load', init);
        
            		function init() {
            	    // Basic options for a simple Google Map
            	    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            	    //marcador con la ubicación de la Universidad
				

                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-13.525801, -71.954891), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF",}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-13.525801, -71.954891),
                    map: map,
                    title: 'Snazzy!'

                     });

                var popup = new google.maps.InfoWindow({
  			    content: 'ICPNA'});
   			    popup.open(map, marker);  

   			    //Imagen a mostrar con su ruta
				/*var image = new google.maps.MarkerImage(
     		   '../images/fachada.jpg'
      			, new google.maps.Size(300,300));*/

      			//Marcador con la imagen anterior como icono
				var place = new google.maps.LatLng(-13.522421, -71.962623);
				var marker = new google.maps.Marker({
     			   position: place
     	           , map: map
     			   , title: 'Cayo Los Pajaros, un clic para ver a tamaño completo'
                   , icon: image
                   , animation: google.maps.Animation.DROP,});
        
            }
        </script>
<body>
<!--start-home-->
		<div class="head" id="home">
		 
			  <div class="container" >  
			     <div class="main" >	
				   <div class="wht-head"  >

					


					<!--top-nav-->
					 <span class="menu"> </span>

					  <div class="top-menu">
					  <nav>
						<ul class="cl-effect-16">

							<li><a class="active scroll" href="#home" data-hover="Inicio">Inicio</a></li>
							
							<li><a class="scroll" href="#about" data-hover="Información General">Información General</a></li>
							<li><a class="scroll" href="#teach" data-hover="Ponentes">Ponentes</a></li>
							<li><a class="scroll" href="#gallery" data-hover="Galería">Galería</a></li>
							<li><a class="scroll" href="#preguntas" data-hover="Preguntas">Preguntas Frecuentes</a></li>
							<li><a class="scroll" href="#contact" data-hover="Contact">Contactos</a></li>
							<div class="clearfix"></div>
						</ul>
					</nav>		
					</div>
					<!-- script-for-menu -->






					
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu" ).slideToggle( "slow", function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-menu -->






				<div class="clearfix"></div>
			</div>



			 <div class="banner"> 
	
			 </div>
			 <!--banner-slide-->
					<script src="js/responsiveslides.min.js"></script>
				<script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager:true,
				        nav:false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			 <!--//banner-slide-->
			  <div class="clearfix"></div>
			 <!--end-banner-->
			 	<!--start-services-->
			
				
				<div class="about" id="about">
				  <h3 class="tittle two">Información General</h3>
				   <div class="ab-top">
					<div class="col-md-7 ab-left">
					


					 <p>La Asociación de Centros Binacionales de América Latina , Global Lazos de Estados Unidos, y el Departamento de Estado de Estados Unidos invitan a asistir a ABLA expreso 2015 en Washington , DC ! Este evento único permitirá a los líderes de los centros binacionales para explorar el futuro de la red ABLA al reunirse y aprender de expertos entrenadores , educadores y profesionales de cambio.</p>
					 </br>

					
					<script src="js/hola.js"></script>
					<link href="css/hola.css" rel='stylesheet' type='text/css' />	

				<a href="formu1.php" style="font-size:1.5em;"> Click aquí para registrarse! </a>

				
					</div>

							<div class="col-md-5 ab-img">
								<div  id="top" class="callbacks_container">
									<ul class="rslides" id="slider4">
									<li>  <img src="images/img1.jpg" alt=" " title="ab" /></li>	
								  </ul>
								</div>
							</div>
					


					  <div class="clearfix"></div>
				   </div>
				</div>


			<!--//end-services-->
	<!--start-teachers-->
			<div class="teachers" id="teach" >


				  <h3 class="tittle">Ponentes</h3>
					<div class="teachers-grids" >
					<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Ana Villa-Zamora <a href="#">View on Dribbble</a></p>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Arnel Baluyot <a href="#">View on Dribbble</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<h3>Educator</h3>
										<p>by Jamal Charanek <a href="#">View on Dribbble</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>


				</ul>
			</div>
	</div>
   <!--//end-teachers-->
   <!--start-about-->
   		<div class="services" id="service">
					 <h3 class="tittle two">Servicios</h3>
						<div class="serve-grids">
							
						
						<div class="clearfix"></div>

					</div> 
				</div> 
			<!--start-gallery-->
		<div class="gallery" id="gallery">
			<h3 class="tittle">Galería</h3>
			<div class="gallery-bottom">
			 <div class="view view-fifth">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
                <div class="view view-fifth">
                   <a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
                <div class="view view-fifth">
                    <a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
                <div class="view view-fifth">
                   <a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
				 <div class="view view-fifth">
                    <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
                <div class="view view-fifth">
                    <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
						<div class="mask">
							<h2>Educator</h2>
							<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
							<a href="#" class="info">More</a>
						</div>
					</a>
                </div>
		
                <div class="clearfix"> </div>
            </div>
		</div>
					<div class="about" id="preguntas">
				  <h3 class="tittle two">Preguntas Frecuentes</h3>
				   <div class="ab-top">
					<div class="col-md-7 ab-left">
					<h3 class="sub-text">Welcome to Our Education...</h3>
					 <p>Donec orci arcu, convallis id massa ac, imperdiet aliquet massa. Vivamus sit amet felis vitae nibh porttitor faucibus a eget risus. Aliquam bibendum quam leo, id vehicula enim elementum et. Aenean id turpis mattis, sagittis urna vehicula, euismod risus. Praesent mattis est et vulputate accumsan.Proin luctus, justo sit amet laoreet venenatis, libero velit tincidunt mi, nec fermentum ante massa id quam. In gravida erat vel diam blandit consequat. Morbi ut interdum nunc, eu egestas arcu.</p>
					  <p class="para">Donec orci arcu, convallis id massa ac, imperdiet aliquet massa.Donec orci arcu, convallis id massa ac, imperdiet aliquet massa.</p>
					</div>
			
					  <div class="clearfix"></div>
				   </div>
				</div>


					<div class="teachers" id="teach" style=" padding:0em 0;"> 

					<figure>
							
							<div id="map"></div>					 
					</figure>

					</div>
<!-- 
00192E fuerte
01213C debil -->

		<!--contact-->
			<div class="contact" id="contact">
					<h3 class="tittle two">Contactos</h3>
						<div class="contact-top">
							<div class="col-md-8 contact-top-right">
								<form>
									<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
									 <input type="text" class="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
									<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mensaje</textarea>
									<div class="sub-button">
										<input type="submit" value="Enviar">
									</div>
								</form>
							</div>
							<div class="col-md-4 contact-top-left">
							<div class="contact-top-one">
								<h4>Dirección:</h4>
									<p>Newyork Still Road.
									<span>756 gt globel Place,</span>
										CD-Road,M 07 435.
									</p>
							</div>
							<div class="contact-top-one">
								<h4>Teléfono:</h4>
									<p>Telephone: +1 234 567 9871
									<span>FAX: +1 234 567 9871</span>
									</p>
							</div>
							<div class="contact-top-one">
								<h4>Correo:</h4>
								<p><a href="mailto:info@example.com">mail@example.com</a></p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!--contact-->
			<div class="copy">
		              <p>&copy; All Rights Reserved </p>
		            </div>
					<!--footer-->


	</div>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
	<!--//gallery-->

	</div>
</div>	

	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>