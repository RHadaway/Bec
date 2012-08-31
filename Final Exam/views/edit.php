<html><body>
<form action='.' method='post'>

<?php
foreach(Results::find('all') as $oGuid){?>
<p>
	<?php echo $oGuid->results;?>
	<a href="?action=Delete&result=<?php echo $oGuid->guid; ?>">
	<img src='views/images/cross.png' alt='Delete';/>
	</a>
	
</p>

	
<?php } ?>


<input type='text' name='email'/>
<input type='submit' name='action' value='Subscribe'/>

</form>
</body></html>
