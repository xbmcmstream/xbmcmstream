<?php

$a = $_SERVER['REQUEST_METHOD'];


$fp = fopen('bb.txt','a');
fwrite($fp, $a."\n");
fclose($fp);

if($a == 'HEAD')
{
	header("Content-Type: video/mp2t");
	header("Connection: close");
	exit;
}


if(strtolower($a) != 'head')
{
	header("Location: http://s1.wssiptv.com:8000/live/WSSiptv.com/illilililIIIIilivwvwwwwwvw/92.ts?1234");
}


?>
