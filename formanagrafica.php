<html>
<head>
</head>
<body>

<?php

//echo("$_GET[nome],$_GET[cognome]");
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

$query = "select nome,cognome,indirizzo,piva,recapito,mail from utente where nome='$nome' and cognome='$cognome'";

$seleziona=mysql_query($query, $db) or die ("Errore!");

while($ris_sel=mysql_fetch_array($seleziona)){
//$a=date("d/m/Y",strtotime($ris_sel['datascadenza']));
 //calcolo differenza giorni tra la data auttuale e quella di scadenza prestito
//$giorni=intval ((strtotime("now") - strtotime($ris_sel['datascadenza'])) / (60*60*24));

echo("<h3>Report</h3>");
echo("<tr><td>Nome : </td><td><b>$ris_sel[nome]</b></td></tr><br>");
echo("<tr><td>Cognome :</td><td> <b>$ris_sel[cognome]</b><br></td></tr>");
echo("<tr><td>Indirizzo: </td><td><b>$ris_sel[indirizzo]</b><br><br></td></tr>");
echo("<tr><td>P.Iva : </td><td><b>$ris_sel[piva]</b><br><br></td></tr>");
echo("<tr><td>Telefono: </td><td><b>$ris_sel[recapito]</b><br><br></td></tr>");
echo("<tr><td>Mail: </td><td><b>$ris_sel[mail]</b><br><br></td></tr>");



 echo("<br><br><tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
 echo("<tr><td><form action='form+2.php'><input type='submit' value='Anagrafica Utente'></form></td></tr>");


}

 mysql_close($db);
?>
</body>
</html>