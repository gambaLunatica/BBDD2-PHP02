<?php session_start();

if (!isset($_SESSION)) {
    echo "session no iniciada";
    // Recollida de paràmetres
    $user= $_POST['user'];
    $pass= $_POST['pass'];
    $_SESSION['user']= $user;
}

// Connexió a bd
include "conexion.php";

// echo "password en clar:".$pass;
// echo "<br>Password encriptat:".crypt($pass,"");
// Per comparar amb dades encriptades
// if (! hash_equals($passbd, crypt($pass, ""))) {
//    Echo "error"
// }
//
// Comprovar usuari i password
// SELECT * FROM usuari WHERE usuari = $user AND contrasenya = $pass
// Suposarem que és correcta
// si ha anat malament no feim el que segueix

// Mostrar menú d'opcions
?>
<html><body>
<center><img src="logolaliga.png" width="75"></center>
<br>
<table align="center">
    <tr><td><a href="inserirequipform.php">Inserir equip</a></td></tr>
    <tr><td><a href="llistaequips.php">Mostrar equips</a></td></tr>
    <tr><td><a href="inserirjugadorform.php">Inserir jugador</a></td></tr>
</table>
</body>
</html>