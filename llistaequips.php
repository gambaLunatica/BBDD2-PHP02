<?php session_start(); ?>
<html>
<body>

<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a></center>
<br>

<?php
include "conexion.php";

$cadena = "select * from equips";
$resultat = mysqli_query($con,$cadena);

echo "<table align='center'>";
echo "<tr><td>Equip</td><td>Estadi</td><td colspan='3' align='center'>Acció</td></tr>";

while ($registre = mysqli_fetch_array($resultat)) {
  $mod = '<a href="modificaequipform.php?codi=';
  $mod = $mod.$registre['eqcodi'].'">';
  $mod = $mod.'Modifica</a>';
  $pla = '<a href="llistajugadors.php?codi='.$registre['eqcodi'].'">Plantilla</a>';
  $vid = '<a href="veurevideo.php?codi='.$registre['eqcodi'].'">Vídeo</a>';
  echo "<tr><td>".$registre['eqnom']."</td><td>".$registre['eqestadi']."</td><td>".$mod."</td><td>".$pla."</td><td>".$vid."</td></tr>";
}

echo "</table>";

mysqli_close($con);
?>

</body>
</html>