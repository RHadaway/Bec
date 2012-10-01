
<!DOCTYPE html>

<!--
	Website: Executax
	Developer: Rebecca Hadaway
	Languages Used: HTML 5
	Date Created: 
	Last Revised:
	
	Website Description:
	
	External files:
	
	-->

<html lang="en">

<head>
<meta charset="utf-8" />

<title>Contact</title>

<meta name="description" content="" />
<!--no more than 20 -->
<meta name="keywords" content="" />

<!--Favicon links
	<link rel="shortcut icon" href="favicon.ico"/>
	<link ref="apple-touch-icon" href="apple-touch-icon.png"/>
	-->

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<!--JavaScript link   -->
<script src="views/contact.js"></script>


<!-- CSS link	-->

<link rel="stylesheet" type="text/css" href="./main.css" />

</head>

<body>
	<div id="page">

		<div id="container">
			<form action='.' method='post' onsubmit='return validateForm()'>
				<fieldset>
					<legend>RSS Feed:</legend><br /> 
					<label>Title:</label><input type='text' id='title' for='title' name='title' />
					<label>Description:</label><textarea rows="5" cols="50" name="description" wrap="physical"></textarea>
					<label>Link:</label><input type='text' id='link' for='link'name='link' />
					<label>Publish Date:</label><input type='text' id='pubdate' for='pubdate' name='pubdate' />
					<label>Your Name:</label><input type='text' id='name' for='name' name='name' />
					<input type='submit' name='action' value='Post' />
				</fieldset>

			</form>


		</div>
		<!--container -->
	</div>
	<!--page -->

</body>

</html>


