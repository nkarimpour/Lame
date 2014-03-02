<html>
<head>
</head>
<body>
<?php
include("config.php");
$db = mysql_connect($db_host, $db_user, $db_password);

if ($db == FALSE)
die ("Errore nella connessione. 
    Verificare i parametri nel file config.php");

mysql_select_db($db_name, $db)
or die ("Errore nella selezione del database. 
       Verificare i parametri nel file config.php");
$oggi=date("Y-m-d");
$query = "select utente.piva,ordini.id_utente,utente.nome,utente.cognome,ordini.id_ordine,ordini.data,utente_fiscale.ragione_sociale from ordini,utente,utente_fiscale where utente.piva=ordini.id_utente and utente.piva=utente_fiscale.piva";
        //
$oggi2=date('d/m/Y');
$seleziona=mysql_query($query, $db) or die ("Errore!");
echo("<div align='center'><h4>Storico Ordini</h4>
<h5>Clicca per Informazioni sul link in parte </h5>");
echo("<table border='1'>
<tr><th>Ragione Sociale</th><th>id Ordine</th><th>Data</th><th>+info</th></th><th>cancella</th></tr>");
while($ris_sel=mysql_fetch_array($seleziona)){
 // if($ris_sel['datapub']>$oggi{
  
  echo("<tr><td>$ris_sel[ragione_sociale]</td><td>$ris_sel[id_ordine]</td><td>$ris_sel[data]</td>
 
 
 
  
 
  </tr>");
 // }
}

echo("</table></div>");

   echo("<br><br><tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
 mysql_close($db);
 
 
 ?>
 
</body>
</html>