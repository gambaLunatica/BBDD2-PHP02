<?php session_start();

$loccodi = $_GET['codi'];
$locequ = $_GET['equip'];
$locest = $_GET['estadi'];
$locvid = $_GET['video'];

include "conexion.php";

$cadena = "insert into equips (eqcodi, eqnom, eqestadi, eqvideo) values ('".$loccodi."','".$locequ."','".$locest."','".$locvid."')";
mysqli_query($con,$cadena);

?>
<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a></center>
<br>
<center>L'equip s'ha inserit correctament</center>
<meta http-equiv="refresh" content="5; url=identifica.php">