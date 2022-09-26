<?php
$user = 'sql3522256';
$password = '9P5537h7Bx'; 
$database = 'sql3522256'; 
$servername='sql3.freesqldatabase.com';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
?>