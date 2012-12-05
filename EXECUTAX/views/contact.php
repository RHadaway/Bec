<!DOCTYPE html>
 
 <!--
	Website: Executax
	Developer: Rebecca Hadaway
	Languages Used: HTML 5
	Date Created: October 5, 2012
	
	-->
  
<html lang="en">

   <head>
   <meta charset="utf-8" />
   
	<title>Contact</title> 
	
	<meta name="description" content=""/>
	<!--no more than 20 -->
	<meta name="keywords" content=""/>
	 
	<!--Favicon links
	<link rel="shortcut icon" href="favicon.ico"/>
	<link ref="apple-touch-icon" href="apple-touch-icon.png"/>
	-->
	
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	
	<!--JavaScript link   -->
	<script src="views/contact.js"></script>

   
   <!-- CSS link	-->

	<link rel="stylesheet" type="text/css" href="./main.css" />

		<!--[if lt IE 9]> <link href="./ie8andbelow.css" rel="stylesheet" type="text/css"> <![endif]-->
	
		</head>
		
	<body>
		<div id="page">
		<?php 	include 'views/header.php';?>
			<div id="container">
				<div id=pic>
					<img src="./images/advice.jpg" id="advice" alt="Tax Advice" />
					<p>Image courtesy of Stuart Miles / <a href="http://www.freedigitalphotos.net" target="_blank">FreeDigitalPhotos.net</a></p>
				</div>
			
			
			<form action='.'  method='post' onsubmit='return validateForm()'>
				<fieldset>
					<legend>Contact Form:</legend><br />
					<select name="contact">
						<option value='clientservices@executax.ca'>Client Services</option>
						<option value='mike@executax.ca'>Mike Bott</option>
						<option value='walt@executax.ca'>Walt Runstedler</option>
						<option value='brian@executax.ca'>Brian Bentley</option>
						<option value='jim@executax.ca'>Jim Reeves</option>
						<option value='tineke@executax.ca'>Tineke Vos</option>
						<option value='rebeccahadaway@gmail.com'>test</option>
					</select><br/>
				
					<label>Name:</label><input type='text' id='name' for='name' name='name'/><span id='nameerror'></span><br />
					<label>Your email:</label><input type='text' id='cemail' for='cemail' name='cemail'/><span id='emailerror'></span><br />
					<label>Day Phone Number:</label><input type='text' id='dphone' for='dphone' name='dphone'/><br />
					<label>Evening Phone Number:</label><input type='text' id='nphone' for='nphone' name='nphone'/><br />
					<label>Subject:</label><input type='text' id='subject' for='subject' name='subject'/><br />
					<label>Message:</label>
						<textarea rows="5"  name="message" wrap="physical"></textarea>
					<input type='submit' name='action' value='Send'/> 
				</fieldset>
				
				</form>

				<?php 	include 'views/footer.php';?>
			
   			</div><!--container -->
		</div><!--page_wrap -->

   </body>

</html>



