<?php
$user = 'root';
$password = ''; 
$database = 'voterportal'; 
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
?>