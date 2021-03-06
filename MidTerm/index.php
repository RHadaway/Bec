 <link rel="stylesheet" type="text/css" href="main.css" />
<?php
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/together',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if(array_key_exists('submit', $_POST)){
	$omealstogether = new mealstogether;
	$omealstogether->date = $_POST['date'];
	$omealstogether->members = $_POST['members'];
	$omealstogether->save();
	//print_r($omealstogether);
}


if(array_key_exists('add', $_POST)){
	include 'views/add.php';
}else {
	include 'views/list.php';
}
?>

<html><body>
Hello World!
</body></html>