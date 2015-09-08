<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>


<body>
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
<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>	
			<h2>Attendee Information</h2> <span class="required_notification">* Datos requeridos</span> 
		</li>
		<li>
			<label for="name" >First Name:</label>
			 <input title="Se necesita un nombre" placeholder="Luis" type="text" name="first" autofocus  required/>
		
		</li>
		<li>
			<label for="name">Last Name: </label>
			<input title="Se necesita un nombre" placeholder="Roman"  type="text" name="last" required/>
			
		</li>
		<li>
			<label for="email">Email Address:</label>
			 <input title="Se necesita un nombre" placeholder="hola@dominio.com"  type="email" name="email" required/>
			  <span class="form_hint">Formato correcto: "nombre@dominio.com"</span>
		</li>
		<li>
			<label for="name">Fecha: </label>
			<input name="date" type="date" />
		</li>
		<li>
			<button class="submit" type="submit" value="Submit!" />enviar mensaje </button>
		</li>
	</ul>
<div>

</form>
</body>
</html>