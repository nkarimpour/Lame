<head>
</head>
<body>
   <?php
   $a=date("d/m/Y");
  
   
   echo("<tr><td>$a</td></tr>");
   echo("<br><br><tr><td><form action='form.php'><input type='submit' value='Inserisci Fornitore'></form></td></tr>");
   echo("<tr><td><form action='form+2.php'><input type='submit' value='Anagrafica Fornitori'></form></td></tr>");
   echo("<br><br><tr><td><form action='formOrdini.php'><input type='submit' value='Inserisci Ordine'></form></td></tr>");
   echo("<br><br><tr><td><form action='formOrdini+2.php'><input type='submit' value='Storico Ordini'></form></td></tr>");
   ?>
 </body>
 </html>