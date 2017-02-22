<?php
include "include.inc";
backHome();
//parol' dlja usera
$pass=crypt("Passw0rd", base64_encode("Passw0rd"));
echo $pass;
echo "<br>";
echo realPath(dirname(__FILE__));
phpinfo();
?>