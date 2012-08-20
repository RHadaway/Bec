<html><body>
<form action='.' method='post' />
<input type='submit' name='add' value='add'/>
<table>
	<tr>
		<th>date</th>
		<th>purchase</th>
		<th>price</th>
		<th>total</th>
	</tr>
	
	<?php foreach(purchase::find('all') as $opurchase){?>
	
	<tr>
		<td><?php echo $opurchase->date?></td>
		<td><?php echo $opurchase->purchase?></td>
		<td><?php echo $opurchase->price?></td>
		
	</tr>
	<?php } ?>
	


</table>
<input type='submit' name='add' value='add'/>
</form>
</body></html>