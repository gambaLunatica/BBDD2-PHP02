<?php session_start(); ?>
<html>
<body>
<center><a href="identifica.php"><img src="logolaliga.png" width="75"></a>
<br><br>
<table>


<?php
$loccodi = $_GET['codi'];

include "conexion.php";

$cadena= "select * from equips where eqcodi='".$loccodi."'";
$resultat = mysqli_query($con,$cadena);
$registre = mysqli_fetch_array($resultat);

?>

<form action="modificaequipbd.php" method="get">
	<tr>
		<td>Equip</td>
		<td><input name="equip" value="<?php echo $registre['eqnom']; ?>"></td>
	</tr>
	<tr>
		<td>Estadi</td>
		<td><input name="estadi" value="<?php echo $registre['eqestadi']; ?>"></td>
	</tr>
	<tr>
		<td>Vídeo</td>
		<td><input name="video" value="<?php echo $registre['eqvideo']; ?>"></td>
	</tr>	
	</table>
	<input type="submit" value="Modifica">
	<input name="codi" value="<?php echo $registre['eqcodi']; ?>" type="hidden">
</form>
</center>
</body>
</html>