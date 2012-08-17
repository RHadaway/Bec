<?php

function sayHello()
{
	
	echo "Hello world";
}
//anonymous function
$fsayGoodDay = function()
{
	echo "good day!";
};

function callMeBack($fCallMe)
{
	$fCallMe();
}
?>

<html><body><?php callMeBack($fsayGoodDay);?></body></html>