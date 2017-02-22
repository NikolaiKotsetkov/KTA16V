<?php
function backHome(){
    echo '<li><a href="index.php">Obratno</a></li>';
}
function currentTime(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if($time>"14:10"){
        echo "Domoj pora!<br>";
    }else{
        echo "Nado terpet'<br>";
    }
}

function counter(){
    $fileName="count.txt";
    if(!file_exists($fileName)){
        $file=fopen($fileName,'w') or die("Can't open");//'a' - dobavit', 'w' - perepisat'
        $count=1;
        fwrite($file,$count);
        //$count=file_get_contents($fileName);
        echo "Te olete külastaja nr: ".$count;
        fclose($file);
    }else{
        $file=fopen($fileName,'r+') or die("Can't open");//r+ - dlja ctenija i posle dlja zapisi
        $count=file_get_contents($fileName)+1;
        fwrite($file,$count);
        echo "Te olete külastaja nr: ".$count."<br>";
        fclose($file);
    }
}

function getUserIP(){//poluchenie ip posetitelja stranicy
    $ip=$_SERVER['REMOTE_ADDR'];
    $fileName="visitor.txt";
    $time=date("H:i:s");
    $visitor=$ip." ".$time."\n";
    $file=fopen($fileName,'a') or die("Can't open");
    fwrite($file, $visitor);
    fclose($file);
    echo "Teie aadress on: ".$ip."<br>";
}

?>