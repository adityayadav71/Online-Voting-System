<?php
  $user = 'u3itneofpmip2tjl';
  $password = 'qxTyJHINMYThkxRnNs7v'; 
  $database = 'bkb5iqbtstxgnbrogewy'; 
  $servername='bkb5iqbtstxgnbrogewy-mysql.services.clever-cloud.com';
  $mysqli = new mysqli($servername, $user, $password, $database);
  if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
?>