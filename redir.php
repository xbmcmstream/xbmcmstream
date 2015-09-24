<?php

$req_method  = $_SERVER['REQUEST_METHOD'];
$json_file = fopen('streams.json','r');
$json = fread($json_file, filesize('streams.json'));
fclose($json_file);


if(!empty($json)) $streams_array = json_decode($json, true);

if(empty($streams_array[$_GET['id']])) die('no stream id');


if(strtolower($req_method) == 'head')
{
	exit;
//	header("Content-Type: video/mp2t");
//	header("Connection: close");
//	exit;
}


if(strtolower($req_method) != 'head')
{
	header("Location: ". $streams_array[$_GET['id']]);
}


?>
