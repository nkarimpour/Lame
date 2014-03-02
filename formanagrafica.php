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


$piva="$_GET[piva]";

$query = "select utente.piva,utente_fiscale.piva,utente.nome,utente.cognome,utente_fiscale.ragione_sociale from utente,utente_fiscale where utente.piva=utente_fiscale.piva";

$seleziona=mysql_query($query, $db) or die ("Errore!");

while($ris_sel=mysql_fetch_array($seleziona)){
//$a=date("d/m/Y",strtotime($ris_sel['datascadenza']));
 //calcolo differenza giorni tra la data auttuale e quella di scadenza prestito
//$giorni=intval ((strtotime("now") - strtotime($ris_sel['datascadenza'])) / (60*60*24));


echo("<table border='1' align='center' width='50%'>");
echo("<tr><td  align='center' colspan='2'><h3>Report Fornitore</h3></td>");
echo("<tr><td align='center'>Ragione Sociale : </td><td align='center'><b>$ris_sel[ragione_sociale]</b></td></tr><br>");
echo("<tr><td align='center'>Partita Iva: </td><td align='center'><b>$ris_sel[piva]</b></td></tr><br>");
echo("<tr><td align='center'>Nome : </td><td align='center'><b>$ris_sel[nome]</b></td></tr><br>");
echo("<tr><td align='center'>Cognome :</td><td align='center'> <b>$ris_sel[cognome]</b><br></td></tr>");

echo("<tr><td colspan='2' align='center'><form action='index.php'><input type='submit' value='Ordini Fatti'></form></td></tr>");


echo("<tr><td colspan='2' align='center'><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
echo("<tr><td colspan='2' align='center'><form action='form+2.php'><input type='submit' value='Anagrafica Utente'></form></td></tr>");
echo("</table>");

}

 mysql_close($db);
?>
</body>
</html>