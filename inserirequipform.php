<?php session_start() ?>
<html>
<body>
<center>
	<a href="identifica.php"><img src="logolaliga.png" width="75"></a>
	<br>
	<br>
	<form action="insereixequipbd.php" method="get">
		<table>
			<tr><td>Codi</td><td><input name="codi"></td></tr>
			<tr><td>Equip</td><td><input name="equip"></td></tr>
			<tr><td>Estadi</td><td><input name="estadi"></td></tr>
			<tr><td>Vídeo</td><td><input name="video"></td></tr>				
		</table>
		<br><input type="submit" value="Inserir">
	</form>
</center>
</body>
</html>