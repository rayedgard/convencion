<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style type="text/css"> 
input:invalid {
 
border: 1px solid red;
 
}
 
/* Estilo por defecto */
 
input:valid {
 
border: 1px solid green;
 
}

/* === Remove input autofocus webkit === */
 *:focus {
  		outline: none;
   } 

   /* === Form Typography === */
   body {
   		 font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif;
   		} 

   .contact_form h2, .contact_form label {
   		 font-family: Georgia, Times, "Times New Roman", serif;
   		  }

    .form_hint, .required_notification { 
    	font-size: 11px; 
    	}

     /* === List Styles === */ 
     .contact_form ul {
      width: 750px; list-style-type: none;
       list-style-position: outside; 
       margin: 0px;
        padding: 0px;
       } 

       .contact_form li { 
       	padding: 12px; 
       	border-bottom: 1px solid #eee;
       	 position: relative;
       	  }

       	.contact_form li:first-child, .contact_form li:last-child {
       	 border-bottom: 1px solid #777;
       	  }

      /* === Form Header === */ 
      .contact_form h2 { 
      	margin: 0; 
      	display: inline;
      	 } 

      	 .required_notification {
      	 	color: #d45252;
      	 	 margin: 5px 0 0 0; 
      	 	 display: inline;
      	 	  float: right; 
      	 }

      /* === Form Elements === */ 
      .contact_form label {
       width: 150px; 
       margin-top: 3px;
        display: inline-block;
         float: left;
          padding: 3px;
        }

         .contact_form input {
          height: 20px;
           width: 220px;
            padding: 5px 8px;
            }

        .contact_form textarea { 
        	padding: 8px; 
        	width: 300px;
       }

        .contact_form button { 
        	margin-left: 156px; 
        	} 


      /* form element visual styles */ 
      .contact_form input, .contact_form textarea { 
     	     border: 1px solid #aaa;
      		 box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
      		 border-radius: 2px;
      		 padding-right: 30px;
      	     -moz-transition: padding .25s;
      	     -webkit-transition: padding .25s;
      	     -o-transition: padding .25s;
      	     transition: padding .25s; 
      	  }

       .contact_form input:focus, .contact_form textarea:focus {
          background: #fff;
          border: 1px solid #555;
          box-shadow: 0 0 3px #aaa; 
          padding-right: 70px;
        }


        /* === HTML5 validation styles === */

         .contact_form input:required, .contact_form textarea:required {
       		 background: #fff url(images/red_asterisk.png) no-repeat 98% center;
         } 

         .contact_form input:required:valid, .contact_form textarea:required:valid { 
         	background: #fff url(images/valid.png) no-repeat 98% center; 
         	box-shadow: 0 0 5px #5cd053;
         	 border-color: #28921f;
         	  }


         .contact_form input:focus:invalid, .contact_form textarea:focus:invalid { 
         	background: #fff url(images/invalid.png) no-repeat 98% center;
         	box-shadow: 0 0 5px #d45252;
         	border-color: #b03535;
          }

        /* === Form hints === */
        .form_hint { 
        	background: #d45252;
        	border-radius: 3px 3px 3px 3px;
        	color: white;
        	margin-left: 8px;
        	padding: 1px 6px;
        	z-index: 999; /* hints stay above all other elements */ 
        	position: absolute; /* allows proper formatting if hint is two lines */ 
        	display: none; 
       } 

       .form_hint::before {
      	  content: "\25C0"; 
      	  color: #d45252; 
      	  position: absolute;
       	  top: 1px; 
      	  left: -6px;
         } 

          .contact_form input:focus + .form_hint {
          	 display: inline;
            } 

         .contact_form input:required:valid + .form_hint { 
         		background: #28921f;
         	 } 

         .contact_form input:required:valid + .form_hint::before { 
         	color: #28921f;
          }

           /* === Button Style === */ 
           button.submit { 
           	background-color: #68b12f;
           	 background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e)); 
           	 background: -webkit-linear-gradient(top, #68b12f, #50911e);
          	 background: -moz-linear-gradient(top, #68b12f, #50911e);
           	 background: -ms-linear-gradient(top, #68b12f, #50911e); 
           	 background: -o-linear-gradient(top, #68b12f, #50911e); 
           	 background: linear-gradient(top, #68b12f, #50911e);
           	 border: 1px solid #509111;
           	 border-bottom: 1px solid #5b992b;
           	 border-radius: 3px;
           	 -webkit-border-radius: 3px; 
           	 -moz-border-radius: 3px;
           	 -ms-border-radius: 3px;
           	 -o-border-radius: 3px; 
           	 box-shadow: inset 0 1px 0 0 #9fd574; 
           	 -webkit-box-shadow: 0 1px 0 0 #9fd574 inset; 
           	 -moz-box-shadow: 0 1px 0 0 #9fd574 inset; 
           	 -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
           	 -o-box-shadow: 0 1px 0 0 #9fd574 inset; 
           	 color: white;
           	 font-weight: bold;
           	 padding: 6px 20px;
             text-align: center;
           	 text-shadow: 0 -1px 0 #396715;
           	 } 

           	button.submit:hover {
           	 opacity: .85; 
           	 cursor: pointer; 
           	 } 

           	 button.submit:active { 
           	 	border: 1px solid #20911e; 
           	 	box-shadow: 0 0 10px 5px #356b0b inset;
           	 	-webkit-box-shadow: 0 0 10px 5px #356b0b inset; 
           	 	-moz-box-shadow: 0 0 10px 5px #356b0b inset;
           	 	-ms-box-shadow: 0 0 10px 5px #356b0b inset;
           	    -o-box-shadow: 0 0 10px 5px #356b0b inset;
           	 } 
</style>
<!--pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" -->

<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
		<h2>registration information - item selection - summary - payment</h2> 
			<h2>Attendee Information</h2> <span class="required_notification">* Datos requeridos</span> 
		</li>
		<li>
			<label for="name">First Name:</label>
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

</form></br></br></br></br>














<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Personal Information</h2> <span class="required_notification">* Datos requeridos</span> 
		</li>

		<li>
			<label for="name">First Name: Luis </label>					
		</li>

		<li>
			<label for="name">Last Name: Roman 	</label>						 
		</li>	

		<li>		
			<label for="name">Email: betto19.32@gmail.com</label>						 
		</li>

		<li>		
			<label for="name">Organization:</label>
			<input title="Se necesita un nombre" type="text" name="organization"  autofocus  required/>
		</li>	
		<li>		
			<label for="name">Title:</label>
			<input title="Se necesita un nombre" type="text" name="tittle" required/>
		</li>
		<li>		
			<label for="name">Work Phone:</label>
			 <input title="Se necesita un telefono" type="number" name="phone" required/>
		</li>
	</ul>	
</div> 

</form>	  </br></br></br></br>









<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Work Address:</h2> <span class="required_notification">* Direcciones requridas</span> 
		</li>

		<li>
			<label for="name">Country </label>	
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
			<label for="name">Address: 	</label>	
			<input title="Se necesita una direccion" type="text" name="organization" required/></br>
			<input title="Se necesita un nombre" type="text" name="organization" required/></br>
			<input title="Se necesita un nombre" type="text" name="organization" required/></br>			 
		</li>	

		<li>		
			<label for="name">City</label>	
			<input list="city" name="list" />
					<datalist id="city">
					    <option label="Cusco" value="Cusco">
					    <option label="Arequipa" value="Arequipa">
					    <option label="Lima" value="Lima">
					    <option label="Puno" value="Puno">
					    <option label="tacna" value="tacna">					    
					</datalist>					 
		</li>

		<li>		
			<label for="name">State/Province:</label>
			<input title="Se necesita un nombre" type="text" name="organization" required/>
		</li>	
		

	</ul>	
</div> 

</form>	  





</br></br></br></br>

<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Send this Invitation to Other People:</h2> <span class="required_notification">* Direcciones de amigos</span> 
		</li>
			
		Use this section to forward this invitation to other people. Do not enter the people you plan to bring with you
		

		<li>
			<input title="Se necesita una direccion" placeholder="First Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Last Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Email Address" type="text" name="organization" required/></br></br>
			<input title="Se necesita una direccion" placeholder="First Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Last Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Email Address" type="text" name="organization" required/></br></br>
			<input title="Se necesita una direccion" placeholder="First Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Last Name" type="text" name="organization" required/>
			<input title="Se necesita un nombre" placeholder="Email Address" type="text" name="organization" required/></br></br>
		</li>
			Add a short message to the invitation
		<li>
			<label for="message">Mensaje:</label> 
			<textarea name="message" cols="40" rows="6" required></textarea> 
		</li> 
		<li>
			<button class="submit" type="submit" value="Submit!" />enviar amigos </button>
		</li>

	</ul>	
</div> 

</form>	  
</br></br></br></br>















<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Registration Questions:</h2> <span class="required_notification">* Direcciones de amigos</span> 
		</li>



			
			*Pursuant to the Americans with Disabilities Act, do you require specific aids or services?

		<li>
		<label for="name">Visual:	</label>
		<input type="checkbox" name="Visual" value="chess">
		</li>
			<li>
		<label for="name">Audio:	</label>
		<input type="checkbox" name="Audio" value="Chess">
		</li>
			<li>
		<label for="name">Mobile:	</label>
		<input type="checkbox" name="Mobile" value="Chess">
		</li>
			<li>
		<label for="name">Other:	</label>
		<input type="checkbox" name="Other" value="Chess"><input title="Se necesita un nombre"  type="text" name="organization" />
		</li>
		<li>
		<label for="name">None:	</label>
		<input type="checkbox" name="Visual" value="chess">
		</li>



			
			*Do you have any dietary restrictions?
		<li>
		<label for="name">Pescetarian:	</label>
		<input type="checkbox" name="Visual" value="chess">
		</li>
			<li>
		<label for="name">Gluten-Free:	</label>
		<input type="checkbox" name="Audio" value="Chess">
		</li>
			<li>
		<label for="name">Vegetarian:	</label>
		<input type="checkbox" name="Mobile" value="Chess">
		</li>
			<li>
		<label for="name">Nut Allergy:	</label>
		<input type="checkbox" name="Other" value="Chess">
		</li>
		<li>
		<label for="name">vegan:	</label>
		<input type="checkbox" name="Visual" value="chess">
		</li> 
		<li>
		<label for="name">Other:	</label>
		<input type="checkbox" name="Other" value="Chess"><input title="Se necesita un nombre"  type="text" name="organization" />
		</li>
		<li>
		<label for="name">None:	</label>
		<input type="checkbox" name="Visual" value="chess">
		</li>


		If your spouse or partner will be joining you for any of the evening events, please provide their name here. (Please note that guests will incur an additional fee.)

		<input title="Se necesita un nombre" placeholder="Email Address" type="text" name="organization" required/>	

	</ul>	
</div> 

</form>	  </br></br></br></br>





<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Privacy Settings:</h2> <span class="required_notification">* datos requeridos</span> 
		</li>

		<li>		
			
			Do you want your name and your guest's name to be displayed as attending on the event website?:</br>
			
			yes<input type="radio" name="gender" value="Male">
			no<input type="radio" name="gender" value="Female">
		</li>

		<li>		
		
			Do you want other attendees to be able to email you from the attendee list?:</br>
		
			yes<input type="radio" name="gender" value="Male">
			no<input type="radio" name="gender" value="Female">
		</li>
			
		
		



	</ul>	
</div> 

</form>	  
</br></br></br></br>










<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Privacy Settings:</h2> <span class="required_notification">* datos requeridos</span> 
		</li>

		<li>		
			
			Do you want your name and your guest's name to be displayed as attending on the event website?:</br>
			
			yes<input type="radio" name="gender" value="Male">
			no<input type="radio" name="gender" value="Female">
		</li>

		<li>		
		
			Do you want other attendees to be able to email you from the attendee list?:</br>
		
			yes<input type="radio" name="gender" value="Male">
			no<input type="radio" name="gender" value="Female">
		</li>
		<li>
			<button class="submit" type="submit" value="Submit!" />enviar mensaje </button>
		</li>
	</ul>	
</div> 

</form>	  
</br></br></br></br>



--------------------------------------------------------------------------------
item selection---------------------------------------------------------------------------------


<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>
		<li>
			<h2>Luis Roman</h2>
		</li>
		<li>
			<h2>Included Sessions</h2>  
		</li>
		<li>
			ABLA Express Registration <span class="required_notification">$150</span> 
		</li>
		<li>
			<h2>Other Sessions</h2> <span class="required_notification">* datos requeridos</span> 
		</li>

	
		<li>
			<button class="submit" type="submit" value="Submit!" />enviar mensaje </button>
		</li>
	</ul>	
</div> 

</form>	  
</br></br></br></br>






--------------------------------------------------------------------------------
summary---------------------------------------------------------------------------------




<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>

	Your registration is almost complete. Please review your registration below and if everything is correct, click Next or Finish.
	
		<li>
			<h2>Registration Summary</h2> <span class="required_notification">* datos requeridos</span> 
		</li>
		tiene para editar
		report
		<li>
			<button class="submit" type="submit" value="Submit!" />siguiente </button>
		</li>
	</ul>	
</div> 

</form>	  
</br></br></br></br>


--------------------------------------------------------------------------------
payment---------------------------------------------------------------------------------




<form class="contact_form" action="#" id="contact_form" runat="server" >

<div> 
	<ul>

	Your registration is almost complete. Please review your registration below and if everything is correct, click Next or Finish.
	
		<li>
			<h2>submit payment</h2> <span class="required_notification">* datos requeridos</span> 
		</li>
		tiene para editar
		report
		<li>
			<button class="submit" type="submit" value="Submit!" />siguiente </button>
		</li>
	</ul>	
</div> 

</form>	  
</br></br></br></br>

<a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-check ui-btn-icon-left ui-btn-a" data-transition="pop" >Sign in</a>

<div data-role="popup" id"popupLogin" data-theme="a" class="ui-corner-all">
<form>
	<div style="padding:10px 20px">
		<h3> Please sign in </h3>
		<<label for="un" class="ui-hidden-accessible">Username:</label>

		     <input type="text" name="user" id="un" value="" placeholder="username" data-theme="a">

			<label for="pw" class="ui-hidden-accessible">Password:</label>
			 <input type="password" name="pass" id="pw" value="" placeholder="password" data-theme="a">	       

			<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Sign in</button>	    	
			        


	</div>
	</form>
	</div>







</body>
</html>