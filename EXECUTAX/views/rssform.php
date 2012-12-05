
<!DOCTYPE html>

<!--
	Website: Executax
	Developer: Rebecca Hadaway
	Languages Used: HTML 5
	
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

		<div id="rssform">
			<form action='.' method='post' onsubmit='return validateForm()'>
				<fieldset>
					<legend>RSS Feed:</legend><br> 
					<label>Title:</label><input type='text' id='title' for='title' name='title' /><br> 
					<label>Description:</label><textarea rows="5" cols="50" name="description" wrap="physical"></textarea><br> 
					<label>Link:</label><input type='text' id='link' for='link'name='link' /><br> 
					<label>Publish Date:</label><input type='text' id='pubdate' for='pubdate' name='pubdate' /><br> 
					<label>Your Name:</label><input type='text' id='name' for='name' name='name' /><br> 
					<input type='submit' name='action' value='Post' />
				</fieldset>
			</form>

		</div>
		<!--container -->
	</div>
	<!--page -->

</body>

</html>


