<?php
header('Content-Type: application/json');
include 'db_connection.php';
$sqlQuery = "SELECT Party, SUM(Votes) as TotalVotes FROM candidatedetails GROUP BY Party;";
$exec =  $mysqli->query($sqlQuery);
$result = $exec->fetch_assoc();
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
$mysqli->close(); 
echo json_encode($data);
?>