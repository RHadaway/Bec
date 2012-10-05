<?php require 'model/database.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<body>Hello World
</body>
</html>

<body>
	<div id="content">
		<h1>CD List</h1>

		<?php 
		$query = "select name from 'cd list'";
		$CD = $db->query ($query);




		?>

		<form action="" method="post">

			<div id="data">
				<label>Name of CD to add:</label> <input type="text" name="Name"<div
						id="buttons">
						<label>&nbsp;</label> <input type="submit" value="Add" /><br />
					</div>
		
		</form>
	</div>
</body>
