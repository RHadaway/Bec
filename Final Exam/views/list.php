
	<table>
		<tr>
			<th>Date Posted</th>
			<th>Title</th>
			<th>Link</th>
			<th>Next Action</th>
		
		</tr>

		<?php foreach(guid::find('all') as $guid){?>

		<tr>
			<td><?php echo $guid->pubdate ?>
			</td>
			<td><?php echo $guid->title?>
			</td>
			<td><?php echo $guid->link?>
			</td>
			<td><?php echo $guid->nextaction?>
			</td>
		</tr>


		<?php } ?>

	</table>
