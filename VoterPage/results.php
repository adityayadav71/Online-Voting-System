<?php
session_start();
require 'votersidebar.php';
include 'db_connection.php';
$sql = "SELECT * FROM candidatedetails ORDER BY ID ASC ";
$result = $mysqli->query($sql);
$sql1 = $mysqli->query("SELECT Phase from phase WHERE NO = 1;");
while($rows= $sql1->fetch_assoc())
{
  if($phase == "RESULTS"){
   $_SESSION['status'] = "WOOHOO!";
   $_SESSION['message'] = "Elections results have been announced!";
   $_SESSION['status-code'] = "info";
  }
}

$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Election Results</title>
</head>

<body>
  <section class="home-section">
    <div class="heading">RESULTS</div><br>
    <div class="container">
      <div class="table-wrapper" style="margin: 80px 70px 70px;">
        <table class="fl-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Age</th>
              <th>Party</th>
              <th>Slogan</th>
              <th>Votes</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
              ?>
            <tr>
              <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
              <td><?php echo $rows['ID'];?></td>
              <td><?php echo $rows['Name'];?></td>
              <td><?php echo $rows['Age'];?></td>
              <td><?php echo $rows['Party'];?></td>
              <td><?php echo $rows['Slogan'];?></td>
              <td><?php echo $rows['Votes'];?></td>
              <td><?php echo '<img src="../'.$rows['Image'].'" alt="Image" style="width: 100px; height: 100px;">';?>
              </td>
            </tr>
            <?php
                }
             ?>
          <tbody>
        </table>
        <?php
            if(isset($_SESSION['status'])){
              ?><script>
        Swal.fire({
          title: "<?php echo $_SESSION['status']?>",
          text: "<?php echo $_SESSION['message']?>",
          icon: "<?php echo $_SESSION['status-code']?>",
          button: "OK!",
        });
        </script>
        <?php
            }
          ?>
      </div>
  </section>
</body>

</html>