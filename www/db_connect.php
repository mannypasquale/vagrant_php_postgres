<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = vagrant";
   $credentials = "user = vagrant";
   echo "FUCK"
   //$db = pg_connect( "$host $port $dbname $credentials"  );
   //$db = pg_connect("dbname=vagrant");
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "connected to dB\n";
   }
?>
