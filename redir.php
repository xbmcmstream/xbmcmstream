<?php

$a = $_SERVER['REQUEST_METHOD'];

$fp = fopen('bb.txt','a');
fwrite($fp, $a."\n");
fclose($fp);
