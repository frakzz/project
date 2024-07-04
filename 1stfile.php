<?php
date_default_timezone_set("Europe/Moscow");
echo "The time is " . date("h:i:sa") . "\r\n";

$i=rand(1, 2);
echo "I: ".$i. "\r\n";
if($i=="1") 
	{
	echo "i = 1 : ".$i ."\r\n";
	} else 
	{
	echo "i = 2 : ".$i ."\r\n";
	}
?>
