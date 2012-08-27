<?php
	header("Content-Type: text/plain");
	$sIn = file_get_contents('http://www.rssweather.com/wx/ca/on/waterloo/rss.php');
	
	if (preg_match_all("|<title(.*)</title|U", $sIn, $aIn)){
	
		foreach($aIn[0] as $sTitle){
			echo $sTitle ."\n";
		}
	}
	else{
		echo "nothing to display";
		
	}
?>