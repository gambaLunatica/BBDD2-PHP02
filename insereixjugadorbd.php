<?php session_start();

$locnom = $_GET['nom'];
$locali = $_GET['alias'];
$locdor = $_GET['dorsal'];
$locfot = $_GET['foto'];
$locequ = $_GET['equip'];

include "conexion.php";

$cadena = "insert into jugadors set ";
$cadena = $cadena."junom='".$locnom."',";
$cadena = $cadena."jualias='".$locali."',";
$cadena = $cadena."judorsal=".$locdor.",";
$cadena = $cadena."jufoto='".$locfot."',";
$cadena = $cadena."juequip='".$locequ."'";

mysqli_query($con,$cadena);

?>
<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a></center>
<br>
<center>El jugador s'ha inserit correctament</center>
<meta http-equiv="refresh" content="5; url=identifica.php">