<?php 


$action = array_key_exists('action', $_POST)?$_POST['action']:'';

if($action == 'contact'){
print_r($_POST);
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
		echo 'mail sent';
	}
	else
	{
		echo 'mail failed';
	}

}include 'views/contact.php';
?>
