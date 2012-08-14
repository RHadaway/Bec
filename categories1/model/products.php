<?php

require 'database.php';

function get_products()
{
	global $db;
	$query = 'select productName from products';
	return $db->query($query);
	
}
