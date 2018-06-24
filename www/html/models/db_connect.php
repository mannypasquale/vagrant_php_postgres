<?php
$conn_string = "host=localhost port=5432 dbname=vagrant user=vagrant password=basketball";
$db = pg_connect($conn_string);
if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "connectd bitch\n\n\n\n\n";
   }

?>
