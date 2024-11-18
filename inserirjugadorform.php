<?php session_start();

include "conexion.php"; ?>
<html>
<body>
<center>
	<a href="identifica.php"><img src="logolaliga.png" width="75"></a>
	<br>
	<br>
	<form action="insereixjugadorbd.php" method="get">
		<table>		
			<tr><td>Nom</td><td><input name="nom"></td></tr>
			<tr><td>Àlies</td><td><input name="alias"></td></tr>		
			<tr><td>Dorsal</td><td><input name="dorsal"></td></tr>
			<tr><td>Foto</td><td><input name="foto" type="file"></td></tr>
			<tr>
				<td>Equip</td>
				<td>
					<select name="equip">
					<?php
						$cadena="select eqcodi, eqnom from equips";
						$result = mysqli_query($con,$cadena);
						while ($reg=mysqli_fetch_array($result)) {
							echo "<option value='".$reg['eqcodi']."'>".$reg['eqnom']."</option>";
						}
					?>
					</select>
				</td>
			</tr>
		</table>
		<br><input type="submit" value="Inserir">
	</form>
</center>
</body>
</html>