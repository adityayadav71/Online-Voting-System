<?php
session_start();
error_reporting(0);
$user = 'root';
$password = ''; 
$database = 'voterportal'; 
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
$votername = $_POST['votername'];
$Email = $_POST['Email'];
$Aadhar = $_POST['Aadhar'];
$DOB = date('Y-m-d', strtotime($_POST['DOB']));
$today = date('Y-m-d');
$diff = date_diff(date_create($DOB), date_create($today));
$age = $diff->format("%y");
$number = $_POST['number']; 
$pin = $_POST['pin'];
$filename = $_FILES['image']['name'];
$tmpname = $_FILES['image']['tmp_name'];
$folder = "VoterImages/".$filename;
move_uploaded_file($tmpname,$folder);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$conpass = password_hash($_POST['conpass'],PASSWORD_DEFAULT);
if(isset($_POST['submit'])){
  if(!empty($votername) || !empty($Email) || !empty($Aadhar) || !empty($DOB) ||!empty($number) ||!empty($pin)){
    
    $result = mysqli_query($mysqli,"SELECT * FROM voterdetails where Email='".$Email."'");
    $result2 = mysqli_query($mysqli,"SELECT * FROM voterdetails where Aadhar='".$Aadhar."'");
    if($age > 18){
    if ($result->num_rows == 0 && $result2->num_rows == 0) {
            $sql = mysqli_query($mysqli,"INSERT INTO voterdetails(Name,Image,Email,Aadhar,Contact,DOB,Pincode,Age,pwd)  values('$votername', '$folder', '$Email', '$Aadhar', '$number', '$DOB', '$pin', '$age','$password')");
            $result = mysqli_query($mysqli,"SELECT Name,Email,VID,Age FROM voterdetails WHERE Email = '".$Email."'");
              if ($sql === TRUE) {
                    while($row = mysqli_fetch_array($result))
                       {
                           $to = $row['Email'];  
                           $subject = 'Your Voter ID for Lok Sabha Elections 2021';
                           $message = 'Name: '.$row['Name']."\r\n".'Age: '.$row['Age']."\r\n".'Voter ID: '.$row['VID'];
                           $headers = "From: voterportal838@gmail.com";
                       }
                    if(mail($to, $subject, $message, $headers)){
                        $_SESSION['status'] = "ADDED";
                        $_SESSION['message'] = "Registration sucessful.Voter ID successfully sent to $to...";
                        $_SESSION['status-code'] = "success";
                    }else {
                      $_SESSION['status'] = "ERROR";
                      $_SESSION['message'] = "Registration unsucessful.Please try again";
                      $sql = $mysqli->query("DELETE FROM voterdetails WHERE Email = '".$Email."'");
                      $_SESSION['status-code'] = "error";
                    }
              }else{ 
                      $_SESSION['status'] = "ERROR!";
                      $_SESSION['message'] = "Record insertion unsuccesful. Error: ". $sql . "<br>" . $mysqli->error;
                      $_SESSION['status-code'] = "error";
              }
        }else {
                  $_SESSION['status'] = "ERROR!";
                  if($result->num_rows != 0){
                    $_SESSION['message'] = "Someone already registered using this E-mail!";
                  }
                  if($result2->num_rows != 0){
                    $_SESSION['message'] = "Invalid Aadhar number";
                  }
                  $_SESSION['status-code'] = "warning";
        }
    }else{
            $_SESSION['status'] = "ERROR!";
            $_SESSION['message'] = "You are not eligible to vote as you are under 18.";
            $_SESSION['status-code'] = "error";
    }

}else{
  $_SESSION['status'] = "ERROR!";
  $_SESSION['message'] = "All fields are required";
  $_SESSION['status-code'] = "error";  
}
}
// Close connection
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="AdminPage/test.css">
    <link rel="stylesheet" href="AdminPage/table.css">
    <link rel="stylesheet" href="AdminPage/form.css">
    <script src="table.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="AdminPage/sweetalert.min.js"></script>
    <script type="text/javascript" src="mobile.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <link rel="icon" href="image3.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register to Voter Portal</title>
     <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
   </head>
<body>
<header style="position: relative;height: 59px;top: -215px;left: -10px;right: 0px;display: inline-flex;width: 101%;z-index: 10;margin: 0;">
         <a class="logo" href="/"><img src="\image1.png"style="height:36px; width:197px" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="/AdminLogin.php">Admin</a></li>
                    <li><a href="candidates.php">Candidates</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <a class="cta" href="Login.php">Login</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Services</a>
                <a href="#">Projects</a>
                <a href="#">About</a>
            </div>
</div>
<script type="text/javascript" src="mobile.js"></script>
<section class="home-section" style="left: 0px;width:100%">
    <div class="heading" style="top: 96px;left: 470px;margin: 0;padding: 5px 50px 5px 50px;">Register to VoterPortal</div><br>
           <div class="content" style="width:60%;min-height: 59vh;left: 290px; top: 88px;margin: 35px 9px 19px -23px;">
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="user-details">
                  <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" maxlength="30" name="votername" placeholder="Enter name" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" maxlength="30" name="Email" placeholder="Enter email" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Aadhar Number</span>
                    <input type="text" maxlength="12" name="Aadhar" placeholder="Enter Aadhar Number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date of Birth</span>
                    <input type="date" name = "DOB"placeholder="Enter D.O.B" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Create a Password</span>
                    <input type="password" name="password" placeholder="Enter a password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="conpass" placeholder="Confirm password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Contact No.</span>
                    <input type="text" name = "number" maxlength="10" placeholder="Enter number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Area Pincode</span>
                    <input type="text" name = "pin" maxlength="6" placeholder="Enter area pincode" required>
                  </div>
                  <div class="input-box">
                    <span class="details">IMAGE</span>
                    <label for="image">Select image:</label>
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
                          $_SESSION = array();
                          session_unset();
                          session_destroy();
                            }
                          ?>
                  <div class="button">
                  <input type="submit" name="submit" value="REGISTER">
                  </div>
              </form>
            </div>
          </div>
</section>
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the icons class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the icons class
   }
  }
</script>
</body>
</html>