<?php
$db_host = "yourDbHost";
$db_name = " yourDbName ";
$db_user = " yourDbUser ";
$db_password = " yourDbPass ";

//connessione al database
$db = mysql_connect($db_host, $db_user, $db_password);

if ($db == FALSE) die ("Errore nella connessione. Verificare i parametri nel file connection.php");
else echo "Connessione effettuata";

?>
