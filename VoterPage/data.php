<?php
header('Content-Type: application/json');
$conn = mysqli_connect("bkb5iqbtstxgnbrogewy-mysql.services.clever-cloud.com","u3itneofpmip2tjl", "qxTyJHINMYThkxRnNs7v", "bkb5iqbtstxgnbrogewy");
$sqlQuery = "SELECT Party, SUM(Votes) as TotalVotes FROM candidatedetails GROUP BY Party;";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>