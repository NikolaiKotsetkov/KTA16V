<?php

include 'include.inc';
backHome();
menu($filesArr);
$name="Tarmo";
$testArray=array("Maksim","Aleksandr","Evgeni",121,$name,12.1213);

$testArray[]="Kim";//dobavljaet element v konec massiva
for($i=0;$i<count($testArray);$i++){
    echo $testArray[$i]."<br>";
}
foreach($testArray as $item){
    echo $item."<br>";
}
var_dump($testArray);
echo "<br>";
var_dump($name);
//associativnyi masiv
$assocArr=array("pervyi"=>"Maksim","vtoroi"=>"Aleksandr","trerij"=>"Jevgeni","chetvertyi"=>"Maksim");
echo $assocArr["vtoroi"];
var_dump(array_keys($assocArr));
var_dump(array_values($assocArr));

foreach($assocArr as $key => $name){
    echo $name." ".$key."<br>";
}
$prog="Programmirovanie";
$opsyst="Operacionnye sistemy";
$it="Osnovy IT";
$ocenki=array("Maksim"=>array($prog=>4,$opsyst=>5,$it=>5),"Aleksandr"=>array($prog=>5,$opsyst=>4,$it=>4),
         "Evgeni"=>array($prog=>4,$opsyst=>5,$it=>4));//associacija - prog=>5
$ocenkiID=array_keys($ocenki);
$ocenkiNr=count($ocenki);
for($i=0;$i<$ocenkiNr;$i++){
    echo $ocenkiID[$i]."<br>";
    foreach($ocenki[$ocenkiID[$i]] as $predmet => $ocenka){
        echo $predmet.": ".$ocenka."<br>";
    }
}
?>