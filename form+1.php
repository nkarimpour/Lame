
<body>
<?php

include("config.php");
$db = mysql_connect($db_host, $db_user, $db_password);
//$oggi=date("d-m-Y");
//$fine="$_POST[a]-$_POST[m]-$_POST[g]";
//echo("$fine");
if ($db == FALSE)
die ("Errore nella connessione. 
    Verificare i parametri nel file config.php");

mysql_select_db($db_name, $db)
or die ("Errore nella selezione del database. 
       Verificare i parametri nel file config.php");

$nome="$_POST[nome]";
$cognome="$_POST[cognome]";
$indirizzo="$_POST[indirizzo]";
$piva="$_POST[piva]";
$recapito="$_POST[recapito]";
$mail="$_POST[mail]";

echo "$piva";
$query = "select * from utente where nome=$nome and cognome=$cognome ";

$seleziona=mysql_query($query, $db) or die ("Errore!");
echo "$piva";
if(mysql_num_rows($seleziona)==0){//posso inserire non ci sono righe con gli stessi parametri
    $query = "insert into utente (nome,cognome,indirizzo) values('$nome','$cognome','$indirizzo')";
	
    $seleziona=mysql_query($query, $db) or die ("Errore!");
    echo("Inserimento avvenuto");
}
else {//gia presente
echo("utente � gi� presente nel database..");
}
 echo("<br><br><tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
 echo("<tr><td><form action='form+2.php'><input type='submit' value='Anagrafica Utente'></form></td></tr>");
mysql_close($db);
 

 ?>
 </body>
 </html>