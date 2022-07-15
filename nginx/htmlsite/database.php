<?php
$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user = postgres password=pass123";
   $db = pg_connect( "$host $port $dbname $credentials");
?>