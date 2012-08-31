
	<table>
		<tr>
			<th>Date Posted</th>
			<th>Title</th>
			<th>Link</th>
			<th>Next Action</th>
		
		</tr>

		<?php foreach(Results::find('all') as $oresults){?>

		<tr>
			<td><?php echo $oresults->pubdate ?>
			</td>
			<td><?php echo $oresults->title?>
			</td>
			<td><?php echo $oresults->link?>
			</td>
			<td><?php echo $oresults->nextaction?>
			</td>
		</tr>


		<?php } ?>

	</table>
