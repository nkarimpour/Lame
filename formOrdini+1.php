
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
$id_ordine="$_POST[id_ordine]";
$id_utente="$_POST[id_utente]";
$data="$_POST[data]";





$query = "select * from ordini where id_ordine='$id_ordine' ";

$seleziona=mysql_query($query, $db) or die ("Errore!");

if(mysql_num_rows($seleziona)==0){//posso inserire non ci sono righe con gli stessi parametri
    $query = "insert into ordini (id_ordine,id_utente,data) values('$id_ordine','$id_utente','$data')";
	
    $seleziona=mysql_query($query, $db) or die ("Errore!");

    echo("Inserimento avvenuto");
}
else {//gia presente
echo("Codice Ordine presente nel database.");
}
 echo("<br><br><tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
 echo("<tr><td><form action='formOrdini+2.php'><input type='submit' value='Storico Ordini'></form></td></tr>");
mysql_close($db);
 

 ?>
 </body>
 </html>