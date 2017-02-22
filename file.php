<?php

include "include.inc";
$content=file_get_contents('readme.txt');

//echo nl2br($content);
$content=str_replace("\n", "<br>", "$content");
echo $content;
function fileWrite(){
    $file=fopen('tekst.txt','a') or die("Can't open");//'a' - dobavit', 'w' - perepisat'
    $tekst="Esimene teksti kirjutamise proov\n";
    fwrite($file,$tekst);
    fclose($file);
}
fileWrite();

$content=file_get_contents('tekst.txt');
echo nl2br($content);
?>