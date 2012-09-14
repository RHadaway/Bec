
<?php 
require_once('../adodb5/adodb.inc.php');
require_once('../adodb5/adodb-active-record.inc.php');

$db = null;
if($_SERVER['SERVER_PORT'] == 8080){
	$db = NewADOConnection('mysql://root:@localhost/executax');
}else{
	$db = NewADOConnection('mysql://rhadaway:executax@custsql-nf12.eigbox.net/executax');
}

ADOdb_Active_Record::SetDatabaseAdapter($db);
class Email extends ADOdb_Active_Record{}

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
		echo 'mail failed';
		
	}

}
elseif($action == 'contact'){
include 'views/contact.php';
}
else{
	include 'views/home.php';
}

?>
