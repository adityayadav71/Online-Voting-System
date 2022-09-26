<?php
session_start();
error_reporting(0);
include '../db_connection.php';
require 'adminsidebar.php';
$candidatename = $_POST['Name'];
$Email = $_POST['email'];
$Party = $_POST['Party'];
$Slogan = $_POST['Slogan'];
$DOB = date('Y-m-d', strtotime($_POST['DOB']));
$today = date('Y-m-d');
$diff = date_diff(date_create($DOB), date_create($today));
$age = $diff->format("%y");
$contact = $_POST['Contact']; 
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$folder = "../images/CandidateImages/".$filename;
move_uploaded_file($tmpname,$folder);
if(isset($_POST['submit'])){
  if(!empty($candidatename) || !empty($Email) || !empty($Party) || !empty($Slogan) || !empty($DOB) ||!empty($Contact)){
    $result = $mysqli->query("SELECT * FROM canpersonal where email='".$Email."'");
    if ($result->num_rows == 0) {
            $sql1 = $mysqli->query("INSERT INTO canpersonal(Name,Image,Email,Party,Slogan,DOB,Age,Contact)  values('$candidatename', '$folder', '$Email', '$Party', '$Slogan', '$DOB', '$age', '$contact')");
            $sql2= $mysqli->query("INSERT INTO candidatedetails(Name,Image,Age,Party,Slogan,Votes) values('$candidatename','$folder','$age','$Party','$Slogan',0)");
                  if ($sql1) {
                      $_SESSION['status'] = "ADDED";
                      $_SESSION['message'] = "New record inserted sucessfully";
                      $_SESSION['status-code'] = "success";
                  }else{ 
                      $_SESSION['status'] = "ERROR!";
                      $_SESSION['message'] = "Record insertion unsuccessful";
                      $_SESSION['status-code'] = "error";
                  }
        }else {
              $_SESSION['status'] = "ERROR!";
              $_SESSION['message'] = "Someone already registered using this E-mail!";
              $_SESSION['status-code'] = "error";
            }
  }else{
        $_SESSION['status'] = "ERROR!";
        $_SESSION['message'] = "All fields are required";
        $_SESSION['status-code'] = "error";
      }
}
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a Candidate</title>
</head>

<body>
  <section class="home-section">
    <div class="heading">Add a Candidate</div><br>
    <div class="content">
      <form action="" method="POST" enctype='multipart/form-data'>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="Name" placeholder="Enter name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter email" required>
          </div>
          <div class="input-box">
            <span class="details">Party</span>
            <input type="text" name="Party" placeholder="Enter Candidate's home party name" required>
          </div>
          <div class="input-box">
            <span class="details">Slogan</span>
            <input type="text" name="Slogan" placeholder="Enter slogan" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" name="DOB" placeholder="Enter D.O.B" required>
          </div>
          <div class="input-box">
            <span class="details">Contact No.</span>
            <input type="text" name="Contact" maxLength="10" placeholder="Enter number" required>
          </div>
          <div class="input-box">
            <span class="details">IMAGE</span>
            <label for="img">Select image:</label>
            <input type="file" id="image" name="image">
          </div>
        </div>
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
          }unset($_SESSION['status']);
          ?>
        <div class="button">
          <input type="submit" name="submit" value="ADD">
        </div>
      </form>
    </div>
  </section>
</body>

</html>