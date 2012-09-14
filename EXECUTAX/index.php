
<?php 
require '../ActiveRecord/ActiveRecord.php';


ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	if($_SERVER['SERVER_PORT'] != 8080){
		$cfg->set_default_connection('production');
	}
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/executax',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://rhadaway:executax@localhost/executax'
			)
	);
});

$action = (array_key_exists('action', $_POST)?$_POST['action']:'');
$action = (array_key_exists('action', $_GET)?$_GET['action']: $action);

if($action == 'Send'){
//print_r($_POST);
// The message
$message = $_POST['message'];
$subject = $_POST['subject'];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

$headers = 'From:' .$_SERVER['SERVER_ADMIN']. "\r\n" .
		   'Reply-To: '.$_POST['contact']. "\r\n" .
		   //'Disposition-Notification-To'.$_POST['email']."\r\n" - to get notification
		   'X-Mailer: PHP/' . phpversion();

// Send
if(mail($_POST['contact'], '$subject', $message))

	{	
		
			$oEmail = new Email;
			$oEmail->name = $_POST['name'];
			$oEmail->cemail = $_POST['cemail'];
			$oEmail->dphone = $_POST['dphone'];
			$oEmail->nphone = $_POST['nphone'];
			$oEmail->subject = $_POST['subject'];
			$oEmail->message = $_POST['message'];
			$oEmail->save();
			//print_r($oEmail);
		
		//echo 'mail sent';
		include 'views/thankyou.php';
		
	}
	else
	{
		//echo 'mail failed';
		
	}

}
elseif($action == 'contact'){
include 'views/contact.php';
}
else{
	include 'views/home.php';
}

?>
