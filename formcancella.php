<html>
<head>

</script>
</head>
<body>

<?php

//echo("$_GET[idl],$_GET[idu]");
//$a=date("Y/m/d",);
   include("config.php");
$db = mysql_connect($db_host, $db_user, $db_password);

if ($db == FALSE)
die ("Errore nella connessione. 
    Verificare i parametri nel file config.php");

mysql_select_db($db_name, $db)
or die ("Errore nella selezione del database. 
       Verificare i parametri nel file config.php");
$nome="$_GET[nome]";
$cognome="$_GET[cognome]";

$query = "delete from utente where nome='$nome' and cognome='$cognome'";

$seleziona=mysql_query($query, $db) or die ("Errore!");
 echo(" cancellato  <br><br> ");
 echo("<br><br><tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
 echo("<tr><td><form action='form+2.php'><input type='submit' value='Anagrafica Utente'></form></td></tr>");

 mysql_close($db);
?>

</body>
</html>