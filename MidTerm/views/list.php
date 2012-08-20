<html>
<body>
<form action='.' method='post'>
<input type='submit' name='add' value='add' />
	<table>
		<tr>
			<th>date</th>
			<th>members</th>
		
		</tr>

		<?php foreach(mealstogether::find('all') as $omealstogether){?>

		<tr>
			<td><?php echo $omealstogether->date ?>
			</td>
			<td><?php echo $omealstogether->members?>
			</td>
		</tr>


		<?php } ?>


	</table>
<input type='submit' name='add' value='add' />
</form>
	

</body>
</html>