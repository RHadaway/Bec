<?php

require 'database.php';

function get_cats()
{
	global $db;
	$query = 'select name from cats';
	return $db->query($query);
	
}
?>