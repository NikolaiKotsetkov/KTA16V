<?php

$filesArr=array("functions","array","view","files","tips","file");

function menu($array){
    
    for($i=0;$i<count($array);$i++){
        echo '<li><a href="'.$array[$i].'.php">'.$array[$i].'</a></li>';
    }
}

?>