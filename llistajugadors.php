<?php session_start(); ?>
<html>
<body>

<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a>
<br>
<br>

<?php

$equip = $_GET['codi'];
include "conexion.php";

$cadena = "select eqcodi, jucodi, junom, judorsal from equips inner join jugadors on equips.eqcodi=jugadors.juequip where eqcodi='".$equip."' order by judorsal";
$resultat = mysqli_query($con,$cadena);

echo "<table align='center'>";
echo "<tr bgcolor='grey'><td>Dorsal</td><td>Jugador</td><td>Acció</td></tr>";

while ($registre = mysqli_fetch_array($resultat)) {
  $fitxa = "<a href='veurejugadorform.php?codijugador=".$registre['jucodi']."'>Consultar</a>";
  echo "<tr><td>".$registre['judorsal']."</td><td>".$registre['junom']."</td><td>".$fitxa."</td></tr>";
}

echo "</table>";

mysqli_close($con);
?>

<br>
<br><a href="fitxarjugadorlaliga.php">Fitxar jugador de LaLiga</a>
<br><a href="fitxarjugadorextern.php">Fitxar jugador no existent</a>

</center>
</body>
</html>