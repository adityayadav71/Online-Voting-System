<?php
session_start();
include '../db_connection.php';
$sql = "SELECT * FROM candidatedetails ORDER BY ID ASC ";
$result = $mysqli->query("$sql");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/table.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/image3.ico" type="image/x-icon">
  <title>Candidate Details</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name"><a href="/" style="text-decoration: none; color:white;">VoterPortal</a></div>

      <i class="fas fa-bars" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class="fas fa-border-all"></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="CandidateDetails.php">
          <i class="fas fa-user"></i>
          <span class="links_name">Candidate Details</span>
        </a>
        <span class="tooltip">Candidate Details</span>
      </li>
      <li>
        <a href="AddaCandidate.php">
          <i class="fas fa-user-plus"></i>
          <span class="links_name">Add a Candidate</span>
        </a>
        <span class="tooltip">Add a Candidate</span>
      </li>
      <li>
        <a href="RemoveaCandidate.php">
          <i class="fas fa-user-minus"></i>
          <span class="links_name">Remove a candidate</span>
        </a>
        <span class="tooltip">Remove a candidate</span>
      </li>
      <li>
        <a href="ChangePhaseofElection.php">
          <i class="fas fa-calendar-alt"></i>
          <span class="links_name">Change Phase</span>
        </a>
        <span class="tooltip">Change Phase</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="<?php if(isset($_SESSION['adminlogin'])){echo "../images/adminimage.png";}?>" alt="Img">
          <div class="name_job">
            <div class="name"><?php if(isset($_SESSION['adminlogin'])){echo "Admin";}?></div>
            <div class="job"><?php if(isset($_SESSION['adminlogin'])){echo "123";}?></div>
          </div>
        </div>
        <div class="delete"><a onclick="confirmation(event)" href="../home.php"><i class="fas fa-sign-out-alt"
              id="log_out"></i></a></div>
        <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);
          Swal.fire({
            title: 'LOG OUT?',
            text: "You will be redirected to the Home page",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Log out!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "../index.php";
            }
          })
        }
        </script>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="heading">Candidate Details</div><br>
    <div class="container">
      <h2>Responsive Table</h2>
      <div class="table-wrapper">
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
              $mysqli->close(); 
             ?>
          <tbody>
        </table>
      </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
    }
  }
  </script>
</body>

</html>