<?php
session_start();
if(isset($_SESSION["username"])) {
?>
<html>
<head>
	<meta http-equiv='refresh' content='1; URL=../../admin/editor.php' />
</head>
<body>
<h1>Falsches Verzeichnis!<h1>
<h2>Lade... einen Monent bitte!</h2>
</body>
</html>
<?php
/*

  Nicht Angemeldet? Meldung hier f�r das Anmelden oder Registrieren:

*/
} else { 

include 'install.php';
include 'error.php';

} ?>