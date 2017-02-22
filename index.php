<!DOCTYPE html>

<html lang="en" xml:lang="en">
<head>
	<title>Koduleht</title>
	<meta content="txt/html; charset=utf-8" />
</head>

<body>
    <h1>Meie esimene koduleht</h1>
    
<?php
    function greeting(){
        echo "<strong>Tere tulemast!</strong><br>";
        echo "Tore ei tulla saite<br>";
    }
    greeting();
    greeting();
?>
    <h2>Teine pealkiri</h2>
    <i>Siin on pilt</i><br>
    <img src="just.jpg" alt="justring" width="100" height="100"><br>
<?php
    greeting();
    include 'include.inc';
    currentTime();
    backHome();
    menu($filesArr);
?>
</body>
</html>