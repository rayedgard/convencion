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
<body>
<!--start-home-->
		<div class="head" id="home">
		 
			  <div class="container" >  
			     <div class="main" >	
		



			<div class="bannerIn">
    <img src="images/bannerIn.png"/>
    </div>
			
			
				
					
				<div class="about" id="about">
					<script src="js/hola.js"></script>
				 <link href="css/form.css" rel='stylesheet' type='text/css' />

				<style type="text/css">
					 .contact_form input:required {
				           background: #fff url(images/red_asterisk.png) no-repeat 98% center;
				         } 

				         .contact_form input:required:valid { 
				          background: #fff url(images/valid.png) no-repeat 98% center; 
				          box-shadow: 0 0 5px #5cd053;
				           border-color: #28921f;
				            }


				         .contact_form input:focus:invalid { 
				          background: #fff url(images/invalid.png) no-repeat 98% center;
				          box-shadow: 0 0 5px #d45252;
				          border-color: #b03535;
				          }
				</style>
				<form class="contact_form" action="formu3.php" id="contact_form" runat="server" >
				
					  <header>					    
					    
					  </header>						

				     <ul>
				        <li style="width:35%;">	
							<img style="padding-top:1px; width:100%;" src="images/process2.png" >
						</li>
				     <li>
				     <h2>Información Personal</h2> <span  class="required_notification"> * Datos requeridos</span>
				     </li>
						<li>					 
					  <label for="name" style="">
					  	Nombres:
					  </label>					  
					  	Luis 
					  	</li>
					 

						<li>	
						  <label for="name" >
					  		Apellidos:
					 	</label>					 
					  		Roman
						</li>
					
					<li >	
					  <label for="name"  >
						Correo:
						  </label>					
					  	 betto19.32@gmail.com
			 			 
						 </li>
						 <li>		
						<label for="name">Organización:</label>
						<input title="Se necesita un nombre" type="text" name="organization"  autofocus  required/>
					</li>	
					<li>		
						<label for="name">Titulo:</label>
						<input title="Se necesita un nombre" type="text" name="tittle" required/>
					</li>
					<li style="  border-bottom: 1px solid #ddd;">		
						<label for="name">Teléfono:</label>
						 <input title="Se necesita un telefono" type="number" name="phone" required/>
					</li >

					<li style="  border-bottom: 1px solid #ddd;">
					<h2>Dirección del trabajo:</h2> <span class="required_notification">* Datos requeridos</span> 
					</li>


					<li >
					<label for="name">País </label>	
					<input list="country" name="list" />
					<datalist id="country">
					    <option label="Perú" value="Perú">
					    <option label="España" value="España">
					    <option label="Colombia" value="Colombia">
					    <option label="Venezuela" value="Venezuela">
					    <option label="Brasil" value="Brasil">
					    <option label="Argentina" value="Argentina">
					</datalist>				
					</li>

					<li>
						<label for="name">Dirección 1: 	</label>	
						<input title="Se necesita una direccion" type="text" name="organization" required/></br></br>
						<label for="name">Dirección 2: 	</label>
						<input title="Se necesita un nombre" type="text" name="organization" /></br></br>
						<label for="name">Dirección 3: 	</label>
						<input  title="Se necesita un nombre" type="text" name="organization" /></br>			 
					</li>
					<li>		
						<label for="name">Ciudad</label>	
						<input list="city" name="list" />
					<datalist id="city">
					    <option label="Cusco" value="Cusco">
					    <option label="Arequipa" value="Arequipa">
					    <option label="Lima" value="Lima">
					    <option label="Puno" value="Puno">
					    <option label="tacna" value="tacna">
					</datalist>					 
					</li>	
					<li style="  border-bottom: 1px solid #ddd;">		
						<label for="name">Estado/Provincia:</label>
						<input title="Se necesita un nombre" type="text" name="organization" required/>
					</li>
					<li style="  border-bottom: 1px solid #ddd;">	

						<h2>Enviar esta invitación a otras personas :</h2> <span class="required_notification">* Direcciones de amigos</span> 
					</li>
					<li >
						Utilice esta sección para reenviar esta invitación a otras personas. No entrar en el pueblo va a llevar con usted
					</li>
					<li>
					<input title="Se necesita una direccion" placeholder="Nombre" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Apellido" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Correo" type="text" name="organization" required/> <span class="form_hint">Formato correcto: "nombre@dominio.com"</span></br></br>
					<input title="Se necesita una direccion" placeholder="Nombre" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Apellido" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Correo" type="text" name="organization" required/> <span class="form_hint">Formato correcto: "nombre@dominio.com"</span></br></br>
					<input title="Se necesita una direccion" placeholder="Nombre" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Apellido" type="text" name="organization" required/>
					<input title="Se necesita un nombre" placeholder="Correo" type="text" name="organization" required/> <span class="form_hint">Formato correcto: "nombre@dominio.com"</span></br></br>
						</li>
					<li>
					Añadir un mensaje corto a la invitación
					</li>
					<li>
						<label for="message">Mensaje:</label> 
						<textarea name="message" cols="40" rows="6" required></textarea> 
					</li> 

					

					<li style="  border-bottom: 1px solid #ddd;">
						If your spouse or partner will be joining you for any of the evening events, please provide their name here. (Please note that guests will incur an additional fee.)	<input title="Se necesita un nombre" placeholder="Email Address" type="text" name="organization" required/>	

					</li>

					<li>
						<h2>Configuración de privacidad:</h2> <span class="required_notification">* datos requeridos</span> 
					</li>

					<li>		
			
						¿Desea que su nombre y el nombre de su huésped que se mostrará como asistir en la página web del evento?:</br>
						
						yes &nbsp;<input style="width:15px; height:15px" type="radio" name="gender" value="Male">&nbsp;&nbsp;
						no &nbsp;<input style="width:15px; height:15px" type="radio" name="gender" value="Female">
					</li>

					<li>		
					
						Do you want other attendees to be able to email you from the attendee list?:</br>
					
						yes &nbsp;<input style="width:15px; height:15px" type="radio" name="gender" value="Male">&nbsp;&nbsp;
						no&nbsp; <input style="width:15px; height:15px" type="radio" name="gender" value="Female">
					</li>
					    <li>
					    <a href="formu2.php">atras</a>&nbsp;&nbsp;
							<button class="submit" type="submit" value="Submit!" />enviar mensaje </button>

						</li>

					</ul>
				<div>

				</form>

				</div>


			<!--//end-services-->
	
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