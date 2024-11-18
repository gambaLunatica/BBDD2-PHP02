<?php session_start(); ?>
<html>
<body>
<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a>
<br><br>

<?php
$loccodi = $_GET['codi'];

include "conexion.php";

$cadena= "select eqvideo from equips where eqcodi='".$loccodi."'";
$resultat = mysqli_query($con,$cadena);
$registre = mysqli_fetch_array($resultat);

echo $registre['eqvideo'];
?>
</center>
</body>
</html>