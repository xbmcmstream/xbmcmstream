<?php


$a = $_SERVER['REQUEST_METHOD'];
if(strtolower($a) == 'head')
{
header("Content-Type: video/mp2t");
}

$fp = fopen('bb.txt','a');
fwrite($fp, $a."\n");
fclose($fp);

exit;
if(strtolower($a) != 'head')
{
	header("Location: http://s1.wssiptv.com:8000/live/WSSiptv.com/illilililIIIIilivwvwwwwwvw/92.ts?1234|User-agent=MXPlayer/1.7.38");
}


?>
