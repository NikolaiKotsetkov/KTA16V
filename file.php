<?php

include "include.inc";
$content=file_get_contents('readme.txt');
/*
if(strpos($content, "\n")){
    
}
$content=preg_replace("/\n\","<br>", $content);
*/
echo nl2br($content);

?>