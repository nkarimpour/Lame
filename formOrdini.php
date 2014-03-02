<head>
</head>
<body>
<?php
include("config.php");
$db = mysql_connect($db_host, $db_user, $db_password);
$oggi=date("d-m-Y");
if ($db == FALSE)
die ("Errore nella connessione. 
    Verificare i parametri nel file config.php");

mysql_select_db($db_name, $db)
or die ("Errore nella selezione del database. 
       Verificare i parametri nel file config.php");




//$query = "select libro.id,libro.titolo,libro.autore,libro.datapub from libro";
//$seleziona=mysql_query($query, $db) or die ("Errore!");
//select libro
/*echo("Libro : <select name='libri'> ");
while($ris_sel=mysql_fetch_array($seleziona)){
           echo("<option value='$ris_sel[id]'>$ris_sel[titolo], $ris_sel[autore], $ris_sel[datapub]</option>");
}
echo("</select>");*/
//select utente
/*
$query = "select utente.id,utente.nome,utente.cognome from utente";
$seleziona=mysql_query($query, $db) or die ("Errore!");
echo(" Utente : <select name='utente'> ");
while($ris_sel=mysql_fetch_array($seleziona)){
           echo("<option value='$ris_sel[id]'>$ris_sel[cognome], $ris_sel[nome]</option>");
}
echo("</select>");
*/


/*
//select data giorno
echo(" Scadenza prestito. Giorno : <select name='g'>");
for($i=1;$i<=31;$i++){
  if($i==date("d"))
  echo("<option value='$i' selected>$i</option>");
  else
  echo("<option value='$i'>$i</option>");
}
echo("</select>");

//select data mese
echo(" Mese : <select name='m'>");
for($i=1;$i<=12;$i++){
  if($i==date("m"))
  echo("<option value='$i' selected>$i</option>");
  else
  echo("<option value='$i'>$i</option>");
}
echo("</select>");

//select data anno
echo(" Anno : <select name='a'>");
for($i=2006;$i<=2010;$i++){
  if($i==date("Y"))
  echo("<option value='$i' selected>$i</option>");
  else
  echo("<option value='$i'>$i</option>");
}
echo("</select>");
*/
echo("<form name='mio' action='formOrdini+1.php' method='post'>");
echo("<table align='center'><tr><th colspan='2'>INSERISCI</th></tr>");


echo("<tr><td><input type='text' value='id_ordine' name='id_ordine'></td></tr>");
echo("<tr><td><input type='text' value='p.iva fornitore' name='id_utente'></td></tr>");
echo("<tr><td><input type='text' value='gg-mm-aa' name='data'></td></tr>");


echo("<tr><td colspan='2'><input type='submit' value='Inserisci'></form></td></tr>");

echo("<tr><td><form action='index.php'><input type='submit' value='Home'></form></td></tr>");
echo("<tr><td><form action='form+2.php'><input type='submit' value='Anagrafica'></form></td></tr>");


mysql_close($db);
 
 
 ?>
 </body>
 </html>