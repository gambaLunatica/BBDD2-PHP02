<?php session_start(); ?>

<html>
<body>
<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a>
<br><br>
<table>


<?php
$jugador = $_GET['codijugador'];

include "conexion.php";

$cadena= "select * from jugadors where jucodi='".$jugador."'";
$resultat = mysqli_query($con,$cadena);
$registre = mysqli_fetch_array($resultat);

?>
<img src="<?php echo $registre['jufoto']?>" width="75">
<br><br>
<form action="modificajugadorbd.php" method="get">
	<tr>
		<td>Nom</td>
		<td><input name="nom" value="<?php echo $registre['junom']; ?>"></td>
	</tr>
	<tr>
		<td>Àlies</td>
		<td><input name="alias" value="<?php echo $registre['jualias']; ?>"></td>
	</tr>
	<tr>
		<td>Dorsal</td>
		<td><input name="dorsal" value="<?php echo $registre['judorsal']; ?>"></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input name="foto" value="<?php echo $registre['jufoto']; ?>"></td>
	</tr>
	</table>
	<input type="submit" value="Modifica">
	<input name="codi" value="<?php echo $registre['jucodi']; ?>" type="hidden">
	<input name="equip" value="<?php echo $registre['juequip']; ?>" type="hidden">	
</form>
</center>
</body>
</html>