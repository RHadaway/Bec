<?php

require 'database.php';

function get_cd()
{
	global $db;
	$query = 'select name from cd list';
	return $db->query($query);
	
}
?>

