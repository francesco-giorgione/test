<?php
$db_host = "ilike.database.windows.net";
$db_name = " iLike ";
$db_user = " CloudSAe14a0d66 ";
$db_password = " iLike_2022 ";

//connessione al database
$db = mysql_connect($db_host, $db_user, $db_password);

if ($db == FALSE) die ("Errore nella connessione. Verificare i parametri nel file connection.php");
else echo "Connessione riuscita";
?>