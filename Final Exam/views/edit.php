<html><body>
<form action='.' method='post'>

<?php
foreach(Result::find('all') as $sResult){?>
<p>
	<?php echo $sResult->result;?>
	<a href="?action=Delete&result=<?php echo $sResult->result; ?>">
	<img src='views/images/cross.png' alt='Delete';/>
	</a>
	
</p>

	
<?php } ?>


<input type='text' name='email'/>
<input type='submit' name='action' value='Subscribe'/>

</form>
</body></html>
