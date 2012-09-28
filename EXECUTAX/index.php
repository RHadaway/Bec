<?php 
require_once('../adodb5/adodb.inc.php');
require_once('../adodb5/adodb-active-record.inc.php');

$db = NewADOConnection('mysql');
if($_SERVER['SERVER_PORT'] == 8080){
	$db->Connect("localhost", "root", "", "executax");
}else{
	$db->Connect('rhadaway.netfirmsmysql.com', 'rhadaway', 'executax', "executax");
}


ADOdb_Active_Record::SetDatabaseAdapter($db);
class email extends ADOdb_Active_Record{}

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

		$oEmail = new email;
		$oEmail->name = $_POST['name'];
		$oEmail->cemail = $_POST['cemail'];
		$oEmail->dphone = $_POST['dphone'];
		$oEmail->nphone = $_POST['nphone'];
		$oEmail->subject = $_POST['subject'];
		$oEmail->message = $_POST['message'];
		$oDate = new DateTime();
		$oEmail->date = $oDate->format("Y-m-d");
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
elseif($action == 'displayrss'){
	include 'model/rssfeed.php';
}
elseif($action == 'contact'){
	include 'views/contact.php';
}
elseif($action == 'aboutus'){
	include 'views/aboutus.php';
}
elseif($action == 'home'){
	include 'views/home.php';
}
else{
	include 'views/home.php';
}




?>
